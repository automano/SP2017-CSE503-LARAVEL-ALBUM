### Name and ID
Zhening Li 445612

### Project Description
Basically, I want to create a website similar to Google Photos. Users can create albums and upload their photos into their albums.


### Creative Project Rubric
- Submite the rubric on time (5 Points)  

- Set up development environment (15 Points)
    - Install Laravel on localhost (10 points)
    - Use Laravel to manipulate MYSQL (5 points) 

- User Management (10 Points)
    - User can log in (3 points)
    - New users can register (3 points)
    - User can get an email to reset their password when they forget it (3 points)
    - Users can log out (1 points)  

- Albums Management (15 Points)
    - Create New album (5 points)
    - Edit the name and description of album (5 points)
    - Delete old album (5 points

- Photos Management (15 Points)  
    - Upload new photos to chosen album (5 points)
    - Add name and description to new photo (5 points)
    - delete existing photos (5 points)  

- Best Practices (15 Points)
    - Code is well formatted and easy to read, with proper commenting (3 points)
    - Safe from SQL Injection attacks (2 points)
    - Site follows the FIEO philosophy (3 points)
    - All pages pass the W3C validator (2 points)
    - CSRF tokens are passed when creating, editing, and deleting comments and stories (5 points)  

- Usability (5 Points)
    - Site is intuitive to use and navigate (4 points)
    - Site is visually appealing (1 point)  

- Creative Portion (20 Points)
    - Add Captcha when user sign up (5 points)
    - Add cover for each album (5 points)
    - Use masonry to do  photos layout (Waterfall flow arrangement) (10 points)


### Declaration
Install Laravel on Mac (Toturial: https://medium.com/@kunalnagar/install-laravel-5-on-os-x-23f3578386f1) 

Laravel User Authentication (Toturial: https://auth0.com/blog/creating-your-first-laravel-app-and-adding-authentication/ & https://laravel.com/docs/5.4/authentication)

Laravel Blade Templates (Toturial: https://laravel.com/docs/5.4/blade)

Laracel Routing (Toturial: https://laravel.com/docs/5.4/routing)

Laravel database (Toturial: https://laravel.com/docs/5.4/database)

CSRF in Laravel (Toturial: https://laravel.com/docs/5.4/csrf)

Photo css (Adapted from https://www.w3schools.com/css/css3_images.asp)

Waterfalls Flow Layout (Adapted from: http://masonry.desandro.com/#initialize-with-jquery)


### Usage

Launch the app by: 
```sh
$ php artisan serve
```
Application run at http://localhost:8000/