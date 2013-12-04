<?php
/**
 * Custom functions
 */

add_filter( 'comments_template', 'roots_custom_remove_comments' );
/**
 * Removes all public facing comment interfaces, that includes getting rid of "Comments are closed" messages.
 * Even if comments are turned on in Wordpress they will not be rendered anywhere.
 * @param $file path to current comments file
 */
function roots_custom_remove_comments( $file ) {
	return get_template_directory() . '/templates/comments-empty.php';
}