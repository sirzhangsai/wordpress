<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        浏览：<?php post_views(' ', ' 次'); ?>
        <?php twentysixteen_entry_meta(); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */

        $content .= '<span class="embed-card">

<span class="embed-card-img">
<a target="_blank" href="' . get_permalink() . '"></a>
</span>
<span class="embed-card-info">
<a target="_blank" href="' . get_permalink() . '">
<span class="card-name">'. get_the_title() . '</span>
</a>
<span class="card-abstract">'.wp_trim_words( get_the_excerpt(), 100, '...' ).'</span>
<span class="card-controls">
<span class="group-data"> <i>时间:</i>'. get_the_time('Y/n/j') .'</span>

<span class="group-data"> <i>评论:</i>'. get_comments_number() .'</span>
<a target="_blank" href="' . get_permalink() . '"><span class="card-btn-deep">阅读全文</span></a>
</span>
</span>
</span>';
        echo $content;
        /*the_content(
                        sprintf(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                            get_the_title()
                        )
                    );*/
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
