@echo off


call "%~dp0php\variables.cmd"

pushd "%~dp0www" && cmd /k php -S localhost:8080



