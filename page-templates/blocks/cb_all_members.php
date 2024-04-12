<section class="members_list all_members">
    <div class="members_list__grid container-xl">
        <?php
        // <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />

$locations = get_terms([
    'taxonomy' => 'location',
    'hide_empty' => true,
    'orderby' => 'name', // Order by term name
    'order' => 'ASC', // Alphabetical order
]);


        if (!empty($locations) && !is_wp_error($locations)) {
            foreach ($locations as $location) {
                $cc = get_field('country_code', $location);
                // Display the location name
                echo '<h2 class="half-line"><a href="' . get_category_link($location->term_id) . '"><span class="fi fi-' . $cc . '"></span>&nbsp; ' . esc_html($location->name) . '</a></h2>';
        
                $members = new WP_Query([
                    'post_type' => 'member',
                    'posts_per_page' => -1, // Retrieve all members
                    'orderby' => 'title', // Order members by title
                    'order' => 'ASC', // Alphabetical order
                    'tax_query' => [
                        [
                            'taxonomy' => 'location',
                            'field' => 'term_id',
                            'terms' => $location->term_id,
                        ],
                    ],
                ]);

                if ($members->have_posts()) {
                    while ($members->have_posts()) {
                        $members->the_post();
                        ?>
        <div class="members_list__card">
            <div class="members_list__card_grid">
                <img class="members_list__image"
                    src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                    alt="<?=get_the_title()?>">
                <div class="members_list__address">
                    <h3 class="fs-400"><?=get_the_title()?></h3>
                    <div>
                        <?=get_field('address', get_the_ID())?>
                    </div>
                </div>
                <div class="members_list__contact">
                    <h3 class="fs-400">Contact</h3>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa-solid fa-paper-plane text-green-400"></i></span> <a
                                href="mailto:<?=get_field('email', get_the_ID())?>"><?=get_field('email', get_the_ID())?></a>
                        </li>
                        <li><span class="fa-li"><i class="fa-solid fa-phone text-green-400"></i></span> <a
                                href="tel:<?=get_field('phone', get_the_ID())?>"><?=get_field('phone', get_the_ID())?></a>
                        </li>
                        <li><span class="fa-li"><i class="fa-solid fa-laptop text-green-400"></i></span> <a
                                href="<?=get_field('website', get_the_ID())?>"
                                target="_blank"><?=get_field('website', get_the_ID())?></a>
                        </li>

                    </ul>
                </div>
                <div class="members_list__disciplines">
                    <h3 class="fs-400">Disciplines</h3>
                    <div>
                        <?=get_field('disciplines', get_the_ID())?>
                    </div>
                </div>
            </div>
            <?php
                            if (get_the_content() ?? null) {
                                ?>
            <div class="text-center">
                <a href="<?=get_the_permalink()?>"
                    class="btn btn-green">View member profile</a>
            </div>
            <?php
                            }
                        ?>
        </div>

        <?php
                    }
                    wp_reset_postdata(); // Reset the global post object
                } else {
                    echo 'No members found for this location.';
                }
                echo '<hr>';
            }
        } else {
            echo 'No locations found.';
        }
        ?>
    </div>
</section>