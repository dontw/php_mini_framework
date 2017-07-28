<?php require('partials/head.php') ?>
    <div class="ui container">
        <!-- <div class="ui breadcrumb">
            <a class="section" href="/">瀏覽文章</a>
            <i class="right angle icon divider"></i>
            <div class="active section"><?= $articleItems['title'] ?></div>
        </div> -->
        <div class="ui hidden divider"></div>
        <h1><?= $articleItems['title'] ?></h1>
        <span class="subtitle">時間：<?= $articleItems['time'] ?>　</span>
        <span class="subtitle">作者：<?= $articleItems['author'] ?>　</span>
        <div class="ui divider"></div>
        <div class="img_wrap">
            <img class="article_img" src="<?= $articleItems['image'] ?>" alt="article's picture">
        </div>
        <p class="article_content"><?= $articleItems['content'] ?></p>
        <button  onclick="goBack()"  href="/" class="ui labeled icon button">
            <i class="left arrow icon"></i>
            返回前頁
        </button> 
        <div class="ui hidden divider"></div>
    </div>
<?php require('partials/footer.php') ?>