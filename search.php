<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package truss
 */

get_header(); ?>

	<div class="primary-content">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'truss' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'page-templates/partials/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php truss_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'page-templates/partials/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
