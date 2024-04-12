<?php
$class = $block['className'] ?? null;
$img = wp_get_attachment_image_url(get_field('image'), 'full');
?>
<section class="member_panel py-5 <?=$class?>"
    style="background-image:url(<?=$img?>)">
    <div class="container-xl py-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h1 text-white">Become a Member</h2>
            </div>
            <div class="col-md-6 fs-500 fw-600">
                If you would like to become a member and benefit from being part of a worldwide network of law firms
                providing the best integrated, multi-disciplinary legal and tax services to their clients, then click
                the button below.
            </div>
        </div>
        <a href="/become-a-member/" class="btn btn-cta">
            <span class="title">Become a Member</span>
            <span class="arrow"></span>
        </a>
    </div>
</section>