<?php

  migration::table('likes', function ($table) {
      $table->text('ip');
      $table->text('agent');
      $table->int('card_id');
      return $table;
  });
