<?php require('partials/head.php') ?>
    <div class="ui container">
            <!-- <div class="ui input">
                <input type="text" placeholder="標題" name="title" value="">
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

            <button type="submit">送出</button> -->
        <h2 class="ui header">
            <div class="content">
                修改文章
            </div>
        </h2>
        <form method="POST" action="/article_update">
            <div class="ui form">
                <div class="three fields">
                    <div class="field">
                        <label>文章標題</label>
                        <input type="text" placeholder="文章標題" name="title" value="<?= $articleItems['title'] ?>">
                    </div>
                    <div class="field">
                        <label>作者</label>
                        <input type="text" placeholder="作者" name="author" value="<?= $articleItems['author'] ?>">
                    </div>
                    <div class="field">
                        <label>圖片網址</label>
                        <input type="text" placeholder="圖片網址" name="image" value="<?= $articleItems['image'] ?>">
                    </div>
                </div>
                <div class="field">
                    <label>文章內容</label>
                    <textarea placeholder="請輸入文章內容" name="content"><?= $articleItems['content']?></textarea>
                </div>
            </div>
            <div class="ui center aligned basic segment">
                <button class="ui yellow button" type="reset">重新填寫</button>
                <button class="ui primary button" type="submit">確認修改</button>
            </div>
            <input type="hidden" name="id" value="<?= $articleItems['id']?>">
        </form>
    </div>
<?php require('partials/footer.php') ?>