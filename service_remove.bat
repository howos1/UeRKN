@echo off
chcp 65001 >nul

net session >nul 2>&1
if %errorLevel% neq 0 (
    powershell -Command "Start-Process '%~f0' -Verb RunAs"
    exit /b
)


set SRVCNAME=uerkn

net stop %SRVCNAME%
sc delete %SRVCNAME%
cls

net stop "WinDivert"
sc delete "WinDivert"
net stop "WinDivert14"
sc delete "WinDivert14"

cls
exit
