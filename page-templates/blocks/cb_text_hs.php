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
            <?php
            $colour = get_field('form_bg') ?: 'white';
            $padding = $colour != 'white' ? 'p-4' : '';
            ?>
            <div class="col-md-6 bg-<?=$colour?> <?=$padding?>">
                <?php
                if (get_field('form_title') ?? null) {
                    ?>
                <h2><?=get_field('form_title')?></h2>
                    <?php
                }
                if ($e['region'] ?? null) {
                    ?>
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script>
                    function loadHubSpotForm() {
                        hbspt.forms.create({
                            region: "<?=$e['region']?>",
                            portalId: "<?=$e['portal_id']?>",
                            formId: "<?=$e['form_id']?>"
                        });
                    }

                    // Check if the script is already loaded
                    if (typeof hbspt !== 'undefined') {
                        loadHubSpotForm();
                    } else {
                        if (!document.querySelector('script[src="//js-eu1.hsforms.net/forms/embed/v2.js"]')) {
                            var script = document.createElement('script');
                            script.src = '//js-eu1.hsforms.net/forms/embed/v2.js';
                            script.onload = loadHubSpotForm;
                            document.head.appendChild(script);
                        } else {
                            document.querySelector('script[src="//js-eu1.hsforms.net/forms/embed/v2.js"]').onload = loadHubSpotForm;
                        }
                    }
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