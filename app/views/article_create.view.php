<?php require('partials/head.php') ?>
    <div class="ui container">
        <form method="POST" action="/article_send">
            <div class="ui input">
                <input type="text" placeholder="標題" name="title">
            </div>
            <div class="ui input">
                <input type="text" placeholder="作者" name="author">
            </div>
            <div class="ui input">
                <input type="text" placeholder="圖片" name="image">
            </div>
            <div class="ui input">
                <input type="text" placeholder="內容" name="content">
            </div>

            <button type="submit">送出</button>
        </form>
    </div>
<?php require('partials/footer.php') ?>