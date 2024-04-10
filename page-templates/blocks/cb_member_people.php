<section class="people bg-grey-200 py-4">
    <div class="container-xl">
<?php
while(have_rows('people')) {
    the_row();
    ?>
    <div class="row my-4">
        <div class="col-md-2">
            <?php
            $img = wp_get_attachment_image_url(get_sub_field('image'),'large') ?: get_stylesheet_directory_uri() . '/img/missing-person.jpg';
            ?>
            <img src="<?=$img?>" alt="<?=get_sub_field('name')?>">
        </div>
        <div class="col-md-4">
            <div class="fw-bold mb-2"><?=get_sub_field('name')?></div>
            <ul class="fa-ul ms-4">
            <?php
            if (get_sub_field('phone') ?? null) {
                ?>
                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-phone text-green-400"></i></span> <a href="tel:<?=get_sub_field('phone')?>"><?=get_sub_field('phone')?></a></li>
                <?php
            }
            if (get_sub_field('fax') ?? null) {
                ?>
                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-fax text-green-400"></i></span> <?=get_sub_field('fax')?></li>
                <?php
            }
            if (get_sub_field('email') ?? null) {
                ?>
                <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-paper-plane text-green-400"></i></span> <a href="mailto:<?=get_sub_field('email')?>"><?=get_sub_field('email')?></a></li>
                <?php
            }
            ?>
        </div>
        <div class="col-md-3">
            <div class="fw-bold mb-2">Location</div>
            <?php
            if (get_sub_field('principal_address') ?? null) {
                echo get_sub_field('principal_address');
            }
            else {
                echo get_field('address',get_the_ID());
            }
            ?>
        </div>
        <div class="col-md-3">
            <div class="fw-bold mb-2">Disciplines</div>
            <?=get_sub_field('disciplines')?>
        </div>
    </div>
    <hr>
    <?php
}
?>
</section>
