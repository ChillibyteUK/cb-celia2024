<?php

$link = get_field('cta') ?? null;

$img = wp_get_attachment_image(get_field('background'),'full',false, array('class' => 'hero_full__bg','loading' => 'lazy')) ?? null;

?>
<!-- <link rel="preload" href="<?=$img?>" as="image"> -->
<section class="hero_full">
    <?=$img?>
    <div class="hero_full__content container-xl text-center">
        <h1 class="text-white"><?=get_field('title')?></h1>
        <?php
        if (get_field('subtitle') ?? null) {    
            ?>
        <div class="hero_full__subtitle">
            <?=get_field('subtitle')?>
        </div>
        <?php
        }
        ?>
    </div>
</section>