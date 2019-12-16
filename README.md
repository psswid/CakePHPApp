## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `composer install`.
3. Create database and add connection in `app.php` and execute `bin/cake migrations migrate`.
4. Execute `bin/cake migrations migrate -p CakeDC/Users` and `bin/cake users addSuperuser`.
5. Run server with `bin/cake server`.

