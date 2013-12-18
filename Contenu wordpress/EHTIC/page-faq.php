<?php
/*
Template Name: FAQ
*/
?>

<?php  get_header();?>

<!-- Contenu de la page -->	
<?php 

	$args = array(
			'post_type' => 'post',
			'order' => 'ASC'
			);

	$the_query = new WP_Query( $args );

	if( $the_query -> have_posts() ) {
		while( $the_query -> have_posts() ) {
			$the_query -> the_post();
			echo( '<h3>' . get_the_title() . '</h3>' );
			echo( the_content() );
		}
	} else {
		echo("Désolé, on a rien trouvé");
	}

	wp_reset_postdata();

?>
		
<?php get_footer(); ?>