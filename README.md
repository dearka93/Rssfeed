Protein/Rssfeed
=========
[![Build Status](https://travis-ci.org/dearka93/Rssfeed.svg?branch=master)](https://travis-ci.org/dearka93/Rssfeed)

PHP class to load and display Rss feeds. This php class also contains SimplePie. http://simplepie.org/

By Guanglei Huang, guanglei.huang@gmail.com

This PHP class has three main functions: to show a latest feed by singleRss(), display a list of recent rss feeds by nopicRss(), and a list of recent rss feeds together with a thumbnail picture by picRss().

Setup
------------------
* Clone a version of Anax-MVC from https://github.com/mosbth/Anax-MVC.git

* Modify composer.json by adding the required files:
    "require": {
	"protein/rssfeed": "dev-master"
    }
}

* Install Rssfeed with composer by using the update commands:
    composer update --no-dev

* Create the metod "picRss", it returns a string containing the rss feed with picutres.
    $feed = new Protein\Rssfeed\Rssfeed([
    'http://www.aftonbladet.se/rss.xml'
    ]);
    echo $feed->picRss();
 
License
------------------

This software is free software and carries a MIT license.



History
-----------------------------------


v1.0 (latest)


```
 .  
..:  Copyright (c) Guanglei Huang, 2014
guanglei.huang@gmail.com
```
