# bus_booking

Clone this repo from https://github.com/yasserebid/bus_booking/

Put an .env file in you project 

Create a database and put its name in the .env file

I am using Mysql DB

composer install

php artisan migrate

php artisan db:seed

php artisan passport:install --force

php artisan passport:keys

Now You are ready to go :

go to  /bus_booking/public

Register a new account and then login and feel free to test

Info about data that has been seeded : 

we have two lines : 
Cairo to Alex
And Cairo to Asyut

Cairo to alex goes over  ( Banha - Tanta - Dmanhour)

Cairo to Asyut goes over  (Alfayum - Almenia) 

For APIs : 

1 -  Register API : URL (/bus_booking/public/api/register) Post
accepts : [name - email - password - password_confirmation]

2- Login API : URL (/bus_booking/public/api/login) Post
accepts : [email - password]

3- Cities API : URL (/bus_booking/public/api/cities) Get

4- Search Trip API : URL (/bus_booking/public/api/where-to) Post
accepts : [from - to]  (from and to both are city ids)

5- Line Details API : URL (/bus_booking/public/api/line-details) post
accepts : {
	"from_city_id":,
	"to_city_id":,
	"line_id":
}

6- Booking API : URL (/bus_booking/public/api/booking) Post
accepts : {
	"from_city_id":,
	"to_city_id":,
	"line_id":,
	"bus_seat_id":
}
