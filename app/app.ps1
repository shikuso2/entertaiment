Write-Host "¡Hola! Esta aplicacion se ejecuta desde la nube." -ForegroundColor Cyan
$usuario = [System.Security.Principal.WindowsIdentity]::GetCurrent().Name
Write-Host "Estas ejecutando esto como: $usuario"
pause