<?php require('partials/head.php') ?>
    <div class="ui container">
        <form method="POST" action="/article_update">
            <div class="ui input">
                <input type="text" placeholder="標題" name="title" value="<?= $articleItems['title'] ?>">
            </div>
            <div class="ui input">
                <input type="text" placeholder="作者" name="author" value="<?= $articleItems['author'] ?>">
            </div>
            <div class="ui input">
                <input type="text" placeholder="圖片" name="image" value="<?= $articleItems['image'] ?>">
            </div>
            <div class="ui input">
                <input type="text" placeholder="內容" name="content" value="<?= $articleItems['content'] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $articleItems['id']?>">

            <button type="submit">送出</button>
        </form>
    </div>
<?php require('partials/footer.php') ?>