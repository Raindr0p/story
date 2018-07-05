<?php
/*
|--------------------------------------------------------------------------
| 公众号底部菜单栏
|--------------------------------------------------------------------------
|
|一周一故事下三个按钮
|最新：从数据库中选择4个最新的可用故事
|合作&bug反馈：url跳转
|
|
|
|
*/
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
  $wx->listen('event','CLICK',function($input,$wx){
      switch($input->EventKey){
        case 'story_more':
          $stories = sql::select('story')->where('activate=1')->order('id')->by('desc')->limit(4)->fetch();
          $out = [];
          foreach($stories as $story){
            $out[] = [
              'title' => $story['title'],
              'description' => str::utf8($story['description']),
              'picurl' => user::url().'/file/img/'.$story['headimg'],
              'url' => user::url().'/tran/wechat/'.$input->FromUserName.'/story+'.$story['id']//看一下这行是否有问题
            ];
          }
          $wx->return('news',[
            'to' => $input->FromUserName,
            'articles' => $out
          ]); //返回主题
        break;
      }
    }); //监听点击
