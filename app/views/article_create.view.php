<?php require('partials/head.php') ?>
    <div class="ui container">
        <h2 class="ui header">
            <div class="content">
                新增文章
            </div>
        </h2>
        <form method="POST" action="/article_send">
            <div class="ui form">
                <div class="three fields">
                    <div class="field">
                        <label>文章標題</label>
                        <input type="text" placeholder="文章標題" name="title">
                    </div>
                    <div class="field">
                        <label>作者</label>
                        <input type="text" placeholder="作者" name="author">
                    </div>
                    <div class="field">
                        <label>圖片網址</label>
                        <input type="text" placeholder="圖片網址" name="image">
                    </div>
                </div>
                <div class="field">
                    <label>文章內容</label>
                    <textarea placeholder="請輸入文章內容" name="content"></textarea>
                </div>
            </div>
            <div class="ui center aligned basic segment">
                <button class="ui yellow button" type="reset">重新填寫</button>
                <button class="ui primary button" type="submit">送出文章</button>
            </div>
        </form>
    </div>
<?php require('partials/footer.php') ?>