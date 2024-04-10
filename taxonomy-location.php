<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$tax = get_queried_object();
global $wp_query;

$suffix = $wp_query->found_posts > 1 ? 's' : '';
?>
<main id="main">
    <section class="hero">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-green-400 fw-600">Global reach</div>
                    <h1 class="text-white"><?=$tax->name?></h1>
                    <div class="fs-500 fw-600">Meet the CELIA Alliance member<?=$suffix?> in <?=$tax->name?></div>
                </div>
            </div>
        </div>
    </section>
<section class="breadcrumbs pt-4 container-xl">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
</section>
<section class="members_list">
    <div class="members_list__grid container-xl">
    <?php
    while (have_posts()) {
        the_post();
        ?>
        <div class="members_list__card">
            <div class="members_list__card_grid">
                <img class="members_list__image" src="<?=get_the_post_thumbnail_url(get_the_ID(),'large')?>" alt="<?=get_the_title()?>">
                <div class="members_list__address">
                    <h3 class="fs-400"><?=get_the_title()?></h3>
                    <div><?=get_field('address')?></div>
                </div>
                <div class="members_list__contact">
                    <h3 class="fs-400">Contact</h3>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-paper-plane text-green-400"></i></span> <a href="mailto:<?=get_field('email')?>"><?=get_field('email')?></a></li>
                        <li><span class="fa-li"><i class="fa-solid fa-phone text-green-400"></i></span> <a href="tel:<?=get_field('phone')?>"><?=get_field('phone')?></a></li>
                        <li><span class="fa-li"><i class="fa-solid fa-laptop text-green-400"></i></span> <a href="<?=get_field('website')?>" target="_blank"><?=get_field('website')?></a></li>

                    </ul>
                </div>
                <div class="members_list__disciplines">
                    <h3 class="fs-400">Disciplines</h3>
                    <div><?=get_field('disciplines')?></div>
                </div>
            </div>
            <?php
            if (get_the_content() ?? null) {
                ?>
                <div class="text-center">
                    <a href="<?=get_the_permalink()?>" class="btn btn-green">View member profile</a>
                </div>
                <?php
            }
            ?>
        </div>

        <?php
    }
    ?>
    </div>
</section>
</main>
<?php
get_footer();