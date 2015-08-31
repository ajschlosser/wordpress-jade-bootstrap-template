<?php get_header(); ?>
<section role="main" class="entry"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
		<header class="header">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php the_title(); ?>
					</h1>
				</div>
			</div>
		</header>
		<section class="content"><?php if (is_page("")) { ?>
			<div class="some-container">
				<div class="row">
					<div class="col-lg-6"></div>
					<div class="col-lg-6"></div>
				</div>
			</div><?php } else { ?>
			<div class="article-container">
				<div class="row">
					<div class="col-lg-3 nav"><?php get_template_part("sidenav"); ?>
					</div>
					<div class="col-lg-3 art left-justify"><?php the_content(); ?>
					</div>
				</div>
			</div><?php } ?>
		</section>
	</article><?php endwhile; endif; ?>
</section><?php get_template_part(""); ?><?php get_sidebar(); ?><?php get_footer(); ?>