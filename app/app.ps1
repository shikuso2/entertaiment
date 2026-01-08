Add-Type -AssemblyName PresentationFramework

$xml = @"
<Window xmlns='http://schemas.microsoft.com/winfx/2006/xaml/presentation' Title='Mi App' Height='150' Width='300'>
    <Grid>
        <Button Name='btn' Content='Haz clic aquí' Margin='20'/>
    </Grid>
</Window>
"@

$reader = [XML.XmlReader]::Create([System.IO.StringReader]::GetTextReader($xml))
$window = [Windows.Markup.XamlReader]::Load($reader)

$button = $window.FindName('btn')
$button.Add_Click({ [System.Windows.MessageBox]::Show('¡Hiciste clic!') })

$window.ShowDialog()
