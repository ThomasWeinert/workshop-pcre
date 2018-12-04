@echo off
.\tools\phpunit -c .\phpunit.xml --testdox --color=always --filter %1
