<?php
$class = $block['className'] ?? 'pb-5';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
<section class="locations <?=$class?>">
    <div class="container-xl locations__grid">
        <?php
$categories = get_categories(array('taxonomy' => 'location'));
foreach ($categories as $category) {
    $cc = get_field('country_code',$category);
    ?>
    <a href="<?=get_category_link($category->term_id)?>"><span class="fi fi-<?=$cc?>"></span> <?=$category->name?></a>
    <?php
}
        ?>
    </div>
</section>