<?php
function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'				=> 'cb_hero_full',
            'title'				=> __('CB Hero Full'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero_full.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hero',
            'title'				=> __('CB Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_two_col_text',
            'title'				=> __('CB Two Col Text'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_two_col_text.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_services_nav',
            'title'				=> __('CB Services Nav'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_services_nav.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_services_list',
            'title'				=> __('CB Services List'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_services_list.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_image',
            'title'				=> __('CB Text Image'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_image.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_four_cards',
            'title'				=> __('CB Four Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_four_cards.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_member_people',
            'title'				=> __('CB People'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_member_people.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_locations',
            'title'				=> __('CB Locations'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_locations.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_member',
            'title'				=> __('CB Member Panel'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_member.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_latest_news',
            'title'				=> __('CB Latest News'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_latest_news.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_testimonials',
            'title'				=> __('CB Testimonials'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_testimonials.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_all_members',
            'title'				=> __('CB All Members'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_all_members.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_brochures',
            'title'				=> __('CB Brochures'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_brochures.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hub_cards',
            'title'				=> __('CB Hub Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hub_cards.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_flags',
            'title'				=> __('CB Flag Block'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_flags.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_hs',
            'title'				=> __('CB Text / HS Form'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_hs.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hs_form',
            'title'				=> __('CB HS Form'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hs_form.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_title_content',
            'title'				=> __('CB Title / Content'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_title_content.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_useful_links',
            'title'				=> __('CB Useful Links'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_useful_links.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_links_index',
            'title'				=> __('CB Links Index'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_links_index.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_button',
            'title'				=> __('CB Button'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_button.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
    }
}
add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}
?>