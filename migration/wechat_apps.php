<?php

  migration::table('wechat_apps', function ($table) {
      $table->text('openid');
      $table->text('service_id');
      $table->int('step');
      return $table;
  });
