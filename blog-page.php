<?php
/**
 * Loads the markdown file given in the ?page query param into $markdown.
 */
require_once './_postRenderer.php';
$postSlug = $_GET['page'];
$page = 'posts/' . $postSlug;
if (file_exists($page)) {
    $markdown = file_get_contents($page);
    $pageTitle = getPostTitle($markdown);
} else {
    $markdown = "# 404 <br/> Post '$postSlug' n'a pas été trouvé ☢☢ ";
    $pageTitle = 'Otho - Article introuvable !';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './partials/_head.php'; ?>
    <link rel="stylesheet" href="./assets/styles/blog.min.css">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
    <?php include './partials/_links-bar.php' ; ?>
    <div class="blog">
        <div class='markdown'>
                <?php echo renderMarkdown($markdown); ?>
        </div>
    </div>
</body>
</html>
