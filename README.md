
## Peter - Helix Sleep Challenge


- [Web App Demo](https://helixsleepchallenge.herokuapp.com).


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

Products table structure:

<img src="https://i.ibb.co/CMzMMwY/Screenshot-2021-08-31-at-9-00-28-PM.png" alt="Screenshot-2021-08-31-at-9-00-28-PM" border="0" />

Product table content:

<img src="https://i.ibb.co/6NN4K3L/Screenshot-2021-08-31-at-9-00-45-PM.png" alt="Screenshot-2021-08-31-at-9-00-45-PM" border="0" />

Variations table structure:

<img src="https://i.ibb.co/DpBRhPT/Screenshot-2021-08-31-at-9-00-56-PM.png" alt="Screenshot-2021-08-31-at-9-00-56-PM" border="0" />

Variations table content:

<img src="https://i.ibb.co/xzhkLpY/Screenshot-2021-08-31-at-9-01-07-PM.png" alt="Screenshot-2021-08-31-at-9-01-07-PM" border="0" />


## API Requests & Responses

Create new product:

<img src="https://i.ibb.co/Rch7Frx/Screenshot-2021-08-31-at-9-04-05-PM.png" alt="Screenshot-2021-08-31-at-9-04-05-PM" border="0" />

Create new variation:

<img src="https://i.ibb.co/NmMTtgy/Screenshot-2021-08-31-at-9-04-17-PM.png" alt="Screenshot-2021-08-31-at-9-04-17-PM" border="0" />

Fetch Single product + variations:

<img src="https://i.ibb.co/JryVdrg/Screenshot-2021-08-31-at-9-02-06-PM.png" alt="Screenshot-2021-08-31-at-9-02-06-PM" border="0" />

