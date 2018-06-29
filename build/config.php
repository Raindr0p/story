<?php

   header("Content-type: text/html; charset=utf-8"); //recommend to use UTF-8

   date_default_timezone_set('PRC'); //recommend to use UTC time format

   sql::config([

     'address' => 'localhost',

     'username' => 'username',

     'password' => 'password',

     'database' => 'your_db'

   ]); //sql config


   $GLOBALS['admin'] = [
     'admin_openid'
   ]; //管理人员


   $GLOBALS['wechat_config'] = [
     'appid'  => 'appid',
     'secret' => 'secret',
     'token'  => 'token'
   ];
