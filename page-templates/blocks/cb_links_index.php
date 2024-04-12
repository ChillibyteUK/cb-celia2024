<?php
// <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
?>
<section class="links_index pt-4 pb-5">
    <div class="container-xl">
        <div class="row g-2">
            <?php
        #links
        global $post;
$post_content = $post->post_content;
$blocks = parse_blocks($post_content);
foreach ($blocks as $block) {
    if ($block['blockName'] == 'acf/cb-useful-links') {
        $t = $block['attrs']['data']['title'];
        $c = $block['attrs']['data']['country_code'] ?? null;
        if ($c == 'xx') {
            $c = '<span class="fa-solid fa-globe"></span> ';
        } elseif ($c) {
            $c = '<span class="fi fi-' . $c . '"></span> ';
        }
        $id = acf_slugify($t);
        echo '<div class="col-sm-6 col-md-4 col-lg-3"><a class="links_index__link" href="#' . $id . '">' . $c . $t . '</a></div>';
    }
}
?>
        </div>
    </div>
</section>