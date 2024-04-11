<section class="brochures">
    <div class="container-xl">
        <?php
        while (have_rows('brochures')) {
            the_row();
            $attachment_id = get_sub_field('file');
            $pdf_thumbnail_url = wp_get_attachment_image_url( $attachment_id, 'medium' );
            $attachment_path = get_attached_file($attachment_id);
            $file_size = filesize($attachment_path);
            $attachment_url = wp_get_attachment_url($attachment_id);
            ?>
            <div class="row py-5">
                <div class="col-md-4 text-center">
                    <img src="<?=$pdf_thumbnail_url?>" alt="" class="brochures__thumb">
                </div>
                <div class="col-md-8">
                    <h2><?=get_sub_field('title')?></h2>
                    <p><?=get_sub_field('description')?></p>
                    <a href="<?=$attachment_url?>" class="btn btn-blue" target="_blank">Download PDF (<?=size_format($file_size)?>)</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>