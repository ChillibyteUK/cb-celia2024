<section class="hs_form">
    <div class="container-xl">
<?php
if (get_field('region') ?? null) {
    ?>
    <!--[if lte IE 8]>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->
    <script>
    function loadHubSpotForm() {
        hbspt.forms.create({
            region: "<?=get_field('region')?>",
            portalId: "<?=get_field('portal_id')?>",
            formId: "<?=get_field('form_id')?>"
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
</section>