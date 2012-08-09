<?php

/**
 * Template Name: Forte50 Homepage
*/

/**
 * Description: Forte50 custom homepage
 * @since admired 1.0
 */



get_header(); ?>



		<div id="primary">

			<div id="content" role="main">

      <div id="featured_home_image">
        <article style="padding:0;">
        <h1 style="font-size:0px;line-height:0px;display:none;visibility:hidden;">Leadership: When It's Needed Most</h1>
        <img src="/images/forte-home-featured-image.png" alt="Leadership When It's Needed Most" style="width:100%;"/>
        </article>
      </div>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop', 'page' ); ?>

        <?php endwhile; /* end of the loop. */ ?>

			</div><!-- #content -->

		</div><!-- #primary -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>