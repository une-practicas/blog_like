# Blog-Like

## Descripción

Este es un proyecto creado para la materia de Aplicaciones Web impartida en la UNE.

Este proyecto fue realizado con laravel.
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# PHP Artisan

PHP Artisan es una parte indispensable a la hora de trabajar con laravel. Artisan viene incluido con Laravel y es una intefaz de para linea de comandos (cli). Artisan nos permite manipular toda nuestra aplicacion con comandos cortos e intuitivos.

Una lista completa de comandos de Artisan se puede visualizar colocando en nuestro proyecto la instrucción:
~~~
> php artisan list
~~~

Entre los comandos mas relevantes de Artisan se encuentran:
~~~
> php artisan make:controller
> php artisan make:model
> php artisan make:auth
> php artisan make:migration
> php artisan route:list
> php artisan migrate:refresh
> php artisan make:seeder
> php artisan migrate:refresh --seed
~~~

Con el comando help se puede determinar para que sirve cada uno de estos comandos, por ejemplo:

~~~
> php artisan help make:migration

Description:
  Create a new migration file
~~~


# ¡¡Subiendo la aplicación a Heroku!!

<p align="center"><img src="https://www3.assets.heroku.com/assets/logo-purple-08fb38cebb99e3aac5202df018eb337c5be74d5214768c90a8198c97420e4201.svg"></p>

Heroku es un servicio de Hosting el cual nos permite subir nuestra aplicación hecha en PHP con Laravel a Internet.
Para ello realizaremos los siguientes pasos:
1. Crear una cuenta de Heroku en: https://signup.heroku.com/.
2. Crear una app en Heroku:
	Todos los sitios de Heroku son llamados apps, para crear una debemos entrar a nuestra cuenta y entrar a New>Create new app.
 Llenamos el App name y damos siguiente.
3. Heroku nos pedirá el medio por donde subiremos el código al sitio. Usaremos Heroku Git.
Seguiremos las instrucciones del sitio. Primero instalando Heroku CLI. Continuar con los comandos importantes.

### Comandos importantes
Login a Heroku:
~~~
> heroku login
~~~
Sincronizar ambiente local con ambiente remoto
~~~
> heroku git:remote -a <app name>
~~~

Actualizar app (cada que actualizemos nuestro código)
~~~
> git push heroku master
~~~

### Variables del servidor
Hay que inicializar unas variables en el servidor.
APP_DEBUG nos permite decirle a laravel que la aplicacion este en modo de prueba, esto nos permitira ver los errores cuando se presenten.  Esto se hace de la siguiente manera:
~~~
> heroku config:set APP_DEBUG=true
~~~
Ya cuando la aplicación este lista para producción volveremos a ponerla en false.

Ademas de lo anterior hay que configurar la llave de nuestro proyecto, esta es una que necesita laravel para trabajar. La llave indicada esta en nuestro archivo .env y se llama APP_KEY. Esta la devemos de copiar y agregar al servidor con la instrucción:
~~~
> heroku config:set APP_KEY=<llave>
~~~
