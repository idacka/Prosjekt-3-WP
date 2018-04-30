<?php
/**
* The template for displaying all single posts and attachements
*
* @package Wordpress
* @subpackage Kahuna
* @since Kahuna 1.0
*/

get_header(); ?>

<div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
         <?php
         // Start the loop
         while ( have_posts() ) : the_post();
         ?>
<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
  <header class="entry-header">
    <h2> Dette er visning av kurs hos Diabetesklinkken1 </h2>
    <?php the_title('<h1 class="enrty-title">','</h1>'); ?>
  </header><!--.entry-header-->

  <?php kahuna_excerpt(); ?>
  <?php kahuna_post_thumbnail(); ?>

  <div class="entry-content">
      <?php
        the_content();

        wp_link_pages( array(
          'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'kahuna' ). '</span'>,
           'after' => '</div>',
           'link_before' => '<span>',
           'link_after' => '</span>',
           'pagelink'  => '<span class="screen-reader-text">' . __('Page','kahuna') . '</span>%',
           'separator' => '<span class="screen-reader-text">, </span>',
        )  );

        if ( '' !== get_the_author_meta('description')){
             get_template_part('template-parts/biography');
           }

           ?>
</div><!--.entry-content -->

<footer class="entry-footer">
      <?php kahuna_entry_meta(); ?>
      <?php
          edit_post_link(
            sprintf(
              /*translators %s: Name of current post */
              __('Edit<span class="screen-reader-text"> "%s"</span>', 'kahuna'),
                get_the_title()
              ),
              '<span class="edit-link">',
              '</span>'
            );
        ?>
</footer><!--.entry.footer -->
</article><!--#post## -->

<?php
//End of  the loop.
endwhile;


?>
</main><!--.site-main-->
<?php get_sidebar('content-bottom'); ?>
</div><!--.content-area-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
