<?php require('partials/head.php') ?>
<div class="ui container">
  <h2 class="ui header">
    <i class="newspaper icon"></i>
    <div class="content">
      文章管理系統
      <div class="sub header">專收廢文</div>
    </div>
  </h2>
  <div class="ui hidden divider"></div>

  <div class="ui three column doubling stackable grid container">

    <?php foreach ($articles as $article) : ?>
      <div class="column">
        <div class="ui card">
          <div class="card_image"
               style="background-image: url('<?= $article->image ?>');"
          ></div>
          <div class="content">
            <div class="header"><?= $article->title ?></div>
              <div class="meta">
                <span><?= $article->time ?></span>
                <span>By</span><span><?= $article->author ?></span>
              </div>
              <a href="/article_content?id=<?= $article->id ?>">閱讀全文</a>
            </div>
        </div>
      </div>
    <?php endforeach; ?> 

  </div>

</div>

  

<?php require('partials/footer.php') ?>