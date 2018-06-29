<?php

  migration::table('comments', function ($table) {
      $table->int('id');
      $table->int('card_id');
      $table->int('comment_id');
      $table->text('openid');
      $table->int('activate');
      $table->int('reply');
      return $table;
  });
