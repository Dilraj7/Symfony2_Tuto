Symfony Tuto Project : 
========================

Following a tuto to learn Symfony2

======= Achievements ========

First step (done)

Second step (working...)


=========== Links ============

http://j-place.developpez.com/tutoriels/php/creer-premiere-application-web-avec-symfony2/

========= Commands ===========

Create bundle :

php app/console generate:bundle

Generate Entity :

php app/console doctrine:generate:entities MyApp

Create Database :

php app/console doctrine:database:create

Create Tables :

php app/console doctrine:schema:create

Update Tables :

php app/console doctrine:schema:update --force

Update CSS, JS & Img :

php app/console assets:install web

Clear cache :

php app/console cache:clear

Create User on FOSUserBundle :

php app/console fos:user:create username email password

Promote an user to admin :

php app/console fos:user:promote username ROLE_ADMIN

In case of issues, to check entity :

php app/console cache:warmup --env=prod --no-debug
