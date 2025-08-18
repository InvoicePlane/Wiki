<div class="article-pagination clearfix">
    <?php
    if (isset($article_pagination['previous'])) {
        $btn_class = ($article_pagination['previous']['type'] == 'section' ? 'btn-primary' : 'btn-secondary');
        echo '
        <a href="' . url($article_pagination['previous']['url']) . '" class="btn ' . $btn_class . ' pull-left">
            <i class="fa fa-angle-left fa-margin-right"></i>
            ' . $article_pagination['previous']['title'] . '
        </a>';
    }

    if (isset($article_pagination['next'])) {
        $btn_class = ($article_pagination['next']['type'] == 'section' ? 'btn-primary' : 'btn-secondary');
        echo '
        <a href="' . url($article_pagination['next']['url']) . '" class="btn ' . $btn_class . ' pull-right">
            ' . $article_pagination['next']['title'] . '
            <i class="fa fa-angle-right fa-margin-left"></i>
        </a>';
    } ?>
</div>