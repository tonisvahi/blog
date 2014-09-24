<div class="span8">
    <h1><?= $post['post_subject'] ?></h1>

    <p><?= $post['post_text'] ?></p>

    <div>
        <? foreach ($tags as $tag): ?>
            <a href="tags/view/<?= $tag['tag_name'] ?>">
                <span class="label label-info"><?= $tag['tag_name'] ?></span>
            </a>
        <? endforeach ?>
        <p><span class="badge"><?= $post['post_created'] ?></span>
        </p></div>
</div>