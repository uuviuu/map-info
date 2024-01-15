<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## О проекте

Проект состоит из решения двух задач: 
- Задача #1. SQL. Для каждого артикула вывести поставщика или поставщиков с самой высокой ценой.
- Задача #2. PHP. Получить информацию о районе города, ближайшим станция метро, улице и дому по адресу,
  введённого пользователем в текстовом поле.

Реализовано:
- Авторизация по логину и паролю, регистрация
- Развертывания проекта через docker-compose
- Верстка сайта на библиотеке Bootstrap
- При разработке использовались pint и phpstan

## Установка

- в папку с проектами установите репозиторий: git clone https://github.com/uuviuu/map-info.git
- docker-compose up -d - установить зависимости из файла docker-compose.yml
- docker-compose exec php fish
- cd map-info/
- composer install
- composer dump-autoload
- cp .env.example .env
- php artisan key:generate
- php artisan migrate

Контакты:
[почта](mailto:my.test.laravel.message@gmail.com)
[telegram](https://t.me/uuviuu)