<?php
$class = $block['className'] ?? 'pt-4 pb-5';
// <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
?>
<section class="flag_block <?=$class?>">
    <div class="container-xl d-flex gap-4 justify-content-center flex-wrap fs-800">
        <?php
        foreach (get_field('flags') as $f) {
            $cc = get_field('country_code', $f);
            echo '<span class="fi fis fi-' . $cc . '"></span>';
        }
?>
    </div>
</section>