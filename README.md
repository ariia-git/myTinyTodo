# myTinyTodo
__myTinyTodo__ is a simple, self-hosted way to manage to your lists.

### About this Fork
[myTinyTodo](http://www.mytinytodo.net/) is a web application developed by Max Pozdeev. Since development was abandoned in 2014, this fork (based on v1.4.3) aims at updating and enhancing the application. Currently, this includes the following:

- Support for _php7_
- Added a German translation
- When accessing the app with a mobile device, one is automatically redirected to the optimized mobile version

### Requirements
A web server, which supports php, such as Apache or NGINX. Make sure the web server supports the following:

- PHP >= 5.2.0
- php_pdo, php_mysql, and php_pdo_sqlite

### Installation
Execute the following steps to install myTinyTodo on your server (taken from http://www.mytinytodo.net/faq.php#install as of 2017-12-04):

1. Download, unpack and upload to your site.
2. Run _setup.php_, select and specify settings of database you prefer. For sqlite usage make sure that database file _db/todolist.db_ is writable for _webserver/php_. Then click _Install_ to create tables in database. It's recommended to delete this file after installation.
3. To protect your tasks from modification by the others you may specify password in settings. By default session files are stored in _tmp/sessions_ directory. Make sure it's writable for _webserver/php_.
4. Open _index.php_ in your browser to run the application. Then go to _Settings_ and specify your time zone.
