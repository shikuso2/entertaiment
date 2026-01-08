Add-Type -AssemblyName PresentationFramework

# 1. Configuración de rutas
$url = "https://drive.google.com/uc?export=download&id=1LLldXts3rzwjoq0qDgoQHMlzAS3we5rP"
$tempZip = "$env:TEMP\archivo_temporal.zip"       # Se guarda en carpeta temporal
$destinoFinaL = "$env:USERPROFILE\Desktop\MiAppDescomprimida" # Carpeta en el escritorio

$xml = @"
<Window xmlns='http://schemas.microsoft.com/winfx/2006/xaml/presentation' 
        Title='Instalador' Height='180' Width='350' WindowStartupLocation='CenterScreen'>
    <Grid>
        <StackPanel VerticalAlignment='Center' Margin='20'>
            <TextBlock Text='Presiona para instalar la aplicación' HorizontalAlignment='Center' Margin='0,0,0,15'/>
            <Button Name='btnInstalar' Content='Instalar y Descomprimir' Height='40' Background='#0078D4' Foreground='White'/>
            <TextBlock Name='status' Text='' HorizontalAlignment='Center' Margin='0,5,0,0'/>
        </StackPanel>
    </Grid>
</Window>
"@

$reader = [System.Xml.XmlReader]::Create([System.IO.StringReader] $xml)
$window = [Windows.Markup.XamlReader]::Load($reader)
$button = $window.FindName('btnInstalar')
$statusText = $window.FindName('status')

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