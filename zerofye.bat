@echo off
TITLE Zeruxa
cd /d %~dp0

if exist src (
  if exist bin\php.exe (
    start bin\php.exe src\zerofye\Zerofye.php

  ) else (
   echo "We can't find your PHP bin. Please download it"
   pause
  )
) else (
 echo "We can't find Zerofye src. Please download and add the src here"
 pause
)