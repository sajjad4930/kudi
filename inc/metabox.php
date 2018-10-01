<?php

/*
 Meta box 

*/


/**
 * Register meta boxes.
 */

function hcf_register_meta_boxes() {
	add_meta_box( 'hcf-1', __( 'Atutor Information', 'hcf' ), 'hcf_display_callback', 'testimonial' );
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

/**
* Meta box display callback.
*
* @param WP_Post $post Current post object.
*/
function hcf_display_callback( $post ) {
	?>

	<div class="hcf_box">
	<style scoped>
			.hcf_box{
					display: grid;
					grid-template-columns: max-content 1fr;
					grid-row-gap: 10px;
					grid-column-gap: 20px;
			}
			.hcf_field{
					display: contents;
			}
	</style>
	<p class="meta-options hcf_field">
			<label for="hcf_author">Author designation</label>
			<input id="hcf_author" type="text" name="hcf_author" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>">
	</p>
  <p class="meta-options hcf_field">
			<label for="hcf_des">Author des</label>
			<input id="hcf_des" type="text" name="hcf_des" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_des', true ) ); ?>">
	</p>

</div>

<?php  

}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hcf_save_meta_box( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( $parent_id = wp_is_post_revision( $post_id ) ) {
			$post_id = $parent_id;
	}
	$fields = [
			'hcf_author',
			'hcf_des',

	];
	foreach ( $fields as $field ) {
			if ( array_key_exists( $field, $_POST ) ) {
					update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
			}
	 }
}
add_action( 'save_post', 'hcf_save_meta_box' );