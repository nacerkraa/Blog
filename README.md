# Blog
The idea of ​​the site is a blog for psychological counseling, where people can ask questions and psychological counselors can answer.

# Dependencies
Below is the list of dependencies for developers.
* [Node JS](https://nodejs.org/en/download/) (only for npm)
* LAMP or [XAMP](https://www.apachefriends.org/es/download.html) or [WAMP](https://www.wampserver.com/en/) stack.
* [Composer](https://getcomposer.org/download/)

# Installation Process
first you need to clone the repository with the following command.
```
git clone https://github.com/nacerkraa/Blog.git
```
now create a copy of the file called *.env.example*, edit the database name and username and password, rename the file to *.env*

then open a PowerShell or Command Prompt and execute the following command
```
cd PATH_TO_DIRECTORY
composer install
npm install
npm run dev
```

finally generate the application encryption key with the following command:
```
php artisan key:generate
```