<?php
$class = $block['className'] ?? null;
$img = wp_get_attachment_image_url(get_field('image'), 'full');
?>
<section class="member_panel py-5 <?= $class ?>"
    style="background-image:url(<?= $img ?>)">
    <div class="container-xl py-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h1 text-white">Subscribe to our newsletter</h2>

            </div>
            <div class="col-md-6 fs-500 fw-600">
                If you would like to subscribe to our Enews service, please click
                the button below.
            </div>
        </div>
        <a href="/subscribe-to-our-newsletter/" class="btn btn-cta">
            <span class="title">Sign Up</span>
            <span class="arrow"></span>
        </a>
    </div>
</section>