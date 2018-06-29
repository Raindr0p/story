<?php

  migration::table('tegs', function ($table) {
      $table->text('openid');
      $table->text('tag');
      $table->int('weight');
      return $table;
  });
