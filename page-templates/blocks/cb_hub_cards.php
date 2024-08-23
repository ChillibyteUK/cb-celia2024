<?php
//<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
?>
<div class="hub_cards pt-4 pb-5">
    <div class="container-xl">
        <div class="hub_cards__grid">
            <?php
        while (have_rows('cards')) {
            the_row();

            $width = get_sub_field('width') == '100%' ? 'span-2' : null;
            $bg = get_sub_field('background');
            $l = get_sub_field('url');
            $anchor_id = get_sub_field('id') ?? null;
            ?> 
            <div class="hub_cards__card bg-<?=$bg?> <?=$width?>" id="<?=$id?>">
                <div class="hub_cards__image_container">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'large')?>"
                        alt="">
                    <?php
                    if (get_sub_field('image_title') ?? null) {
                        ?>
                    <div class="image_caption"><?=get_sub_field('image_title')?></div>
                        <?php
                    }
                    ?>
                </div>
                <div class="hub_cards__inner">
                    <div>
                        <h2 class="text-grey-900">
                            <?=get_sub_field('title')?>
                        </h2>
                        <?php
        if (get_sub_field('flags') ?? null) {
            echo '<div class="pb-2">';
            foreach (get_sub_field('flags') as $f) {
                $cc = get_field('country_code', $f);
                echo '<span class="fi fi-' . $cc . ' me-1"></span>';
            }
            echo '</div>';
        }
            ?>
                        <?=get_sub_field('content')?>
                    </div>
                    <a href="<?=$l['url']?>"
                        class="btn btn-black"
                        target="<?=$l['target']?>"><?=$l['title']?></a>
                </div>
            </div>
            <?php
        }
?>
        </div>
    </div>
</div>