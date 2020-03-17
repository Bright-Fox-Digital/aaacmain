<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AAAC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('py-10'); ?>>
	<?php if(!is_front_page()){ ?>
	<header class="entry-header">
		<h1 class="font-display text-4xl font-bold text-lightgray text-center mb-10"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php } ?>
	
	<?php if(!is_front_page()) { aaac_post_thumbnail(); } ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aaac' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
