<?php
$class = $block['className'] ?? null;
?>
<section class="buttons">
    <div class="container-xl d-flex g-2 flex-wrap justify-content-center">
        <?php
        while (have_rows('links')) {
            the_row();
            $l = get_sub_field('link');
            ?>
            <a href="<?=$l['url']?>" class="btn btn-blue" target="<?=$l['target']?>"><?=$l['title']?></a>
            <?php
        }
        ?>
    </div>
</section>