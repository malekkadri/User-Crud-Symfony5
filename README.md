# User-Crud-Symfony5
Users CRUD using SB admin template with login, register and roles requires php: >=7.2.5/Symfony 5.4
## features 
### Languages and frameworks
* PHP >=7.2.5
* MySQL (MariaDB)
* HTML / CSS
* Javascript (Aos, Glightbox, Isotope, Validate, Purecounter, swipper, Waypoints, Bootstrap)
* Bootstrap (v5)
* Google fonts (Open Sans)
* Font awesome 5
### Entities
* User
### Pages
* home
* user profile
* login
* registration
* admin section and dashboard


## To initialize the project 
* clone the repository: `git clone https://github.com/malekkadri/User-Crud-Symfony5.git`
* Install all packages : `composer install`
* set up a `.env.local` file from `.env` with:
    * MySQL credentials, server address, server port, database name
    * MAILER_DSN info to send emails (i use Mailhog for dev and a SMTP server for prod)
* Create new database: `symfony console doctrine:database:create`
* Build the migration: `symfony console make:migration`
* Export into MySQL: `symfony console doctrine:migrations:migrate`
* Install CKEditor : `symfony console ckeditor:install`
* Install CKEditor assets : `symfony console assets:install public`
* Install Elfinder (file browser for CKEditor) : `symfony console elfinder:install`
* Change to PRODUCTION in `.env.local` (APP_ENV=prod)
* Empty cache : `symfony console cache:clear`
* Register a first account (/register) then change its role to ["ROLE_ADMIN"] in database
* Login with this admin account and connect to admin dashboard (/login)
* ... then start to create new categories and new articles
* Tags will be automaticaly created as you write them (SELECT2 JQuery plugin)
