# Making a Trello Clone with Laravel and Vuejs
This is a example application created for a course that was taught by me, which shows how to create a simple Trello clone using Laravel and Vue.

## Preview
<p align="center">
    <img src="treclon.gif"/>
</p>

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* Valet Linux (optional).
* A webserver like Nginx or Apache.
* A Node Package Manager ( npm or yarn ).

### Install
Clone the git repository on your computer
```
$ git clone https://github.com/fsrocha-dev/curso-laravel-vue-spa.git
```

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.
```
$ cd curso-laravel-vue-spa
$ composer install
```

- Install node modules in frontend subfolder
```
$ cd frontend
$ npm install
```

### Setup
- When you are done with installation, copy the `.env.example` file to `.env`
```
$ cp .env.example .env
```

- Generate the application key
```
$ php artisan key:generate
```

- Add your database credentials to the necessary `env` fields

- Migrate the application
```
$ php artisan migrate
```

- Seed Database
```
php artisan db:seed
```

- Install Passport
```
$ php artisan passport:install
```

### Run the application
```
$ php artisan serve
$ cd frontend && npm run build
```

## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces

## Acknowledgments
* [Laravel](https://laravel.com) - The excellent documentation explaining how to get started with Laravel and Laravel Passport made it easy to provide a step by step guide for beginners to follow the application
* [Vue](https://vuejs.org) - Concise documentation
