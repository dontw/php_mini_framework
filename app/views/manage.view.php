<?php require('partials/head.php') ?>
    <div class="ui container">
        <h2 class="ui header">
            <i class="setting icon"></i>
            <div class="content">
                文章管理
                <div class="sub header">管管專用</div>
            </div>
        </h2>
        <div class="ui hidden divider"></div>
         <a href="/article_create" class="ui green button">
            <i class="add circle icon"></i>
            新增文章
        </a>
        <table class="ui celled striped table">
            <thead>
                <tr>
                    <th class="center aligned">ID</th>
                    <th>文章標題</th>
                    <th>時間</th>
                    <th>作者</th>
                    <th>動作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                    <td>
                        <div class="ui ribbon label"><?= $article->id ?></div>
                    </td>

                    <td class="left aligned">
                        <a href="article_content?id=<?= $article->id ?>" class="table_link"><?= $article->title ?></a>
                    </td>
                    <td>
                        <?= $article->time ?>
                    </td>
                    <td>
                        doge
                    </td>
                    <td class="center aligned">
                        <a href="/article_change?id=<?= $article->id ?>" class="ui yellow button">
                            <i class="setting icon"></i>
                            修改
                        </a>
                        <a href="/article_delete?id=<?= $article->id ?>" class="ui red button">
                            <i class="setting icon"></i>
                            刪除
                        </a>
                    </td>

                    </tr>
                <?php endforeach; ?> 
            </tbody>

            </table>
    </div>
<?php require('partials/footer.php') ?>