<h1><center><b>Pharmacy System using Laravel 9</b></center></h1>

<h3>Tested Environment</h3>
<ul type="disc">
    <li>PHP 8.0</li>
    <li>MySQL 5.0</li>
    <li>Composer 2.2.6</li>
</ul>

<h3>How to setup</h3>
<ul type="disc">
    <li><code>composer install</code></li>
    <li>Rename .env.exaple to .env</li>
    <li>Add these global variables to .env file</li>
        DB_DATABASE=pharmacydb<br>
        DB_USERNAME=root<br>
    <li><code>php artisan key:generate</code></li>
    <li><code>php artisan migrate</code></li>
    <li><code>php artisan db:seed</code></li>
    <li><code>php artisan serve</code></li>
    <li>App will run on this URL<code>http://127.0.0.1:8000</code></li>
</ul>

<h3>Admin User</h3>
<ul>
    <li>admin@gmail.com</li>
    <li>12345678</li>
</ul>

<h3>Pharmacy System Screens</h3>

![image description](https://github.com/daskon/pharmacy-app/blob/main/public/images/user_login.png)

![image description](https://github.com/daskon/pharmacy-app/blob/master/public/images/user_registration.png)

![image description](https://github.com/daskon/pharmacy-app/blob/master/public/images/user_dashboard.png)

![image description](https://github.com/daskon/pharmacy-app/blob/master/public/images/admin_dashboard.png)