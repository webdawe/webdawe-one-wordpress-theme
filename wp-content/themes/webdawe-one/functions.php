<?php
$theme_name = 'Webdawe One';
$theme_prefix = 'webdawe_one_';
function setup_theme_admin_menus()
{
    global $theme_name, $theme_prefix;
	
	add_menu_page($theme_name, 'General', 'manage_options',
        $theme_prefix.'_theme_settings', 'theme_settings_page');
         
    add_submenu_page($theme_prefix.'_theme_settings', 
        'Front Page Elements', 'Front Page', 'manage_options', 
        'front-page-elements', 'theme_front_page_settings'); 
}
 
// We also need to add the handler function for the top level menu
function theme_settings_page() {
    global $theme_name, $theme_prefix;
    $fields = array(
        'contact_title'  => array( 'group' => 'Contact Info', 'label' => 'Title for Contact', 'type' => 'text', 'params' => 'size="25"'),
        'contact_heading' => array( 'group' => 'Contact Info', 'label' => 'Contact Heading', 'type' => 'text', 'params' => 'size="100"'),
        'contact_content' =>array( 'group' => 'Contact Info', 'label' => 'Contact Content', 'type' => 'textarea', 'params' => 'style="width:60%;"'),
        'contact_phone' => array( 'group' => 'Contact Info', 'label' => 'Contact Phone', 'type' => 'text', 'params' => 'size="25"'),
        'contact_email' => array( 'group' => 'Contact Info', 'label' => 'Contact Email', 'type' => 'text', 'params' => 'size="25"'),
        'contact_address' => array( 'group' => 'Contact Info', 'label' => 'Contact Address', 'type' => 'textarea', 'params' => 'style="width:30%;"'),

        'social_facebook' =>   array( 'group' => 'Social Media', 'label' => '<i class="fa fa-facebook-square" aria-hidden="true"></i> facebook URL', 'type' => 'text', 'params' => 'size="50"'),
        'social_linkedin' =>   array( 'group' => 'Social Media', 'label' => '<i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn URL', 'type' => 'text', 'params' => 'size="50"'),
        'social_google_plus' =>   array( 'group' => 'Social Media', 'label' => '<i class="fa fa-google-plus-square" aria-hidden="true"></i> Google Plus URL', 'type' => 'text', 'params' => 'size="50"'),
        'social_instagram' =>   array( 'group' => 'Social Media', 'label' => '<i class="fa fa-instagram" aria-hidden="true"></i> Instagram URL', 'type' => 'text', 'params' => 'size="50"'),
        'social_youtube' =>   array( 'group' => 'Social Media', 'label' => '<i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube URL', 'type' => 'text', 'params' => 'size="50"'),


    );


    webdawe_draw_form('General Settings', $fields);
}

function theme_front_page_settings()
{
	 global $theme_name, $theme_prefix;
	 
	 $fields = array(
                     'home_heading'  =>  array( 'group' => 'Header', 'label' => 'Header Heading', 'type' => 'text', 'params' => 'size="100"'),
                     'home_content' =>array(  'group' => 'Header', 'label' => 'Header Content', 'type' => 'textarea', 'params' => 'style="width:60%;"'),
                     'home_button' => array(  'group' => 'Header', 'label' => 'Header Button', 'type' => 'text', 'params' => 'size="25"'),

                     'about_title' => array( 'group' => 'About', 'label' => 'Title for About', 'type' => 'text', 'params' => 'size="25"'),
                     'about_heading' => array( 'group' => 'About', 'label' => 'About Heading', 'type' => 'text', 'params' => 'size="100"'),
                     'about_content' =>array( 'group' => 'About', 'label' => 'About Content', 'type' => 'textarea', 'params' => 'style="width:60%;"'),
                     'about_button' => array( 'group' => 'About', 'label' => 'About Button', 'type' => 'text', 'params' => 'size="25"'),

                     'services_title'  => array( 'group' => 'Services', 'label' => 'Title for Service', 'type' => 'text', 'params' => 'size="25"'),
                     'services_heading' => array( 'group' => 'Services',  'label' => 'Service Heading', 'type' => 'text', 'params' => 'size="100"'),

                     'service_box1_title' =>array( 'group' => 'Services', 'label' => 'Services - First Box Title','type' => 'text', 'params' => 'size="100"'),
                     'service_box1_content' =>array( 'group' => 'Services',  'label' => 'Services - First Box Content','type' => 'text', 'params' => 'size="100"'),
                     'service_box2_title' =>array( 'group' => 'Services',  'label' => 'Services - Second Box Title','type' => 'text', 'params' => 'size="100"'),
                     'service_box2_content' =>array( 'group' => 'Services', 'label' => 'Services - Second Box Content','type' => 'text', 'params' => 'size="100"'),
                     'service_box3_title' =>array( 'group' => 'Services',  'label' => 'Service Third Box  Title','type' => 'text', 'params' => 'size="100"'),
                     'service_box3_content' =>array( 'group' => 'Services', 'label' => 'Services - Fourth Box Content','type' => 'text', 'params' => 'size="100"'),
                     'service_box4_title' =>array( 'group' => 'Services', 'label' => 'Service Fourth Box  Title','type' => 'text', 'params' => 'size="100"'),
                     'service_box4_content' =>array( 'group' => 'Services', 'label' => 'Services - Fourth Box Content','type' => 'text', 'params' => 'size="100"'),

					 'portfolio_title'  => array( 'group' => 'Portfolio', 'label' => 'Title for Portfolio', 'type' =>'text', 'params' => 'size="25"'),

					   );


    webdawe_draw_form('Front Page Settings', $fields);

}

function webdawe_one_custom_header_setup()
{
    $args = array(
        'default-image'      => get_template_directory_uri() . '/img/header.jpg',
        'default-text-color' => 'ffffff',
        'width'              => 1900,
        'height'             => 1267,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'webdawe_one_custom_header_setup' );


function webdawe_one_theme_customizer( $wp_customize )
{
        $wp_customize->add_section( 'webdawe_one_logo_section' , array(
        'title'       => __( 'Logo', 'webdawe_one_logo' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'webdawe_one_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'webdawe_one_logo', array(
        'label'    => __( 'Logo', 'webdawe_one_logo' ),
        'section'  => 'webdawe_one_logo_section',
         'width'   => 200,
         'height'  => 40,
         'flex-width' => true,
        'settings' => 'webdawe_one_logo',
    ) ) );

}
add_action( 'customize_register', 'webdawe_one_theme_customizer' );


function admin_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
}

function webdawe_draw_form($heading, $fields)
{
    global $theme_name, $theme_prefix;
    if (isset($_POST["update_settings"]))
    {
        foreach ( $fields as $key => $options)
        {
            update_option($theme_prefix . $key , $_POST[$key]);
        }
        ?>
        <div id="message" class="updated">Settings saved</div>
        <?php
    }
    ?>
    <div class="wrap">
       <h2><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<?php echo $heading;?></h2>

        <form method="POST" action="">
            <table class="form-table">
                <?php $groupTitle = ''; ?>
                <?php foreach ( $fields as $key => $options) : ?>
                    <?php if($groupTitle =='' || $groupTitle != $options['group']) :?>
                        <?php $groupTitle = $options['group'];?>
                        <tr>
                        <td colspan="2"><h2><?php echo $groupTitle;?></h2></td>
                        </tr>
                    <?php endif;?>
                    <?php if (isset($_POST["update_settings"])) :?>
                        <?php $value = $_POST[$theme_prefix . $key];?>
                    <?php else:?>
                        <?php $value = webdawe_get_option( $key);?>
                    <?php endif;?>
                    <!-- <?php echo $options['label'] ?> -->
                    <tr valign="top">
                        <th scope="row">
                            <label for="<?php echo $key;?>">
                                <?php echo $options['label'] ?>
                            </label>
                        </th>
                        <td>
                            <?php if ($options['type'] == 'text') :?>
                                <input type="text" name="<?php echo $key;?>" <?php echo $options['params'];?>  value="<?php echo $value ?>"/>
                            <?php elseif($options['type'] == 'textarea') :?>
                                <textarea name="<?php echo $key;?>" <?php echo $options['params'];?>><?php echo $value;?></textarea>
                            <?php endif;?>
                        </td>
                    </tr>
                <?php endforeach;?>

            </table>
            <p>
                <input type="submit" value="Save settings" class="button-primary"/>
                <input type="hidden" name="update_settings" value="Y" />
            </p>
        </form>
    </div>
    <?php
}
/* Set theme Options in Admin */
add_action("admin_menu", "setup_theme_admin_menus");

/* Add Custom CSS to Admin Style */
add_action('admin_enqueue_scripts', 'admin_style');

if ( ! function_exists( 'webdawe_get_option' ) )
{

    function webdawe_get_option($key)
    {
        global $theme_prefix;

        return stripslashes(get_option($theme_prefix. $key));
    }
}
?>