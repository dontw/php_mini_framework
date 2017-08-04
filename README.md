# PHP Mini Framework
為了學習PHP框架所製作的手刻小框架，使用PHP 7.1.5 及 Composer 1.4.2，功能包含：
* 可由config.php設定資料庫相關參數
* 資料庫的新增、修改、刪除
* Router
* MVC 架構中的 view 及 controller

## 架構
* __app/__: controller, view 及 routes設定

* __core/database__: 連線資料庫(Connection.php)及使用資料庫(QueryBuilder.php)

* __core/app.php__: 將設定檔(/config.php)的陣列綁定至App物件，後續可幫變叫出使用

* __core/bootstrap.php__: 跟CSS那個BS無關，用來收那一些一開啟需要啟用的功能(綁定設定檔至App，建立PDO物件)，要在index.php require

* __core/helper.php__: 共用函式放置處，要在index.php require

* __core/Request.php__: 用來取得瀏覽器uri及method的Request物件

* __core/Router.php__: Router功能物件

* __partial/__: view 的一些可共用部分

* __vendor/__: Composer 所創的資料夾，記得在index.php require autoload.php，並執行`composer dumpautoload`把新增的class加進去