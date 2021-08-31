<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Peter - Helix Sleep Challenge

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Web App Demo](https://helixsleepchallenge.herokuapp.com).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Peter - Helix Sleep Challenge

Below are the tools and technologies used for implementing the challenge:

### Laravel (PHP)

I used Laravel mainly because I have several years of experience working with the framework for building full fledged web applications and also for api endpoints development for mobile projects. Another reason for choosing Laravel even though I used an API approach to provide data to my views; Laravel lets you have your frontend and backend on the same project and you don't have to go through the hassle of navigating and switching between two projects/repos.

I used Laravel to create the CRUD endpoints for "products" and also create different variations for a given product id. You can use the “/api/products/{id}” endpoint to fetch details of a product with a given product ID and the variations would be returned alongside the product details and that is what is used to populate the product page of the challenge.

### VueJS & Tailwind CSS

My familiarity with VueJs as a frontend framework and also the seamless integration with Laravel made me decide to use the framework for the frontend of the challenge. I used VueJS events emissions to trigger actions like updating the product banner/image, selected variation state and also for dynamically changing the “alt” property of the product banner image for accessibility. Tailwind was my choice for implementing the design because of the simplicity in implementation and the organized rules.

### Heroku

I thought of a free hosting platform that can serve my web app from my GitHub repo directly with quick support for auto-deploy and also integrate my database using tools like ClearDB; Heroku was my all-in-one goto solution for this challenge.

## Database Structure


## API Requests & Responses

<img src="https://i.ibb.co/NmMTtgy/Screenshot-2021-08-31-at-9-04-17-PM.png" alt="Screenshot-2021-08-31-at-9-04-17-PM" border="0" />