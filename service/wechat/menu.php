<?php
  // 这个只是样例哦，还要改
  $appid = 'wx5ac7dbb5d6163772';
  $secret = '6092e58e0eed5abeae329596b6b866f9';
  $token = 'zuggrcampus';
  $menu = [[
    'type' => 'click',
    'name' => '雪奈的信箱✉️',
    'key' => 'xn_start'
  ],[
    'name' => '一周一故事',
    'sub_button' => [
      [
        'type' => 'click',
        'name' => '最新',
        'key' => 'story_more'
      ],[
        'type' => 'view',
        'name' => '合作',
        'url' => 'http://zuggrcampus.mikecrm.com/dOEmXVd'
      ],[
        'type' => 'view',
        'name' => 'bug反馈',
        'url' => 'http://zuggrcampus.mikecrm.com/5xMF9ac'
      ]
    ]
  ]];
  $wx = new angel\wechat($GLOBALS['wechat_config']['appid'], $GLOBALS['wechat_config']['secret'], $GLOBALS['wechat_config']['token']);
  echo $wx->menu($wx->access_token(), $menu);
