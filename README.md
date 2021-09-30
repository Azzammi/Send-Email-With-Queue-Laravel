# Send Email With Queue

Using Redis as driver, Laravel Horizon

Waiting time too long to send email, this repositoy is good example for you to using queue. Especially on laravel

Reference tutorial to create and run [Laravel Daily](https://www.youtube.com/watch?v=rVx8xKisbr8) 

To deliver you app on a server, you have to (on you dev environement) :

  * Git clone the tag/branch that you want to deliver
  * Launch the command `composer install`
  * Rename `env.example` to `env`
  * Adjust di env file
  * run `php artisan key:generate`
  * Create sqlite file
```
touch database/database.sqlite
```
  * run `php artisan migrate:fresh --seed`
  * and just run `php artisan serve`


That's all, 

## Screenshot
### Main
![image](https://user-images.githubusercontent.com/23116326/128605734-5f7db298-4a96-495a-81e5-e556b162eb39.png)
### Laravel Horizon
![image](https://user-images.githubusercontent.com/23116326/135388636-2998d0b6-49d8-44ae-8281-c970afc7fb43.png)

