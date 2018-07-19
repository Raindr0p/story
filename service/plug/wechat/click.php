<?php
/*
|--------------------------------------------------------------------------
| 处理菜单栏点击请求
|--------------------------------------------------------------------------
|
| 输入：
| - $input
| - $wx
|
|
|
*/

  switch ($input->EventKey) {
    case 'story_more':
    $stories = sql::select('story')->where('activate=1')->order('id')->by('desc')->limit(4)->fetch();
    $out = [];
    foreach($stories as $story){
      $out[] = [
        'title' => $story['title'],
        'description' => str::utf8($story['description']),
        'picurl' => user::url().'/file/img/'.$story['headimg'],
        'url' => user::url().'/tran/wechat/'.$input->FromUserName.'/story+'.$story['id']
          ];
              }
    $wx->return('news',[
                'to' => $input->FromUserName,
                'articles' => $out
              ]); //返回主题
    break;

    break;
    case 'event_b':
      // 样板2
    break;
  }
