<?php
/** Template name="contact-template" **/

get_header(); 

?>

<div id="main-content" class="main-content">
	<?php
		get_template_part( 'content/content.php' )
		$content = 'hello there dear reader'; 
		include( locate_template ( 'kahuna-child/page.php' ) );
	?>
</div> 


<?php get_footer(); ?>
