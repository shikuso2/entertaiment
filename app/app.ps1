[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
Add-Type -AssemblyName PresentationFramework

# 1. Configuración de rutas
$url = "https://drive.google.com/uc?export=download&id=1LLldXts3rzwjoq0qDgoQHMlzAS3we5rP"
$tempZip = "$env:TEMP\archivo_temporal.zip"       # Se guarda en carpeta temporal
$destinoFinaL = "$env:USERPROFILE\Desktop\MiAppDescomprimida" # Carpeta en el escritorio


$xml = @"
<Window xmlns='http://schemas.microsoft.com/winfx/2006/xaml/presentation'
        xmlns:x='http://schemas.microsoft.com/winfx/2006/xaml'
        Title='WoE app' Height='500' Width='800' Background='#1A1A1A' WindowStartupLocation='CenterScreen'>
    <Border Background='#4A5C8E' BorderBrush='Black' BorderThickness='2' Margin='10'>
        <Grid>
            <Grid.ColumnDefinitions>
                <ColumnDefinition Width='150'/>
                <ColumnDefinition Width='*'/>
            </Grid.ColumnDefinitions>

            <Border Grid.Column='0' Background='#7292C1' BorderBrush='Black' BorderThickness='0,0,1,0'>
                <StackPanel>
                    <Button Name='btnNavWarcraft' Content='warcraft' Height='50' Background='#7292C1' FontSize='18' BorderThickness='0,0,0,1' BorderBrush='Black'/>
                    <Button Name='btnNavMods' Content='Mods' Height='40' Background='#7292C1' BorderBrush='Black' BorderThickness='0,0,0,1'/>
                    <Button Name='btnNavMaps' Content='Maps' Height='40' Background='#7292C1' BorderBrush='Black' BorderThickness='0,0,0,1'/>
                    <TextBlock Text='by: shikuso' Margin='10,150,0,0' Foreground='#D0D0D0'/>
                </StackPanel>
            </Border>

            <Grid Grid.Column='1'>
                <UniformGrid Name='ViewWarcraft' Columns='3' Rows='2' Margin='20' Visibility='Visible'>
                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III 1.27b' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btnInstalar' Content='descargar' Width='120' Height='40' Background='#0042FB' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III 1.26a' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn2' Content='descargar' Width='120' Height='40' Background='#0042FB' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III Loader' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn3' Content='descargar' Width='120' Height='40' Background='#0042FB' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='BattleNet Editor' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn4' Content='descargar' Width='120' Height='40' Background='#0042FB' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='Local Files' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn5' Content='descargar' Width='120' Height='40' Background='#0042FB' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>
                </UniformGrid>

                <UniformGrid Name='ViewMods' Columns='3' Rows='2' Margin='20' Visibility='Hidden'>
                    <StackPanel Margin='10'>
                        <TextBlock Text='Mod Gráficos HD' Foreground='White' HorizontalAlignment='Center'/>
                        <Button Name='btnModHD' Content='descargar' Width='110' Height='35' Background='#28A745' Foreground='White' BorderBrush='#FFB900' BorderThickness='2'/>
                    </StackPanel>
                </UniformGrid>
            </Grid>
        </Grid>
    </Border>
</Window>
"@

$reader = [System.Xml.XmlReader]::Create([System.IO.StringReader] $xml)
$window = [Windows.Markup.XamlReader]::Load($reader)

$button = $window.FindName('btnInstalar')
$statusText = $window.FindName('status')

# Elementos de Navegación
$viewWarcraft = $window.FindName('ViewWarcraft')
$viewMods = $window.FindName('ViewMods')

# Evento para ir a MODS
$window.FindName('btnNavMods').Add_Click({
    $viewWarcraft.Visibility = 'Hidden'
    $viewMods.Visibility = 'Visible'
})

# Evento para volver a WARCRAFT
$window.FindName('btnNavWarcraft').Add_Click({
    $viewWarcraft.Visibility = 'Visible'
    $viewMods.Visibility = 'Hidden'
})

# Lógica de descarga de un Mod (Ejemplo)
$window.FindName('btnModHD').Add_Click({
    [System.Windows.MessageBox]::Show("Descargando Mod de Gráficos...")
    # Aquí pones tu función de Invoke-WebRequest
})



$button.Add_Click({
    try {
        $statusText.Text = "Descargando..."
        $button.IsEnabled = $false
        
        # Descargar el archivo
        Invoke-WebRequest -Uri $url -OutFile $tempZip
        
        $statusText.Text = "Descomprimiendo..."
        
        # Crear la carpeta de destino si no existe
        if (!(Test-Path $destinoFinaL)) { New-Item -ItemType Directory -Path $destinoFinaL }
        
        # DESCOMPRIMIR (Solo funciona con .zip de forma nativa)
        Expand-Archive -Path $tempZip -DestinationPath $destinoFinaL -Force
        
        # Borrar el archivo zip temporal para no dejar rastro
        Remove-Item $tempZip
        
        [System.Windows.MessageBox]::Show("¡Listo! Archivos extraídos en: $destinoFinaL")
        #$window.Close()
    }
    catch {
        [System.Windows.MessageBox]::Show("Error: $_")
        $button.IsEnabled = $true
    }
})




$window.ShowDialog() | Out-Null