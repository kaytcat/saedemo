# SaeDemo

A Laravel 5 demo project for teaching purposes. 


## Setup

### Homestead

Laravel Homestead is an official, pre-packaged Vagrant "box" that provides you a wonderful development environment without requiring you to install PHP, HHVM, a web server, and any other server software on your local machine.

Follow the step by step guide at [http://laravel.com/docs/5.1/homestead](http://laravel.com/docs/5.1/homestead) or

### TL;DR

Download & Install __VirtualBox__:
[https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)

Download & Install __Vagrant__:
[http://www.vagrantup.com/downloads.html](http://www.vagrantup.com/downloads.html)

In your __Terminal__:
	
	git clone git@github.com:passioncoder/saedemo.git saedemo
	cd saedemo
	composer install
	php vendor/bin/homestead make
	vagrant box add laravel/homestead
	vagrant up

Open [http://192.168.10.10](http://192.168.10.10) in your browser.

### Other recommended stuff:

- git client: [https://www.sourcetreeapp.com](https://www.sourcetreeapp.com) (free)
- MySQL Admin: [http://www.sequelpro.com/download](http://www.sequelpro.com/download) (free)
- PHP IDE: [https://www.jetbrains.com/phpstorm](https://www.jetbrains.com/phpstorm/) (30 day trial)


