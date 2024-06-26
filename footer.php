<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
</div> <!-- end page -->
<div id="footer-top"></div>
<footer>
    <div class="footer container-xl pt-5 pb-4">
        <div class="footer-links d-flex justify-content-around flex-wrap">
            <a href="/privacy-policy/">Privacy &amp; Cookies Policy</a>
            <a href="/legal/">Legal</a>
            <a href="/terms-of-use/">Terms of Use</a>
        </div>
        <a id="contact-us" class="anchor"></a>
        <div class="footer-form">
            <div class="h1 text-white">Get in touch</div>
            <div class="fs-500">Contact us today and we will get back to you as soon as possible</div>
            <?=do_shortcode('[gravityform id="1" title="false"]')?>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="<?=get_stylesheet_directory_uri()?>/img/celia-alliance-logo-01.png"
                    class="footer__logo" alt="CELIA Alliance">
            </div>
            <div class="col-lg-4">
                <?=get_field('contact_address','options')?>
            </div>
            <div class="col-lg-4">
                T: <?=contact_phone()?><br>
                F: <?=get_field('contact_fax','options')?>
            </div>
        </div>
    </div>
    </div>
    <div class="colophon">
        <div class="container-xl py-2">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-md-6 text-center text-md-start">
                    &copy; <?=date('Y')?>  CELIA Alliance
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end flex-wrap gap-1">
                    <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                        title="Digital Marketing by Chillibyte"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
<!-- Google Tag Manager (noscript) -- LEGACY -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-MK7LHPQ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>

</html>