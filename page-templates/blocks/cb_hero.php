<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full') ?? null;
?>
<link rel="preload" href="<?=$img?>" as="image">
<section class="hero" style="background-image:url(<?=$img?>)">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-white">
                    <?=get_field('title')?>
                </h1>
                <?php
                if (get_field('content') ?? null) {
                    ?>
                <div class="fs-500 fw-600">
                    <?=get_field('content')?>
                </div>
                <?php
                }
if (get_field('cta') ?? null) {
    $cta = get_field('cta');
    ?>
                <a class="btn btn-cta mt-4"
                    href="<?=$cta['url']?>"
                    target="<?=$cta['target']?>">
                    <span
                        class="title"><?=$cta['title']?></span>
                    <span class="arrow"></span></a>
                <?php
}
?>
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