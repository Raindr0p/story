<?php

  migration::table('stories', function ($table) {
      $table->int('id');
      $table->text('title');
      $table->text('prefix');
      $table->longtext('description');
      $table->text('tags');
      $table->int('activate');
      $table->text('phrase');
      $table->int('count_visits');
      $table->int('count_likes');
      $table->int('count_cards');
      return $table;
  });
