<?php
$id = acf_slugify(get_field('title'));
$bg = get_field('background') == 'Dark' ? 'bg-grey-200' : '';
?>
<a id="<?=$id?>" class="anchor"></a>
<section class="useful_links py-5 <?=$bg?>">
    <div class="container-xl">
        <h2 class="mb-4"><?=get_field('title')?></h2>
        <?php
        while (have_rows('links')) {
            the_row();
            $l = get_sub_field('link');
            ?>
            <div class="useful_links__row mb-4">
                <div class="fw-bold text-blue-400 mb-2"><a href="<?=$l?>" target="_blank"><?=get_sub_field('title')?></a></div>
                <div><?=get_sub_field('description')?></div>
                <div class="text-end"><a href="<?=$l?>" target="_blank"><?=$l?></a></div>
            </div>
            <?php
        }
        ?>
    </div>
</section>