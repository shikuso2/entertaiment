[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
Add-Type -AssemblyName PresentationFramework

$xml = @"
<Window xmlns='http://schemas.microsoft.com/winfx/2006/xaml/presentation'
        xmlns:x='http://schemas.microsoft.com/winfx/2006/xaml'
        Title='WoE app by:shikuso BETA 0.0.2' Height='500' Width='800' Background='#292d3e' WindowStartupLocation='CenterScreen'>
        <Grid>
            <Grid.ColumnDefinitions>
                <ColumnDefinition Width='150'/>
                <ColumnDefinition Width='*'/>
            </Grid.ColumnDefinitions>
            <Border Grid.Column='0' Background='#31324b' BorderBrush='Black' BorderThickness='0,0,1,0'>
                <StackPanel>
                    <Button Name='btnNavWarcraft' Content='WARCRAFT' Height='50' Background='#31324b' Foreground='White' FontSize='18' BorderThickness='0,0,0,1' BorderBrush='Black'/>
                    <Button Name='btnNavMods' Content='MODS' Height='40' Background='#31324b' Foreground='White' BorderBrush='Black' BorderThickness='0,0,0,1'/>
                    <Button Name='btnNavMaps' Content='MAPS' Height='40' Background='#31324b' Foreground='White' BorderBrush='Black' BorderThickness='0,0,0,1'/>
                    <Button Name='btnNavHelp' Content='by: shikuso' Height='40' Background='#31324b' Foreground='Gray' BorderBrush='Black' BorderThickness='0,0,0,1'/>
                </StackPanel>
            </Border>

            <Grid Grid.Column='1'>
                <UniformGrid Name='ViewWarcraft' Columns='3' Rows='2' Margin='20' Visibility='Visible'>
                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III 1.27b' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btnInstalar' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III 1.26a' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn2' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='WC III Loader' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn3' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='BattleNet Editor' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn4' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>

                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='Local Files' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btn5' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>
                </UniformGrid>

                <UniformGrid Name='ViewMods' Columns='3' Rows='2' Margin='20' Visibility='Hidden'>                    
                    <StackPanel Margin='10' HorizontalAlignment='Center'>
                        <TextBlock Text='Textures HD' HorizontalAlignment='Center' Foreground='White' Margin='5'/>
                        <Button Name='btnHD' Content='DOWNLOAD' Width='120' Height='40' Background='#002040' Foreground='White' BorderBrush='#d5a21f' BorderThickness='2'/>
                    </StackPanel>
                </UniformGrid>
                
            </Grid>
            <StackPanel VerticalAlignment='Center'>
                <TextBlock Name='status' Text='DOWNLOADING... 50%' HorizontalAlignment='Center' Margin='0,5,0,0' FontSize='13'/>
            </StackPanel>
           
        </Grid>
        
</Window>
"@

$reader = [System.Xml.XmlReader]::Create([System.IO.StringReader] $xml)
$window = [Windows.Markup.XamlReader]::Load($reader)

# Referencias de objetos
$btnInstalar = $window.FindName('btnInstalar')
$statusText = $window.FindName('status')
$viewWarcraft = $window.FindName('ViewWarcraft')
$viewMods = $window.FindName('ViewMods')

# Navegación
$window.FindName('btnNavMods').Add_Click({
    $viewWarcraft.Visibility = 'Hidden'
    $viewMods.Visibility = 'Visible'
})

$window.FindName('btnNavWarcraft').Add_Click({
    $viewWarcraft.Visibility = 'Visible'
    $viewMods.Visibility = 'Hidden'
})

# Lógica de descarga
$btnInstalar.Add_Click({
    $fileId = "1x9GbOJznMyr5_vP59zStxvjfosWFoSxS"
    $tempZip = "$env:TEMP\archivo_temporal.zip"
    $destinoFinaL = "$env:USERPROFILE\Desktop\MiAppDescomprimida"

    try {
        $btnInstalar.IsEnabled = $false
        $statusText.Text = "AUTENTICANDO CON GOOGLE..."

        # 1. Preparar la sesión y la URL base
        #$urlBase = "https://docs.google.com/uc?export=download&id=$fileId"
        $urlBase = "https://drive.usercontent.google.com/download?id=1x9GbOJznMyr5_vP59zStxvjfosWFoSxS&export=download&authuser=0&confirm=t&uuid=c9bf6747-1503-4438-a5fe-939aa0cfb453&at=APcXIO00FWDdoeMD49a9i-FL555W%3A1770861621446"
        
        # 2. Primera petición para obtener el código de confirmación (bypass de aviso de virus)
        # Se usa -UseBasicParsing para evitar que PowerShell intente abrir el motor de IE
        $resp = Invoke-WebRequest -Uri $urlBase -SessionVariable session -UserAgent "Mozilla/5.0 (Windows NT 10.0; Win64; x64)" -UseBasicParsing
        
        # Extraer el código de confirmación del HTML de respuesta
        $confirmCode = ""
        if ($resp.Content -match 'confirm=([0-9A-Za-z_]+)') {
            $confirmCode = $matches[1]
        }

        $statusText.Text = "DESCARGANDO 1 GB... (Espera)"

        # 3. Descarga real usando el token de confirmación y la sesión de cookies activa
        if ($confirmCode -ne "") {
            $urlDescarga = "https://docs.google.com/uc?export=download&confirm=$confirmCode&id=$fileId"
        } else {
            $urlDescarga = $urlBase
        }

        Invoke-WebRequest -Uri $urlDescarga -OutFile $tempZip -WebSession $session -UserAgent "Mozilla/5.0" -UseBasicParsing

        # 4. Verificación de integridad (Si pesa menos de 1MB, es un error de Google)
        $fileSize = (Get-Item $tempZip).Length
        if ($fileSize -lt 1MB) {
            $contenidoError = Get-Content $tempZip -Raw
            throw "Google bloque la descarga automtica. Tamao recibido: $($fileSize / 1KB) KB. Verifica que el archivo sea PBLICO."
        }

        $statusText.Text = "EXTRAYENDO..."
        if (!(Test-Path $destinoFinaL)) { New-Item -ItemType Directory -Path $destinoFinaL -Force }
        Expand-Archive -Path $tempZip -DestinationPath $destinoFinaL -Force
        Remove-Item $tempZip
        
        $statusText.Text = "INSTALACIN COMPLETADA"
        [System.Windows.MessageBox]::Show("xito! El archivo de 1GB se instal correctamente.", "Completado")
    }
    catch {
        $statusText.Text = "ERROR"
        [System.Windows.MessageBox]::Show("Error crtico: $($_.Exception.Message)", "Error de Acceso")
    }
    finally {
        $btnInstalar.IsEnabled = $true
    }
})

$window.ShowDialog() | Out-Null