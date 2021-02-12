Dim oShell
Set oShell = CreateObject("WScript.Shell")
i = 0
Do While i = 0
oShell.run "shell.vbs"
WScript.Sleep(10000)
Loop