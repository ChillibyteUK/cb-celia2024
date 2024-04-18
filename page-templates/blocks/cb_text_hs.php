<?php
$e = get_field('hs_form');
$class = $block['className'] ?? 'py-5';
?>
<section class="text_hs <?=$class?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (get_field('image') ?? null) {
                    $img = wp_get_attachment_image_url(get_field('image'),'large');
                    ?>
                <img src="<?=$img?>" alt="" class="mb-4">
                    <?php
                }
                ?>
                <?=get_field('content')?>
            </div>
            <div class="col-md-6">
                <?php
                if ($e['region'] ?? null) {
                    ?>
                <!--[if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                hbspt.forms.create({
                    region: "<?=$e['region']?>",
                    portalId: "<?=$e['portal_id']?>",
                    formId: "<?=$e['form_id']?>"
                });
                </script>
                    <?php
                }
                else {
                    echo 'NO HUBSPOT FORM';
                }
                ?>
            </div>
        </div>
    </div>
</section>