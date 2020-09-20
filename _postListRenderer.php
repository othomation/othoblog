<?php
require_once './_postRenderer.php';
$path = './posts';
$files = array_slice(scandir($path), 2);

foreach ($files as $file) {
    $md = file_get_contents($path . '/' . $file);
    // Get only summary (first lines of post)
    $md = getFirstLines($md, 4);
    $md = addTitleHref($md, $file);
    ?>
    <div class="blog-post">
        <?php echo renderMarkdown($md); ?>
        <a class="blog-post-read-link" href="<?php echo explode('.', $file)[0] ?>">Lire l'article</a>
    </div>
<?php } ?>