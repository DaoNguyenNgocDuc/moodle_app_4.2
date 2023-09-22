# Moodle App


This is the primary repository of source code for the official mobile app for Moodle.

* [User documentation](https://docs.moodle.org/en/Moodle_app)
* [Developer documentation](https://moodledev.io/general/app)
* [Development environment setup](https://moodledev.io/general/app/development/setup)
* [Bug Tracker](https://tracker.moodle.org/browse/MOBILE)
* [Release Notes](https://moodledev.io/general/app_releases)

This project is tested with BrowserStack.

## License


[Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0)

 ### Fix Apache 2.0 CORS error
 - Enable header module
 ```
 sudo a2enmod headers
 ```
 - Add the `Header add Access-Control-Allow-Origin "*"` directive to your Apache config file `/etc/apache2/apache2.conf`
 ```
 <Directory /var/www/html>
   ...
   Header set Access-Control-Allow-Origin "*"
   ...
</Directory>
 ```
 - Then restart Apache
 ```
 sudo systemctl restart apache2.service
 ```
