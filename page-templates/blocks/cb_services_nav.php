<section class="services_nav bg-grey-200 py-5">
    <div class="container-xl bg-white pe-lg-0">
        <div class="row gx-2">
            <div class="col-lg-4 p-4">
                <h2 class="text-blue-900"><?=get_field('title')?></h2>
                <?=apply_filters('the_content',get_field('intro'))?>
            </div>
            <div class="col-md-6 col-lg-4 services_nav__list mb-2 mb-md-0">
                <a href="/international-assignments/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-international-assignments.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>International</strong> Assignments</h3>
                </a>
                <a href="/corporate-services/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-corporate-services.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>Corporate</strong> Services</h3>
                </a>
                <a href="/employment-and-labour-law/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-employment-and-labour-law.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>Employment</strong> and Labour Law</h3>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 services_nav__list">
                <a href="/tax/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-tax.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>Tax</strong></h3>
                </a>
                <a href="/compensation-benefits/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-compensation-benefits.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>Compensation</strong> &amp; Benefits</h3>
                </a>
                <a href="/new-territories/" class="services_nav__card" style="background-image:url(<?=get_stylesheet_directory_uri()?>/img/service-images/service-new-territories.jpg)">
                    <div class="arrow"></div>
                    <h3><strong>New</strong> Territories</h3>
                </a>
            </div>
        </div>
    </div>
</section>