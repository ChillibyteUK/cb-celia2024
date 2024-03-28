<?php
$class = $block['className'] ?? null;
?>
<div class="services_list py-5 <?=$class?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-3">
                <h2 class="h3">Our Services</h2>
            </div>
            <div class="col-md-9 cols-lg-2">
                <?php
                while (have_rows('services')) {
                    the_row();
                    ?>
                    <div class="services_list__item mb-3">
                        <div class="services_list__title fw-600 d-flex">
                            <i class="fa-solid fa-arrow-right text-green-400 pt-1 me-2"></i>
                            <p><?=get_sub_field('service_name')?></p>
                        </div>
                        <?php
                        if (get_sub_field('service_detail' ?? null)) {
                            ?>
                        <div class="services_list__detail"><?=get_sub_field('service_detail')?></div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>