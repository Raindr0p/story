<?php

  migration::table('mails', function ($table) {
      $table->int('stroy_id');
      $table->text('openid');
      return $table;
  });
