@echo off

:: Pull the variables from \include\variables.cmd which sets the path
:: for this current cmd prompt. No permanent change ever happens.
:: Afterwards, launch the bash prompt

call "%~dp0include\variables.cmd" && "%~dp0include\MinGW\git\bin\bash.exe"

 

