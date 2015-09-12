# SaeDemo

A Laravel 5 demo project for teaching purposes. 


## Local setup

### Homestead

Laravel Homestead is an official, pre-packaged Vagrant "box" that provides you a wonderful development environment without requiring you to install PHP, HHVM, a web server, and any other server software on your local machine.

Follow the step by step guide at [http://laravel.com/docs/5.1/homestead](http://laravel.com/docs/5.1/homestead) or

### TL;DR

Install __composer__:
[https://getcomposer.org/doc/00-intro.md#globally](https://getcomposer.org/doc/00-intro.md#globally)

Install __VirtualBox__:
[https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)

Install __Vagrant__:
[http://www.vagrantup.com/downloads.html](http://www.vagrantup.com/downloads.html)

In your __Terminal__:
	
	git clone git@github.com:passioncoder/saedemo.git saedemo
	cd saedemo
	composer install
    php vendor/bin/homestead make
    vagrant box add laravel/homestead
	vagrant up

Visit [http://192.168.10.10](http://192.168.10.10) in your browser.

### Other recommended stuff:

- git client: [https://www.sourcetreeapp.com](https://www.sourcetreeapp.com) (free)
- MySQL Admin: [http://www.sequelpro.com/download](http://www.sequelpro.com/download) (free)
- PHP IDE: [https://www.jetbrains.com/phpstorm](https://www.jetbrains.com/phpstorm/) (30 day trial)


## Further learning:

- __RTFM__:
[http://laravel.com/docs](http://laravel.com/docs)

- Read the __code__:
[https://github.com/laravel/framework](https://github.com/laravel/framework)

- Watch __Laracasts__:
[https://laracasts.com](https://laracasts.com)

- Find 3rd-party __packages__:
[https://packagist.org](https://packagist.org)

- Ask your questions on __stackoverflow__:
[http://stackoverflow.com/questions/tagged/laravel](http://stackoverflow.com/questions/tagged/laravel)

- Code tutorials from __tutsplus__:
[http://tutsplus.com/tutorials/search?search[terms]=Laravel](http://tutsplus.com/tutorials/search?search[terms]=Laravel)
