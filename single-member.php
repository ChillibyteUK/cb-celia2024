<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

$countries = get_the_terms(get_the_ID(), 'location');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
<main id="main" class="member">
    <section class="hero">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-green-400 fw-600">Global reach</div>
                    <h1 class="text-white"><?= get_the_title() ?></h1>
                    <div class="fs-500 fw-600">Meet the CELIA Alliance member in <?= $countries[0]->name ?></div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xl pt-5 pb-4">
        <section class="breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </section>
    </div>
    <article>
        <div class="container-xl mb-5">
            <div class="row g-4">
                <div class="col-lg-8 order-2 order-lg-1">
                    <?= get_the_content() ?>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 left-line">
                    <img class="mb-4 d-block mx-auto mx-lg-0" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?= get_the_title() ?>">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12 mb-3">
                            <h3 class="fs-400 mb-0"><?= get_the_title() ?></h3>
                            <div><?= get_field('address') ?></div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <ul class="fa-ul ms-4">
                                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-paper-plane text-green-400"></i></span> <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a></li>
                                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-phone text-green-400"></i></span> <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a></li>
                                <?php
                                if (get_field('fax') ?? null) {
                                ?>
                                    <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-fax text-green-400"></i></span> <?= get_field('fax') ?></li>
                                <?php
                                }
                                ?>
                                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-laptop text-green-400"></i></span> <a href="<?= get_field('website') ?>" target="_blank"><?= get_field('website') ?></a></li>
                                <?php
                                if (get_field('linkedin') ?? null) {
                                ?>
                                    <li class="mb-2"><span class="fa-li"><i class="fa-brands fa-linkedin-in text-green-400"></i></span> <a href="<?= get_field('linkedin') ?>"><?= get_field('linkedin') ?></a></li>
                                <?php
                                }
                                if (get_field('twitter') ?? null) {
                                ?>
                                    <li class="mb-2"><span class="fa-li"><i class="fa-brands fa-x-twitter text-green-400"></i></span> <a href="<?= get_field('twitter') ?>"><?= get_field('twitter') ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $blocks = parse_blocks(get_the_content());
        foreach ($blocks as $block) {
            if ($block['blockName'] == 'acf/cb-member-people') {
                echo render_block($block);
            }
        }
        ?>
    </article>
    </div>
    <section class="text_image bg-white py-5">
        <div class="container-xl">
            <div class="row g-2">
                <div class="col-md-4 order-2 order-md-1">
                    <h2 class="text-blue-900">Global reach</h2>
                    <div class="fs-600">
                        <p><strong class="fs-500">Celia members have managed recent projects in over 70 countries around the world.</strong></p>
                    </div>
                </div>
                <div class="col-md-8 order-1 order-md-2 d-flex justify-content-center align-items-center">
                    <img decoding="async" src="/wp-content/uploads/2024/03/CELIA-Global-Reach-Map.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
    get_template_part('page-templates/blocks/cb_locations');
    get_template_part('page-templates/blocks/cb_latest_news');
    ?>
</main>
<?php
get_footer();
