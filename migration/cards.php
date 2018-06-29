<?php

  migration::table('cards', function ($table) {
      $table->int('id');
      $table->int('weight');
      $table->int('story_id');
      $table->text('openid');
      $table->longtext('content');
      $table->text('img');
      $table->int('activate');
      return $table;
  });
