# Laravel oauth2 QuickStart

This is an laravel web application with oauth2 authenticate service.Here i create a quick start for authenticate with customer using oauth2.


## How to start

To start first `git clone` and that run `composer install` then
 `php artisan make:auth` then `php artisan vendor:publish` then `php artisan migrate` then 
 `php artisan db:seed` after running all this configuration is done.
 
## How to authenticate
 
 For check authentication and get access token
 we can use postman.In postman the request the url will `url/oauth/access_token` and post parameter will 
 
 ```
 username
 password
 grant_type
 client_id
 client_secret
 ```
 
 After send a post request using those parameter will get an access token.Using this access token we can get authenticate user information.
 Request get url will `url/api` and get parameter will
 
 ```
 access token
 ```
# Website tutorial

I wrote a blog about that if face any problem,can take a help from here [oauth with laravel](http://www.kingpabel.com/oauth2-with-laravel/)


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
