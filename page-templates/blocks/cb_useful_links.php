<?php
$id = acf_slugify(get_field('title'));
$bg = get_field('background') == 'Dark' ? 'bg-grey-200' : '';
?>
<a id="<?=$id?>" class="anchor"></a>
<section class="useful_links py-5 <?=$bg?>">
    <div class="container-xl">
        <h2 class="mb-4 half-line">
            <?=get_field('title')?>
        </h2>
        <?php
        while (have_rows('links')) {
            the_row();
            $l = get_sub_field('link');
            $warn = $l == null ? 'bg-warning' : null;
            ?>
        <div class="useful_links__row pb-4 mb-4 <?=$warn?>">
            <div class="fw-bold text-blue-400 mb-2"><a href="<?=$l?>"
                    target="_blank"><?=get_sub_field('title')?></a>
            </div>
            <div class="mb-2">
                <?=get_sub_field('description')?>
            </div>
            <?php
            if ($l ?? null) {
                ?>
            <div class="text-end"><a href="<?=$l?>"
                    target="_blank"><?=$l?>
                    <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a></div>
            <?php
            }
            ?>
        </div>
        <?php
        }
?>
    </div>
</section>