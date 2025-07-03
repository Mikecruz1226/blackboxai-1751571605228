program\php\php.exe program\code\prepare_json.php

set /a port=%random% %%30000 +10000

timeout /t 1

start program\php\php.exe -S localhost:%port% -t program/web

timeout /t 1

start http://localhost:%port%
