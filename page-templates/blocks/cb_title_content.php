<?php
$bg = get_field('background') ?? 'white';
$text = $bg != 'white' ? 'text-white' : null;
?>
<section class="title_content bg-<?=$bg?> py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h3 <?=$text?> half-line"><?=get_field('title')?></h2>
            </div>
            <div class="col-md-6">
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</section>