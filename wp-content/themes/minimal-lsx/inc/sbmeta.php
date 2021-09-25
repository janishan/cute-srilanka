<?php
/*
	Travel Theme's Meta Options
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/

$npvl_settings = array(
	'textarea_rows' => 3,
	'wpautop' => false,		
	'teeny' => true,
	'tinymce' => false,
	'quicktags' => false,
	'media_buttons' => false	
);	


$prefix = 'sb_';
$meta_box = array(
    'id' => 'sb-meta-box',
    'title' => 'Travel Theme Options',
    'page' => array('post', 'page'),
	'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Show in Slides',
            'id' => $prefix . 'ss',
            'type' => 'checkbox'
        ),
		
		array(
            'name' => 'Show in Front Page',
            'id' => $prefix . 'fp',
			'ptype' => 'post',
            'type' => 'checkbox'
        ),
		
		array(
            'name' => 'Post Layout',
            'id' => $prefix . 'pl',
			'ptype' => 'post',
            'type' => 'radio',
            'options' => array(
                array('name' => 'Normal Layout as per the Theme Settings', 'value' => 'normal'),
                array('name' => 'Full Width Layout', 'value' => 'fullwidth')
            )
        ),
		
		array(
            'name' => 'Custom Styling for This Page/Post',
            'desc' => 'You can insert any Custom Code Here like CSS, JavaScript, HTML, Embed Code etc. It is better to use CSS here. Some of you may want to show the Background Image different Per Page/Post basis. Please find <a href="'.esc_url('http://d5creation.com/forums/topic/travel-theme-background-and-separate-background-for-each-page').'" target="_blank">This Tutorial</a> for more Information.',
            'id' => $prefix . 'ppstyle',
            'type' => 'editor',
			'ptype' => array('post', 'page'),
            'std' => '',
			'settings' => $npvl_settings
        )
    )
);

add_action('admin_menu', 'travel_add_box');
// Add meta box
function travel_add_box() {
    global $meta_box;
    add_meta_box($meta_box['id'], $meta_box['title'], 'travel_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function travel_show_box() {
    global $meta_box, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="travel_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box['fields'] as $field) {
		
		if ( isset( $field['ptype'] )): if  ( is_array($field['ptype'])): if ( !in_array( get_post_type(), $field['ptype'] )): continue; endif; else: if ( get_post_type() !=  $field['ptype']) : continue;  endif; endif; endif;
		
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
                '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
			case 'editor':
                $d5textarea_name = $field['id'];
				$d5d_editor_settings = array( 'textarea_name' => $d5textarea_name );
				$d5editor_settings = array(); if ( isset( $field['settings'] ) ) { $d5editor_settings = $field['settings']; }
				$d5editor_settings = array_merge( $d5d_editor_settings, $d5editor_settings );
				$d5vall = $meta ? $meta : $field['std'];
				wp_editor( $d5vall, $field['id'], $d5editor_settings );
				echo $field['desc'];
                break;
			case 'readonlytext':
                echo '<input readonly type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
			case 'radio':
                foreach ($field['options'] as $option) {
                    echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'] . '<br />';
                }
                break;
            case 'checkbox':
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="unchecked"' : '', ' />';
                break;			
				
        }
        echo     '</td><td>',
            '</td></tr>';
    }
    echo '</table>';
}


add_action('save_post', 'travel_save_data');
// Save data from meta box
function travel_save_data($post_id) {
    global $meta_box;
    // verify nonce
	if(isset($_POST['travel_meta_box_nonce'])):
    if (!wp_verify_nonce($_POST['travel_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
	endif;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
	if(isset($_POST['post_type'])):
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    endif;
	
	
	foreach($meta_box['fields'] as $field){
    if(isset($_POST[$field['id']])){
        // POST field sent - update
        $new = $_POST[$field['id']];
        update_post_meta($post_id, $field['id'], $new);

    } else {
        // POST field not sent - delete
        $old = get_post_meta($post_id, $field['id'], true);
        delete_post_meta($post_id, $field['id'], $old);
    }
}

}
?>