<?php

Config::set('site_name', 'Zavireno');

Config::set('languages', array('en', 'fr'));

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
    'user'    => 'user_',
    'notary'        => 'notary_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'main'); //main
Config::set('default_action', 'index');

Config::set('db.host', '127.0.0.1');
Config::set('db.user', 'root');
Config::set('db.password', 'root');
Config::set('db.db_name', 'notary');

Config::set('salt', 'jd7sj3sdkd964he7e');