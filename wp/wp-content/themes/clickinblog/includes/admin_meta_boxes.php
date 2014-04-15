<?php 

/* =This functions setups Meta options for the Deafault page template
**************************************************************/
add_action('admin_init','page_meta_init');
function page_meta_init()
{
	add_meta_box('featured_video', 'Featured Video', 'featured_video', 'post', 'side', 'low');

	add_action('save_post',	'theme_meta_save');
}

function featured_video(){
	global $post;
	$videoCode = get_post_meta($post->ID,'videoCode',TRUE);

	?>
	<p><strong>Enter Video Embedd code</strong></p>
  <p><textarea placeholder="Iframe Embed code." name="videoCode" style="width:100%; height:80px" ><?php if(!empty($videoCode)) { echo $videoCode; } ?></textarea></p>
  <p><small>Ex: &lt;iframe width=&quot;853&quot; height=&quot;480&quot; src=&quot;//www.youtube.com/embed/Vjty080jy60?list=PLpKm8dlPCoewpWEVy16oTxElkvyspa4lz&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;</small></p>
  
	<?php 
	// create a custom nonce for submit verification later
	echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
}


  
function theme_meta_save($post_id) 
{
	// making sure that data is coming from our meta box
	if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;

	// checking user permissions
	if ($_POST['post_type'] == 'page') {
			if (!current_user_can('edit_page', $post_id)) 
				return $post_id;
	} else {
			if (!current_user_can('edit_post', $post_id)) 
				return $post_id;
	}
	$current_data = array();
	
    
    $posted_data = $_POST;
    
	// authentication passed, now saving the data
    foreach($posted_data as $key => $data) {
        $current_data .= get_post_meta($post_id, $key, TRUE);
        
			if (isset($data)) {
				delete_post_meta($post_id,$key);
			}	else {
				update_post_meta($post_id,$key,$data);
			}
        
      add_post_meta($post_id,$key,$data,TRUE);
    }	 


	return $post_id;
}
?>
