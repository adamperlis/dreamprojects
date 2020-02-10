<?php
add_action('acf/save_post', 'dreamprojects_new_project_send_email');

function dreamprojects_new_project_send_email( $post_id ) {

	if( get_post_type($post_id) !== 'new-project-nominee' && get_post_status($post_id) == 'publish' ) {
		return;
	}

	if( is_admin() ) {
		return;
	}

	$post_title = get_the_title( $post_id );
	$post_url 	= get_permalink( $post_id );
	$subject 	= "A Project Has Been Added to Dream Projects";
	$message 	= "See the link below:";
	$message   .= $post_title . ": " . $post_url;

	$administrators 	= get_users(array(
		'role'	=> 'administrator'
	));

	foreach ($administrators as &$administrator) {
		wp_mail( $administrator->data->user_email, $subject, $message );
	}

}
