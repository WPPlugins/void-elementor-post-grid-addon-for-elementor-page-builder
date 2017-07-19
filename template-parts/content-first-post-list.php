<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package void
 */
global $count;
?>
	

	<header class="entry-header">
		<div class="post-img">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php
					if( $count == 1 && has_post_thumbnail() ) :
						the_post_thumbnail('full',array(
								'class' => 'img-responsive',
								'alt'	=> get_the_title( get_post_thumbnail_id() )
							)
						);
					elseif( has_post_thumbnail()) :
						the_post_thumbnail('blog-list-post-size',array(
								'class' => 'img-responsive',
								'alt'	=> get_the_title( get_post_thumbnail_id() )
							)
						);
					endif;
			 	?>
			</a>	
		</div>
		<div class="post-info"> 
			<?php		
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				
				<?php
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">

						<?php						
							void_entry_header();
						?>

					</div><!-- .entry-meta -->
					<?php the_excerpt(); ?>
			<?php endif; ?>
		</div><!--.post-info-->		
	</header><!-- .entry-header -->
<div class="clearfix"></div>

