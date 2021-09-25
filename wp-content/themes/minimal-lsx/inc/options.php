<?php
/**
 * travel Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'travel';
}

function optionsframework_options() {
	
	// add_filter( 'wp_default_editor', create_function('', 'return "html";') ); 
	
	$wp_editor_settings = array(
		'wpautop' => false, // Default
		'textarea_rows' => 5,
		'editor_css' => '<style>.wp-editor-tools, .quicktags-toolbar { visibility: hidden; height:0px;} </style>',
		'teeny' => true,
		'tinymce' => false,
		'quicktags' => false
	);	
	
	$wp_editor_settingst = array(
		'wpautop' => false, // Default
		'textarea_rows' => 2,
		'editor_css' => '<style>.wp-editor-tools, .quicktags-toolbar { visibility: hidden; height:0px;} </style>',
		'teeny' => true,
		'tinymce' => false,
		'quicktags' => false
	);	
	
	$alignpos = array ( 'left' => 'Left Position', 'center' => 'Center Position', 'right' => 'Right Position' );
	
	
// Maintenance Page Settings	
	$options[] = array(
		'name' => 'Maintenance Mode', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Activate Maintenance Mode',
		'desc' => 'Check it if you want to Activate Maintenance Mode', 
		'id' => 'mmactive',
		'std' => '0',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Timeline', 
		'desc' => 'Set the Timeline Year. Such As: '.date('Y'), 
		'id' => 'timeliney',
		'std' => date('Y'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'desc' => 'Set the Timeline Month. Such As: '.date('m'),  
		'id' => 'timelinem',
		'std' => date('m'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'desc' => 'Set the Timeline Day. Such As: '.date('d'),  
		'id' => 'timelined',
		'std' => date('d'),
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Heading Text',
		'desc' => 'Set the Heading Text',  
		'id' => 'uct1',
		'std' => 'We are working our butts off to finish this website',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Heading Description',
		'desc' => 'Set the Heading Description',  
		'id' => 'uct2',
		'std' => 'Our developers, are doing their best to finish this website before the counter, but we can not help them.',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'E-Mail Box Text',
		'desc' => 'Set the E-Mail Box Text',  
		'id' => 'uct3',
		'std' => 'Input your e-mail address here...',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'E-Mail Button Text',
		'desc' => 'Set the E-Mail Button Text',  
		'id' => 'uct4',
		'std' => 'Let Me Notified',
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Social Items Text',
		'desc' => 'Set the Social Items Text',  
		'id' => 'uct5',
		'std' => 'Learn More from our Social Pages',
		'type' => 'text');	
		
	
	
	
// General		
	$options[] = array(
		'name' => 'General',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Site Favicon',
		'desc' => 'Upload an Icon for the Site Favicon. 16px X 16px image is recommended.',
		'id' => 'favicon',
		'std' => get_template_directory_uri() . '/images/favicon.ico',
		'type' => 'upload');	

	$options[] = array(
		'name' => 'Company Logo (If Logo is not present Site Title will be displayed)',
		'desc' => 'Upload an image for the Company Logo. 300px X 70px image is recommended. If you do not want to show the logo please leave the box blank. Thus your Site Title will be displayed.',
		'id' => 'site-logo',
		'std' => get_template_directory_uri() . '/images/logo.png',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Logo Position', 
		'desc' => 'Set top Logo Position. Default is <b>Left Position</b>', 
		'id' => 'logopos',
		'std' => 'left',
		'type' => 'radio',
		'options' => $alignpos );
		
	$options[] = array(
		'name' => 'Show Site Logo in Login Page',
		'desc' => 'Check it if you want to show Site Logo in Login Page', 
		'id' => 'login-logo',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Fixed Header/Main Menu during Scrolling ?',
		'desc' => 'Check it if you want to show Fixed Header/Main Menu during Scrolling', 
		'id' => 'header-fixed',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Post Featured Image Background',
		'desc' => 'Upload an image for the Common Background of Featured/ Thumbnail Image on every Post. 900px X 300px image is recommended. If your post has no featured image attached, this background will be displayed. Otherwise your post featured image will be displayed. You are recommended to attach the Featured Image during new Post Creation or Editing.',
		'id' => 'ft-back',
		'std' => get_template_directory_uri() . '/images/thumb-back.jpg',
		'type' => 'upload');
		
	$options[] = array(
		'name' => "Site Layout",
		'desc' => "You can set the Site Layout for Whole the Site.",
		'id' => "site-layout",
		'std' => "2c-r-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => get_template_directory_uri() . '/images/1col.png',
			'2c-l-fixed' => get_template_directory_uri() . '/images/2cl.png',
			'2c-r-fixed' => get_template_directory_uri() . '/images/2cr.png')
	);
	
	
	$options[] = array(
		'name' => 'Use Responsive Layout', 
		'desc' => 'Check the Box if you want the Responsive Layout of your Website', 
		'id' => 'responsive',
		'std' => '1',
		'type' => 'checkbox');	
		
	$site_background_defaults = array(
		'color' => '#E4E8E9',
		'image' => get_template_directory_uri() . '/images/background.jpg',
		'repeat' => 'no-repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );
		
	$options[] = array(
		'name' => 'Set Site Background', 
		'desc' => 'You can set the WebSite Background here. Defaults: <b>#E4E8E9  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '. get_template_directory_uri() . '/images/background.jpg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Repeat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Top Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scroll Normally </b>' ,
		'id' => 'website-back',
		'std' => $site_background_defaults,
		'type' => 'background' );
		
	$options[] = array(
		'name' => 'Custom Code within Head Area',
		'desc' => 'You can input any Custom Code Here like Google Analytics Code, CSS, Java Script etc.',
		'id' => 'headcode',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => 'Show Log In Panel on the Top',
		'desc' => 'Show Log In and Membership Panel to the Top.',
		'id' => 'lbox-check',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Show Search Box on the Top Right Corner',
		'desc' => 'Show Search Box on the Top Right Corner of the Site.',
		'id' => 'sbox-check',
		'std' => '1',
		'type' => 'checkbox' );		
		
	$contype = array( '1' => 'Full Content in Blog Page. Also Support Read More Button if inserted during Editing.', '2' => 'Some Words and Read More Button in the Blog Page' );
	
	$options[] = array(
		'name' => 'Select the Content Type in the Blog Page.',
		'desc' => 'Select whether you want to show the Full / Selected Content or Some Words and Read More Button Automatically.', 
		'id' => 'contype',
		'std' => '1',
		'type' => 'radio',
		'options' => $contype);
		
	$options[] = array(
		'name' => 'Copyright Notice',
		'desc' => 'You can input your copyright notice or other links like sitemap here.',
		'id' => 'copyright',
		'std' => '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . ', All Rights Reserved',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Author and WordPress Credit',
		'desc' => 'Hide Author and CMS Creadit from Footer',
		'id' => 'credit',
		'std' => '0',
		'type' => 'checkbox' );	
	
	$options[] = array(
		'name' => 'Featured/ Thumbnail Image in Pages',
		'desc' => 'Hide Featured/ Thumbnail Images from All Pages',
		'id' => 'tpage',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Meta Data like Date, Author Name, Tags, Categories etc. in Posts',
		'desc' => 'Hide the Meta Data like Date, Author Name, Tags, Categories etc. from all Posts',
		'id' => 'tmpost',
		'std' => '0',
		'type' => 'checkbox' );	
	
	$options[] = array(
		'name' => 'Featured/ Thumbnail Image in Posts and Pages',
		'desc' => 'Hide Featured/ Thumbnail Images from All Posts and Pages, This will also hide the Meta Dats like Date, Author Name, Tags, Categories etc.',
		'id' => 'tpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Post/Image Navigation',
		'desc' => 'Hide Post/Image Navigation from All Posts',
		'id' => 'navpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Comments Box',
		'desc' => 'Hide WordPress Comments Box from All Pages',
		'id' => 'cpage',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'desc' => 'Hide WordPress Comments Box from All Posts',
		'id' => 'cpost',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Hide Admin Bar',
		'desc' => 'Hide WordPress Admin Bar for Logged In Users',
		'id' => 'admin-bar',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$fposttype = array( '1' => 'Do not Show any Post or Page in the Front Page.', '2' => 'Show Posts or Page and Left/Right Sidebar.', '3' => 'Show Posts or Page Full Width without Left/Right Sidebar.' );
	
	$options[] = array(
		'name' => 'Front Page Post/Page Visibility', 
		'desc' => 'Select Option how you want to show or do not show Posts/Pages in the Front Page', 
		'id' => 'fpostex',
		'std' => '1',
		'type' => 'radio',
		'options' => $fposttype);
		
	$options[] = array(
		'name' => 'Show only the Selected Posts in Front Page',
		'desc' => 'Check this Box to Show only the Selected Posts in Front Page',
		'id' => 'sel-post',
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Some Words and Read More Button in the Front Page Blog',
		'desc' => 'Show Some Words and Read More Button in the Front Page Blog',
		'id' => 'sfsw-check',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Front Page Recent News/Post Section Heading', 
		'desc' => 'First Part of Heading', 
		'id' => 'fnews01-title',
		'std' => 'Recent',
		'type' => 'text',
		'class' => 'mini');
	
	$options[] = array(
		'desc' => 'Second Part of Heading', 
		'id' => 'fnews02-title',
		'std' => 'News',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Contact Number',
		'desc' => 'Set Your Contact Number',
		'id' => 'contactnumber',
		'std' => '(000) 111-222',
		'type' => 'text',
		'class' => 'mini');
		
	
	$options[] = array(
		'desc' => '<span class="featured-area-title sub-item">Front Page Parts Ordering</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Activate This Ordering for Front Page Components', 
		'desc' => 'Check the Box if you want to activate This Ordering for Front Page Components', 
		'id' => 'fporder-check',
		'std' => '0',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
$fpoarray = array( 	'slide'=>'Main Slider',
					'featuredb'=>'Featured Boxes', 
					'gallery'=>'Gallery',
					'contact'=>'Contact Box',
					'wpblog'=>'Blog Index or Page',
					'clients'=>'Clients List', 
					'testimonial'=>'Clients Testimonials' 
				);
	
		
	$options[] = array(
		'name' => 'Front Page Parts Ordering',
		'desc' => 'Drag and Drop Parts to Reorder the Front Page Components. You can Hide/Disable any Part from the Settings Page of Specific Part',
		'id' => 'fporder',
		'std' => $fpoarray,
		'type' => 'sorter'
	);	
		
	
// Social Links	
	$options[] = array(
		'name' => 'Social Links', 
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Top Social Menu Bar Position', 
		'desc' => 'Set top Social Menubar Position. Default is <b>Center Position</b>', 
		'id' => 'topmbp',
		'std' => 'center',
		'type' => 'radio',
		'options' => $alignpos );
	

	$options[] = array(
		'name' => 'Number of Social Links', 
		'desc' => 'Set the Number of Social Links you want.', 
		'id' => 'nslinks',
		'std' => '5',
		'type' => 'text',
		'class' => 'mini');
		
	$numslinks = of_get_option('nslinks', '5');
	foreach (range(1, $numslinks ) as $numslinksn) {
		
	$options[] = array(
		'name' => 'Social Link - '. $numslinksn, 
		'desc' => 'Input Your Social Page Link. Example: <b>http://facebook.com/d5creation</b>.  If you do not want to show anything here leave the box blank.', 
		'id' => 'sl' . $numslinksn,
		'std' => '#',
		'type' => 'text');	
		
	}
	
	
// Slider Settings

	/*$options[] = array(
		'name' => 'Slider',
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Slider',
		'desc' => 'Uncheck this if you do not want to show the Slider', 
		'id' => 'slidebox',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Do you want to Move the Slider Position from the Top ?',
		'desc' => 'Check This if you do not want to show the Slider Always on Top. <b>We strongly recommend not to Check this Box</b>. <p style="color:#fe0202;">By Default, the Slider will be shown Always on Top whatever the Position of <b>WP-Admin > Appearance > Travel Options > General Options > Front Page Parts Ordering</b> is !</p> If you want to move the Slider Position from Top to Another you can Check This Box. This may change some Styling',
		'type' => 'info' ); 
		
	$options[] = array(
		'desc' => 'Check This if you do not want to show the Slider Always on Top', 
		'id' => 'slide-aotop',
		'std' => '0',
		'type' => 'checkbox' );
		
	$options[] = array(
		'name' => 'Number of Slide Images',
		'desc' => 'Set the Expected Number of Slide Images from 2 to 20.  Default is 10',
		'id' => 'slide-number',
		'std' => '10',
		'type' => 'text',
		'class' => 'mini' );

	$options[] = array(
		'name' => 'Slide Interval in Milliseconds',
		'desc' => 'Set the expected Slide Interval in Milliseconds. 1000 = 1 Sec. Default is 5000',
		'id' => 'slide-interval',
		'std' => '5000',
		'type' => 'text',
		'class' => 'mini' );
		
	$options[] = array(
		'name' => 'Slide Animation', 
		'desc' => 'Slide Animation. Default is Fade.', 
		'id' => 'slide-animation',
		'std' => 'fade',
		'type' => 'radio',
		'options' => array(
			'fade' => 'Fade',
			'slide' => 'Slide'
			)
	); 	
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">Slide Image Source</span>',
		'type' => 'info');
	
	$options[] = array(
		'desc' => 'You can Select the Slide Image Source. Default is <b>The Following Images</b> .', 
		'id' => 'slide-source',
		'std' => '',
		'type' => 'radio',
		'options' => array(
			'thiss' => 'The Following Images',
			'post' => 'From Featured Images of Selected Posts',
			'page' => 'From Featured Images of Selected Pages'
			)
	); 	
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">SLIDING IMAGES</span>',
		'type' => 'info');
	
	$opsin = of_get_option('slide-number', '10');		
	foreach (range(1, $opsin) as $opsinumber ) {
	
	$options[] = array(
		'desc' => '<span class="featured-area-title">' . 'Sliding Image - ' . $opsinumber . '</span>',
		'type' => 'info');
	
	$options[] = array(
		'name' => 'Sliding Image',
		'desc' => 'Upload a Sliding Image. 1400px X 750px image is recommended. Please upload an optimized image for smooth running of the slides.',
		'id' => 'slide-image' . $opsinumber,
		'std' => get_template_directory_uri() . '/images/slide-image/slide-image' . $opsinumber . '.jpg',
		'type' => 'upload');
		
	$options[] = array(
		'name' => 'Image Caption',
		'desc' => 'Input the Caption of the Image. Please limit the words within 50 so that the layout should be clean and attractive. You can also add HTML Contents Here.',
		'id' => 'slide-image' . $opsinumber . '-caption',
		'std' => 'This is a Test Image for Travel Theme',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Image Link',
		'desc' => 'Input the URL where the image will redirect the visitors.',
		'id' => 'slide-image' . $opsinumber . '-link',
		'std' => '#',
		'type' => 'text');
	}*/
			
// More Info Tabs

$options[] = array(
	'name' => 'More Informations Tabs',
	'type' => 'heading');

$options[] = array(
	'name' => 'Number of Informations Tabs', 
	'desc' => 'Set the Number of Informations Tabs you want.', 
	'id' => 'nitab1',
	'std' => '6',
	'type' => 'text',
	'class' => 'mini');

$options[] = array(
	'name' => 'More Info Title',
	'desc' => 'Input your More Info Title here.',
	'id' => 'fpinfotitle',
	'std' => 'Find the More Infomations',
	'type' => 'text');
	
	$numfbox2 = of_get_option('nitab1', '6');
	foreach (range(1, $numfbox2 ) as $fbsinumber) {

		$options[] = array(
			'name' => 'Info Tab Link '. $fbsinumber,
			'desc' => 'Input your Info Tab Link here.',
			'id' => 'infotab-' . $fbsinumber . '-link',
			'std' => '#',
			'type' => 'text');
		$options[] = array(
			'desc' => 'Open Link in a New Tab/Window',
			'id' => 'infotab-' . $fbsinumber . '-link-new-tabs',
			'std' => '0',
			'type' => 'checkbox' );
		$options[] = array(
			'name' => 'Info Tab Title '. $fbsinumber,
			'desc' => 'Input your Info Tab Title here.',
			'id' => 'infotab-' . $fbsinumber . '-title',
			'std' => 'Title',
			'type' => 'text');
	
	}

// Insta Feed

$options[] = array(
	'name' => 'Insta Feed',
	'type' => 'heading');

$options[] = array(
	'name' => 'Number of Insta Feeds', 
	'desc' => 'Set the Number of Number of Insta Feeds you want.', 
	'id' => 'nifeed1',
	'std' => '4',
	'type' => 'text',
	'class' => 'mini');

$options[] = array(
	'name' => 'Insta Feed Title',
	'desc' => 'Input your Insta Feed Title here.',
	'id' => 'fpinstafeedtitle',
	'std' => 'Share With Us',
	'type' => 'text');
	
	$numifeeds = of_get_option('nifeed1', '4');
	foreach (range(1, $numifeeds ) as $numifeed) {

		$options[] = array(
			'name' => 'Insta Feed Link '. $numifeed,
			'desc' => 'Input your Insta Feed Link here.',
			'id' => 'insta-slide-link' . $numifeed,
			'std' => '#',
			'type' => 'text');
		$options[] = array(
			'desc' => 'Open Link in a New Tab/Window',
			'id' => 'insta-slide-link-new-tabs' . $numifeed,
			'std' => '0',
			'type' => 'checkbox' );
		$options[] = array(
			'name' => 'Insta Feed Image '. $numifeed,
			'desc' => 'Upload an image for the Insta Feed',
			'id' => 'insta-slide-image' . $numifeed,
			'std' => get_template_directory_uri() . '/assets/images/insta-images/insta-image' . $numifeed . '.jpg',
			'type' => 'upload');
	
	}

// Front Page Fearured Images
	
	$options[] = array(
		'name' => 'Featured Boxes',
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Featured Boxes',
		'desc' => 'Uncheck this if you do not want to show the Featured Boxes', 
		'id' => 'fbboxv',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$fb_background_defaults = array(
		'color' => '#cccccc',
		'image' => get_template_directory_uri() . 'assets/images/discover-more-bg.png',
		'repeat' => 'repeat',
		'position' => 'top left',
		'attachment'=>'scroll' );
		
	$options[] = array(
		'name' => 'Set Box Background', 
		'desc' => 'You can set the Box Background here. Defaults: <b>#cccccc  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '. get_template_directory_uri() . '/images/fbcback.png &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Repeat All &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Top Left &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scroll Normally </b>' ,
		'id' => 'fb-backc',
		'std' => $fb_background_defaults,
		'type' => 'background' );
		
	$options[] = array(
		'name' => 'Width of the Container in % for Large Screens. Change is not Recommended. Default is 85', 
		'desc' => 'Set the width of the Container in % for Large Screens. Change is not Recommended. Default is 85', 
		'id' => 'nfboxwidth',
		'std' => '85',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Number of Featured Boxes', 
		'desc' => 'Set the Number of Featured Boxes you want. Please use 3, 6, 9, 12, 15 etc. Default Value 3', 
		'id' => 'nfbox1',
		'std' => '3',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Activate the Position Ordering',
		'desc' => 'You can check this Box if you want to activate the Position Ordering', 
		'id' => 'fboxpov',
		'std' => '0',
		'type' => 'checkbox' );
		
	$fpfboop = array( 'desc' => 'Smallest to Largest ( Latest box to Bottom )', 'asc' => 'Largest to Smallest ( Latest box to Top )', 'rand' => 'Random Order'  );
	
	$options[] = array(
		'desc' => 'Select the Ordering. Default is <strong>Smallest to Largest ( Latest box to Bottom )</strong>', 
		'id' => 'fbfboxord',
		'std' => 'desc',
		'type' => 'radio',
		'options' => $fpfboop);
		
	$options[] = array(
		'name' => 'Main Heading & Content', 
		'desc' => 'You can input anything here like HTML, Java Script, ShortCode etc.', 
		'type' => 'info' );
		
	$options[] = array(
		'id' => 'fphomeheading',
		'std' => 'desc',
		'type' => 'text',
		'class' => 'mini');
		
		$options[] = array(
		'id' => 'fphomeintro',
		'std' => 'desc',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$numfbox1 = of_get_option('nfbox1', '3');
	foreach (range(1, $numfbox1 ) as $fbsinumber) {
	
	$options[] = array(
		'desc' => '<span class="featured-area-sub-title">' . 'Featured Box: ' . $fbsinumber . '</span>',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Position Order',
		'desc' => 'Set the Position Order in Numeric Value', 
		'id' => 'featured-po' . $fbsinumber,
		'std' => $fbsinumber,
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Featured Image',
		'desc' => 'Upload an image for the Featured Box. 285px X 485px image is recommended. If you do not want to show anything here leave the box blank.',
		'id' => 'featured-image' . $fbsinumber,
		'std' => get_template_directory_uri() . 'assets/images/discover-more/featured-image-' . $fbsinumber . '.jpg',
		'type' => 'upload');
	
	$options[] = array(
		'name' => 'Featured Title', 
		'desc' => 'Input the Featured Title here. Please limit it within 10 Letters. If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-title' . $fbsinumber,
		'std' => 'Featured Title ' . $fbsinumber,
		'type' => 'text',
		'class' => 'mini');
	
	/* $options[] = array(
		'desc' => 'Input the Second Part of Featured Title here. Please limit it within 10 Letters. If you do not want to show anything here leave the box blank.', 
		'id' => 'featured02-title' . $fbsinumber,
		'std' => 'Image',
		'type' => 'text',
		'class' => 'mini'); */
	
	$options[] = array(
		'name' => 'Description', 
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.', 
		'id' => 'featured-description' . $fbsinumber,
		'std' => 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.',
		'type' => 'editor',
		'settings' => $wp_editor_settings );	
	
	$options[] = array(
		'name' => 'Featured Link',
		'desc' => 'Input your Featured Image Link here.',
		'id' => 'featured-link' . $fbsinumber,
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => 'Open Link in a New Tab/Window',
		'id' => 'featured-link-nw' . $fbsinumber,
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Link Text', 
		'desc' => 'Featured Image Link Text. If you do not want to show anything here leave the box blank.', 
		'id' => 'featured-link-text' . $fbsinumber,
		'std' => 'Read More...',
		'type' => 'text',
		'class' => 'mini');
		
	}
	
// Front Page Fearured Contents
	
	/* $options[] = array(
		'name' => 'Featured Contents',
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Featured Contents',
		'desc' => 'Uncheck this if you do not want to show the Featured Contents', 
		'id' => 'fcboxv',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Box Background',
		'desc' => 'Background color of Featured Contents. Default is <b>#eceded</b>', 
		'id' => 'fc-backc',
		'std' => '#eceded',
		'type' => 'color' );
		
	$options[] = array(
		'name' => 'Number of Featured Contents', 
		'desc' => 'Set the Number of Featured Contents you want. Please use 3, 6, 9, 12, 15 etc. Default Value 3', 
		'id' => 'nfbox2',
		'std' => '3',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Width of Each Box in % for Large Screens. Change is not Recommended. Default is 24.5', 
		'desc' => 'Set the width of the Box in % for Large Screens. Change is not Recommended. Default is 24.5', 
		'id' => 'nfconwidth',
		'std' => '24.5',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Activate the Position Ordering',
		'desc' => 'You can check this Box if you want to activate the Position Ordering', 
		'id' => 'fconpov',
		'std' => '0',
		'type' => 'checkbox' );
		
	$options[] = array(
		'desc' => 'Select the Ordering. Default is <strong>Smallest to Largest ( Latest box to Bottom )</strong>', 
		'id' => 'fbfconord',
		'std' => 'desc',
		'type' => 'radio',
		'options' => $fpfboop);
	
	$numfbox2 = of_get_option('nfbox2', '3');
	foreach (range(1, $numfbox2 ) as $fbsinumberd) {
	
	$options[] = array(
		'desc' => '<span class="featured-area-sub-title">' . 'Featured Content: 0' . $fbsinumberd . '</span>',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Position Order',
		'desc' => 'Set the Position Order in Numeric Value', 
		'id' => 'featuredc-po' . $fbsinumberd,
		'std' => $fbsinumberd,
		'type' => 'text',
		'class' => 'mini');
	
	$options[] = array(
		'name' => 'Featured Title',
		'desc' => 'Input the First Part of Featured Title here. Plese limit it within 10 Letters. If you do not want to show anything here leave the box blank.',
		'id' => 'fcontent01-title' . $fbsinumberd,
		'std' => 'Travel',
		'type' => 'text',
		'class' => 'mini');

	$options[] = array(
		'desc' => 'Input the Second Part of Featured Title here. Plese limit it within 10 Letters. If you do not want to show anything here leave the box blank.',
		'id' => 'fcontent02-title' . $fbsinumberd,
		'std' => 'Content',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'name' => 'Special Text for Featured Content', 
		'desc' => 'Special Text for Featured Content like Hot, Pick etc.', 
		'id' => 'fcontent-special'. $fbsinumberd,
		'std' => 'HOT',
		'type' => 'text',
		'class' => 'mini');
		
	$options[] = array(
		'desc' => 'Use This Tool to find the Right Color for Special Text Background', 
		'id' => 'fcontent-special-back' . $fbsinumberd,
		'std' => '#1da4f9',
		'type' => 'color' );
		
	$options[] = array(
		'name' => 'Featured Image',
		'desc' => 'Upload an image for the Featured Box. 500px X 300px image is recommended. If you do not want to show anything here leave the box blank.',
		'id' => 'fcontent-image' . $fbsinumberd,
		'std' => get_template_directory_uri() . '/images/fcontent-image' . $fbsinumberd . '.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Featured Description',
		'desc' => 'Input the description of Featured Areas. Please limit the words within 30 so that the layout should be clean and attractive. You can also input any HTML, Videos or iframe here. But Please keep in mind about the limitation of Width of the box.',
		'id' => 'fcontent-description' . $fbsinumberd,
		'std' => '<h4>A Smart way of Natural Presence</h4><p>This is a Test Description for Travel Theme. If you face any problem please contact with D5 Creation.</p>',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Featured Link',
		'desc' => 'Input your Featured Items URL here.',
		'id' => 'fcontent-link' . $fbsinumberd,
		'std' => '#',
		'type' => 'text');
		
	$options[] = array(
		'desc' => 'Open Link in a New Tab/Window',
		'id' => 'fcontent-link-nw' . $fbsinumberd,
		'std' => '0',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Link Text', 
		'desc' => 'Featured Content Link Text. If you do not want to show anything here leave the box blank.', 
		'id' => 'fcontent-link-text' . $fbsinumberd,
		'std' => 'Read More...',
		'type' => 'text',
		'class' => 'mini');

	} */
	
	
// Front E-Commerce Box
	/* $options[] = array(
		'name' => 'E-Commerce', 
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Show The E-Commerce/WooCommerce Box',
		'desc' => 'Uncheck this if you do not want to show the E-Commerce/WooCommerce Box in Front Page', 
		'id' => 'ecombox',
		'std' => '0',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );

	$options[] = array(
		'name' => 'Full Width Layout for WooCommerce Pages',
		'desc' => 'Check it if you want to show Full Width Layout for WooCommerce Pages', 
		'id' => 'woo-page-full',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Show Cart Icon with Main Menu',
		'desc' => 'Check it if you want to Show Cart Icon with Main Menu. This will work only with WooCommerce', 
		'id' => 'woo-cart-icon',
		'std' => '1',
		'type' => 'checkbox' );	
		
	$options[] = array(
		'name' => 'Base Colors',
		'desc' => 'Change the Base Color 01 <b>#26bdef</b>', 
		'id' => 'wooc1',
		'std' => '#26bdef',
		'type' => 'color' );
		
		
	$options[] = array(
		'desc' => 'Change the Base Color 02 <b>#076896</b>', 
		'id' => 'wooc2',
		'std' => '#076896',
		'type' => 'color' );
		
	$options[] = array(
		'name' => 'Box Title',
		'desc' => 'Input the Title. It also Supports HTML, JavaScripts, ShortCode etc.', 
		'id' => 'ecomtitle',
		'std' => 'OUR AWESOME PRODUCTS',
		'type' => 'editor',
		'settings' => $wp_editor_settingst );	
		
	$options[] = array(
		'name' => 'Box Sub Title',
		'desc' => 'Input the Sub Title. It also Supports HTML, JavaScripts, ShortCode etc.', 
		'id' => 'ecomsubtitle',
		'std' => 'Where <em>Passion and Creativity</em> Meets Experience',
		'type' => 'editor',
		'settings' => $wp_editor_settingst );		
		
	$options[] = array(
		'name' => 'Box Description',
		'desc' => 'Input the description here. Please limit it within 200 Letters. It also Supports HTML, JavaScripts, ShortCode etc.', 
		'id' => 'ecomdes',
		'std' => 'We are a small team of industry veterans having decades of <em>Experience in web Development</em> and design',
		'type' => 'editor',
		'settings' => $wp_editor_settingst );
		
	$options[] = array(
		'name' => 'Input ShortCode for E-Commerce/WooCommerce',
		'desc' => '', 		
		'id' => 'wooshortcod',
		'std' => '[products]',
		'type' => 'editor',
		'settings' => $wp_editor_settings );	

	$options[] = array(
		'desc' => 'This Box Supports HTML, JavaScripts, ShortCode etc. You can use one or more ShortCodes here. WooCommerce ShortCodes are like: <strong style="color:#54C203;">[featured_products]</strong>. You can find more <a href="'.esc_url('https://docs.woothemes.com/document/woocommerce-shortcodes').'" target="_blank">WooCommerce ShortCodes Here</a>. But, you should have the <a href="https://wordpress.org/plugins/woocommerce/" target="_blank">WooCommerce E-Commerce Plugin</a> installed in your site',
		'type' => 'info');
		
	$options[] = array(
		'name' => 'Anything Extra in the Bottom',
		'desc' => 'You can input any Terms or Other things Here', 		
		'id' => 'wooextra',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings ); */

	
	
// 	Front Page Services and Booking

	/* $options[] = array(
		'name' => 'Services and Booking', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Services and Booking',
		'desc' => 'Uncheck this if you do not want to show these', 
		'id' => 'snfbox',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Base Color', 
		'desc' => 'Set the Base Color. Default is <b>#00C7EF</b>', 
		'id' => 'snfcolor',
		'std' => '#00C7EF',
		'type' => 'color' );
		
	$options[] = array(
		'desc' => '<span class="featured-area-sub-title">Service Items</span>', 
		'type' => 'info');
		
		
	$options[] = array(
		'name' => 'Services Heading', 
		'desc' => 'Set the Services Heading', 
		'id' => 'ser-heading',
		'std' => 'Services',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Number of Items', 
		'desc' => 'Set the Number of Service Items', 
		'id' => 'sitem-number',
		'std' => '7',
		'type' => 'text',
		'class' => 'mini');
		
	$ser_number = of_get_option('sitem-number', '7');
	foreach (range(1, $ser_number ) as $sernumber ) {
		
	$options[] = array(
		'name' => 'SERVICE ITEM -'. $sernumber, 
		'desc' => 'Input the Title', 
		'id' => 'sertitle' . $sernumber,
		'std' => 'SERVICE ITEM - '. $sernumber,
		'type' => 'text' );	
		
	$options[] = array(
		'desc' => 'Input the description here. Please limit it within 200 Letters', 
		'id' => 'serdes' . $sernumber,
		'std' => 'It is Amazing!  <em>Over 60 million people</em> have chosen WordPress to power the place on the web',
		'type' => 'editor',
		'settings' => $wp_editor_settingst );
	
	$options[] = array(
		'desc' => 'Input the Link URL. Leave it blank for No Link', 
		'id' => 'serlurl' . $sernumber,
		'std' => '#',
		'type' => 'text' );	
		
	$options[] = array(
		'desc' => 'Input the Link Text. Leave it blank for No Link', 
		'id' => 'serltext' . $sernumber,
		'std' => 'READ MORE',
		'type' => 'text',
		'class'	=> 'mini' );	
		
	}
	
	$options[] = array(
		'name' => 'Anthing Special You may want ?',
		'desc' => 'You can use HTML, JavaScript, CSS, ShortCode here. If you want to show an Image you can use <b>'. esc_html('<img src="http://domain.com/image.jpg" />') .'</b> this HTML Code replacing the Image URL. You can use any ShortCode of Plugin, too',
		'id' => 'bspecial',
		'std' => '<img src="'.get_template_directory_uri() . '/images/special.jpg'.'" />',
		'type' => 'editor',
		'settings' => $wp_editor_settingst );
		
	
	$options[] = array(
		'desc' => '<span class="featured-area-sub-title">Booking or Something</span>', 
		'type' => 'info');
		
		
	$options[] = array(
		'name' => 'Booking Heading', 
		'desc' => 'Set the Booking Heading', 
		'id' => 'booking-heading',
		'std' => 'Book Now!',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Booking Code',
		'desc' => 'You can use HTML, JavaScript, CSS, ShortCode here. If you want to show an Image you can use <b>'. esc_html('<img src="http://domain.com/image.jpg" />') .'</b> this HTML Code replacing the Image URL. You can use any ShortCode of Plugin for Booking System. We have used the ShortCode of <a href="https://wordpress.org/plugins/booking/" target="_blank"><b>This Plugin</b></a> in our Demo. Someone may be interested on <a href="https://wordpress.org/plugins/easyreservations/" target="_blank"> easyReservation</a>, too which is shown in the Right Sidebar of our Demo', 
		'id' => 'booking-content',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
	
	$options[] = array(
		'name' => 'Alternative Image if No Code',
		'desc' => 'You can show an Image in this Space in case you do not have any Booking Plugin Installed or do not have any Code/ShortCode',
		'id' => 'booking-image',
		'std' => get_template_directory_uri() . '/images/booking.jpg',
		'type' => 'upload');
		 */
		
// Front Page Extra
	/* $options[] = array(
		'name' => 'Front Page Extra', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Open Box Area in Front Page', 
		'desc' => 'You can input anything here like HTML, Java Script, ShortCode etc. to show any Extra Items in Front Page. You should style them properly. <a href="https://wordpress.org/plugins/shortcodes-ultimate" target="_blank">This Plugin</a> may be useful for generating various ShortCodes', 
		'type' => 'info' );
		
	$options[] = array(
		'id' => 'fpextrab',
		'std' => '<img src="'.get_template_directory_uri() . '/images/extra.jpg" width="100%" />',
		'type' => 'editor',
		'settings' => $wp_editor_settings ); */

	
// Front Gallery Boxes
	$options[] = array(
		'name' => 'Gallery', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Gallery Boxes',
		'desc' => 'Uncheck this if you do not want to show the Gallery Boxes', 
		'id' => 'gallerybox',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		

	$options[] = array(
		'name' => 'Gallery Boxes Heading', 
		'desc' => 'Set the Gallery Boxes Heading', 
		'id' => 'galleryboxes-heading',
		'std' => 'OUR GALLERY',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Gallery Boxes Heading Description', 
		'desc' => 'Set the Gallery Boxes Heading description', 
		'id' => 'galleryboxes-heading-des',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
		'type' => 'textarea');
		
	
	$options[] = array(
		'name' => 'Number of List Categories', 
		'desc' => 'Set the Number of List Categories', 
		'id' => 'gallerylist-number',
		'std' => '7',
		'type' => 'text',
		'class' => 'mini');
		
// Front Destination Box
	$options[] = array(
		'name' => 'Destination Box', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Destination Box',
		'desc' => 'Uncheck this if you do not want to show the Contact Box', 
		'id' => 'destinationbox',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Background Color and/or Image',
		'desc' => 'Set the Background Color if you want. Default is <b>#09A0E7</b>', 
		'id' => 'destinationbox-color',
		'std' => '#09A0E7',
		'type' => 'color' );
		
	$options[] = array(
		'desc' => 'Set the Background Image. Recommended Size 1600px X 700px but you should use as per your Box Size', 
		'id' => 'destinationbox-image',
		'std' => get_template_directory_uri() . '/images/contact.jpg',
		'type' => 'upload' );	
		
	$options[] = array(
		'name' => 'Destination Box Heading', 
		'desc' => 'Set the Destination Box Heading', 
		'id' => 'destinationbox-heading',
		'std' => 'GET IN TOUCH',
		'type' => 'text');

	$options[] = array(
		'name' => 'Destination Box Link',
		'desc' => 'Input your Destination Items Box Link here.',
		'id' => 'destinationbox-item-link',
		'std' => '#',
		'type' => 'text');	
	
	
// Front Contact Box
	$options[] = array(
		'name' => 'Contact Box', 
		'type' => 'heading');
		
	$options[] = array(
		'name' => 'Show The Contact Box',
		'desc' => 'Uncheck this if you do not want to show the Contact Box', 
		'id' => 'contactbox',
		'std' => '1',
		'capt' => array( '0' => 'NO', '1' => 'YES'),
		'type' => 'switch' );
		
	$options[] = array(
		'name' => 'Background Color and/or Image',
		'desc' => 'Set the Background Color if you want. Default is <b>#09A0E7</b>', 
		'id' => 'contactbox-color',
		'std' => '#09A0E7',
		'type' => 'color' );
		
	$options[] = array(
		'desc' => 'Set the Background Image. Recommended Size 1600px X 700px but you should use as per your Box Size', 
		'id' => 'contactbox-image',
		'std' => get_template_directory_uri() . '/images/contact.jpg',
		'type' => 'upload' );	
		
	$options[] = array(
		'name' => 'Contact Box Heading', 
		'desc' => 'Set the Contact Box Heading', 
		'id' => 'contactbox-heading',
		'std' => 'GET IN TOUCH',
		'type' => 'text');

	$options[] = array(
		'name' => 'Contact Items Box Link',
		'desc' => 'Input your Contact Items Box Link here.',
		'id' => 'contactbox-item-link',
		'std' => '#',
		'type' => 'text');
		
	
	// Front Main Content
	$options[] = array(
		'name' => 'Main Content',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Main Content Sub Heading', 
		'desc' => 'Set the Main Content Sub Heading', 
		'id' => 'maincontent-sub-heading',
		'std' => 'Discover',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Main Content Heading', 
		'desc' => 'Set the Main Content Heading', 
		'id' => 'maincontent-heading',
		'std' => 'Cute Sri Lanka',
		'type' => 'text');
		
	$options[] = array(
		'name' => 'Main Content Description', 
		'desc' => 'Set the Main Content Description', 
		'id' => 'maincontent-description',
		'std' => 'Lorem Ipsum',
		'type' => 'text');

	$options[] = array(
		'name' => 'Main Content Link', 
		'desc' => 'Input the Link URL. Leave it blank for No Link', 
		'id' => 'maincontent-more-link',
		'std' => '#',
		'type' => 'text' );	
		
	$options[] = array(
		'name' => 'Main Content Link Text', 
		'desc' => 'Input the Link Text. Leave it blank for No Link', 
		'id' => 'maincontent-more-text',
		'std' => 'Learn More',
		'type' => 'text',
		'class'	=> 'mini' );
	
	$options[] = array(
		'name' => 'Main Content Image',
		'desc' => 'Set the Main Content Image',
		'id' => 'main-content-image',
		'std' => get_template_directory_uri() . 'assets/images/main-content-image.png',
		'type' => 'upload');

	
	// Destination Page

	$options[] = array(
		'name' => 'Destination Overview',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Destination Title', 
		'desc' => 'Set the Destination Title', 
		'id' => 'des-main-title',
		'std' => 'Title',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Destination Intro', 
		'desc' => 'Set the Destination Intro', 
		'id' => 'des-intro',
		'std' => 'Intro',
		'type' => 'text');

	// Destination Overview Boxes

	$options[] = array(
		'name' => 'Destination Districts',
		'type' => 'heading');

	$options[] = array(
		'name' => 'Destination List Title', 
		'desc' => 'Set the Destination List Title', 
		'id' => 'des-list-title',
		'std' => 'The Wonderland',
		'type' => 'text');

	$options[] = array(
		'name' => 'District Names (, seperated)', 
		'desc' => 'Set the Destination Names', 
		'id' => 'des-districts',
		'std' => 'distric1,distric2',
		'type' => 'text');


	$desDistricts = explode(',',of_get_option('des-districts', 'district1,district2'));
	foreach ($desDistricts as $desDistrict) {
		$districtName = $desDistrict;
		$desDistrict = str_replace(' ', '-', strtolower($desDistrict));
	$options[] = array(
		'name' => 'Box Title - '.$desDistrict, 
		'desc' => 'Set the Box Title - '.$desDistrict, 
		'id' => 'des-box-title-'.$desDistrict,
		'std' => $districtName,
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Box Intro - '.$desDistrict, 
		'desc' => 'Set the Box Intro - '.$desDistrict, 
		'id' => 'des-box-intro-'.$desDistrict,
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta.',
		'type' => 'text');
	
	$options[] = array(
		'name' => 'Box Image - '.$desDistrict,
		'desc' => 'Set the Box Image - '.$desDistrict,
		'id' => 'des-box-image-'.$desDistrict,
		'std' => get_template_directory_uri() . '/assets/images/districts/'.$desDistrict.'.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Box Link - '.$desDistrict, 
		'desc' => 'Set the Box Link - '.$desDistrict, 
		'id' => 'des-box-link-'.$desDistrict,
		'std' => '/districts/'.$desDistrict,
		'type' => 'text',
		'class'	=> 'mini' );

	}
	$numofDistricts = count($desDistricts);
	$y = 1;
	for ($x = 6; $x < $numofDistricts; $x+=6) {
		$options[] = array(
			'name' => 'Full width Image - '.$y,
			'desc' => 'Set the Full width Image '.$y,
			'id' => 'full-width-image-'.$y,
			'std' => get_template_directory_uri() . '/assets/images/districts/full-width-'.$y.'.jpg',
			'type' => 'upload');
		$y++;
	}

	//$desDistricts = explode(',',of_get_option('des-cities', 'city1,city2'));
	$tempcitiesArray = array();
	$tempcitiesArray['default'] = 'Select City';
	foreach ($desDistricts as $desDistrict) {
		$districtName = $desDistrict;
		$districtId = str_replace(' ', '-', strtolower($desDistrict));

		$options[] = array(
			'name' => $desDistrict.' District Cities',
			'type' => 'heading');
	
		$options[] = array(
			'name' => $desDistrict.' District Title', 
			'desc' => 'Set the '.$desDistrict.' District Title', 
			'id' => $districtId.'-district-title',
			'std' => $districtName,
			'type' => 'text');
		
		$options[] = array(
			'name' => $desDistrict.' District Intro', 
			'desc' => 'Set the '.$desDistrict.' District Intro', 
			'id' => $districtId.'-district-intro',
			'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta.',
			'type' => 'text');
	
		$options[] = array(
			'name' => $desDistrict.' Distric City Names (, seperated)', 
			'desc' => 'Set the '.$desDistrict.' District City Names',
			'id' => $districtId.'-district-cities',
			'std' => 'city1,city2',
			'type' => 'text');


			$disCities = explode(',',of_get_option($districtId.'-district-cities', 'city1,city2'));
			foreach ($disCities as $disCity) {
				$cityName = $disCity;
				$disCity = str_replace(' ', '-', strtolower($disCity));

				$tempcitiesArray[$disCity] = $cityName;
			$options[] = array(
				'name' => 'City Box Title - '.$disCity, 
				'desc' => 'Set the City Box Title - '.$disCity, 
				'id' => 'city-box-title-'.$disCity,
				'std' => $cityName,
				'type' => 'text');
			
			$options[] = array(
				'name' => 'City Box Intro - '.$disCity, 
				'desc' => 'Set the City  Box Intro - '.$disCity, 
				'id' => 'city-box-intro-'.$disCity,
				'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta.',
				'type' => 'text');
			
			$options[] = array(
				'name' => 'City Box Image - '.$disCity,
				'desc' => 'Set the City Box Image - '.$disCity,
				'id' => 'city-box-image-'.$disCity,
				'std' => get_template_directory_uri() . '/assets/images/districts/cities/'.$disCity.'.jpg',
				'type' => 'upload');
		
			$options[] = array(
				'name' => 'City Box Link - '.$disCity, 
				'desc' => 'Set the City Box Link - '.$disCity, 
				'id' => 'city-box-link-'.$disCity,
				'std' => '/destinations/'.$disCity,
				'type' => 'text',
				'class'	=> 'mini' );
		
			}

	}



	// Destination Details Attractions (accordions)

	$options[] = array(
		'name' => 'Attraction Categories',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Attraction Category Names', 
		'desc' => 'Set the Attraction Category Names', 
		'id' => 'attractions-categories',
		'std' => 'cat1,cat2,',
		'type' => 'text');

	
		$attractCats = explode(',',of_get_option('attractions-categories', 'cat1,cat2'));
		
		foreach ($attractCats as $attractCat) {
			$catName = $attractCat;
			$attractCat = str_replace(' ', '-', strtolower($attractCat));
			
			
			$options[] = array(
				'name' => $catName.' Icon', 
				'desc' => 'Set the'.$catName.' Icon', 
				'id' => $attractCat.'-icon',
				'std' => get_template_directory_uri() . '/assets/images/destinations/'.$attractCat.'.png',
				'type' => 'upload');

		}

	
	$options[] = array(
		'name' => 'Attraction Points',
		'type' => 'heading');
	
	$options[] = array(
		'name' => 'Attraction Point Names', 
		'desc' => 'Set the Attraction Point Names', 
		'id' => 'attractions-points',
		'std' => 'point1,point2',
		'type' => 'text');

	
		$attractPoints = explode(',',of_get_option('attractions-points', 'point1,point2'));
		
		foreach ($attractPoints as $attractPoint) {
			$pointName = $attractPoint;
			$attractPoint = str_replace(' ', '-', strtolower($attractPoint));
			
			$options[] = array(
				'name' => $pointName, 
				'desc' => 'Set the '.$pointName, 
				'id' => $attractPoint.'-attraction',
				'std' => $pointName,
				'type' => 'text');

				$catArray = array();
				$catArray['default'] = 'Select Category';
				foreach ($attractCats as $attractCat) {
					$catName = $attractCat;
					$attractCat = str_replace(' ', '-', strtolower($attractCat));
					$catArray[$attractCat] = $catName;
				}
				$options[] = array(
					'name' => $pointName.' Category', 
					'desc' => 'Set the '.$pointName.' Category', 
					'id' => $attractPoint.'-attraction-category',
					'std' => 'category',
					'type' => 'select',
					'options' => $catArray
					);

				$options[] = array(
					'name' => $pointName.' City', 
					'desc' => 'Set the '.$pointName.' City', 
					'id' => $attractPoint.'-attraction-city',
					'std' => 'City',
					'type' => 'select',
					'options' => $tempcitiesArray
					);
		
				
				
			
			$options[] = array(
				'name' => $pointName.' Intro', 
				'desc' => 'Set the '.$pointName.' Intro', 
				'id' => $attractPoint.'-attraction-intro',
				'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta. Nullam consectetur mattis ultrices.',
				'type' => 'text');
			
			$options[] = array(
				'name' => $pointName.' Telephone', 
				'desc' => 'Set the '.$pointName.' Telephone', 
				'id' => $attractPoint.'-attraction-tel',
				'std' => '0112546789',
				'type' => 'text');

			$options[] = array(
				'name' => $pointName.' View Link', 
				'desc' => 'Set the '.$pointName.' View Link', 
				'id' => $attractPoint.'-attraction-view-link',
				'std' => '/destinations/'.$attractPoint,
				'type' => 'text',
				'class'	=> 'mini' );

			$options[] = array(
				'name' => $pointName.' Image', 
				'desc' => 'Set the '.$pointName.' Image', 
				'id' => $attractPoint.'-attraction-image',
				'std' => get_template_directory_uri() . '/assets/images/destinations/'.$attractPoint.'.jpg',
				'type' => 'upload');

		}


	return $options;
}