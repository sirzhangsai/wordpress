<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        $content = '';
			/* translators: %s: Name of current post */
        $content .= '<span class="embed-card">
                            <span class="embed-card-img">
                            <a target="_blank" href="' . get_permalink() . '">'.get_content_first_img().'</a>
                            </span>
             <span class="embed-card-info">
                        <a target="_blank" href="' . get_permalink() . '">
                        <span class="card-name">'. get_the_title() . '</span>
                        </a>
                        <span class="card-abstract">'.wp_trim_words( get_the_excerpt(), 100, '...' ).'</span>
                 <span class="card-controls">
                        <span class="group-data"> <i> time:</i>'. get_the_time('Y/n/j') .'</span>
                        <span class="group-data"> <i> read:</i>'. post_views(false, false, '', false) .'</span>
                        <span class="group-data"> <i>comment:</i>'. get_comments_number() .'</span>
                        <a target="_blank" href="' . get_permalink() . '"><span class="card-btn-deep">阅读全文</span></a>
                </span>
         </span>
</span>
<link rel="stylesheet" href="'. get_template_directory_uri() .'/css/embed-card.css"/>';
        echo $content;
       /* the_content(
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
</div><!-- #post-<?php the_ID(); ?> -->
