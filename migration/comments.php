<?php

  migration::table('comments', function ($table) {
      $table->int('id');
      $table->int('card_id');
      $table->int('comment_id');//回复、评论
      $table->text('openid');
      $table->int('activate');
      $table->int('reply');
      return $table;
  });
