## 安装 🔩

先git clone本项目到指定文件夹，然后用composer运行以下代码

    composer install

然后配置本地MySQL数据库为

      用户：root
      密码：Zuggrcampus

最后cd到项目文件夹下，然后运行下行代码写入表单

     php migration/update.php

## 结构 💥

-   build: 路由
-   migration: 数据库定义
-   service: 主逻辑
-   view: 前端
-   ui: 纯HTML前端模板

## 代码规范 💥

1、service代码文件头部请加上注释

          /*
          |--------------------------------------------------------------------------
          | 本段代码的主要功能
          |--------------------------------------------------------------------------
          |
          | 代码的input/output注释
          |
          |
          */

例如

          /*
          |--------------------------------------------------------------------------
          | 储存openID到session，并跳转至相关链接
          |--------------------------------------------------------------------------
          |
          | 输入
          | - $openid：用户openID
          | - $url：特殊格式化的跳转网址（a+b+c!d=1 => https://xy.zuggr.com/a/b/c?d=1）
          |
          |
          */

2、请使用[PSR-2](https://www.php-fig.org/psr/psr-2/)代码规范

3、请统一使用UTF-8编码

## 文案 ✍️

-   新建故事
    -   投稿成功，等待审核
    -   投稿既没有图片，也没有文字
    -   用户想修改文章但一字没改的时候
    -   给内部人员的收到故事请批准文案
-   ~~点赞文案~~
-   ~~删除投稿文案~~
-   删除评论
-   评论成功
-   回复评论成功
-   订阅微信号时
-   微信公众号简介

## Road Map 🔭

-   Plug插件
    -   ~~add_tag_weight~~
    -   wechat/click.php
    -   wechat/empty.php
    -   wechat/qr.php
    -   ~~wechat/qr.php~~
-   Wechat模组
    -   index
    -   menu
-   UI模组
    -   story@index.php
    -   story@all.php
    -   story@new_story.php
    -   admin@invite.php
    -   admin@unactivated_story.php
    -   admin@unactivated_card.php
    -   admin@unactivated_comment.php
-   Auto模组
    -   ~~delete~~
    -   ~~user~~
-   Tran模组
    -   ~~fetch_openid~~
    -   ~~delete_card~~
    -   delete_comment
    -   ~~upload_card~~
    -   comment
    -   reply
    -   ~~like~~
-   ~~添加数据库/路由结构~~
