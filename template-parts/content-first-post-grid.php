<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package void
 */
global $count,$col_no,$col_width,$post_count;


?>
	<?php 
		if( $count == 1){
			$count = 2;
			$col_width = 12;
		}
	?>
	
	<div class="col-md-<?php echo esc_attr( $col_width );?>">
		<header class="entry-header">	
			<?php		
				if( has_post_thumbnail()) : ?>
				<div class="post-img">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php
						the_post_thumbnail('full',array(
								'class' => 'img-responsive',
								'alt'	=> get_the_title( get_post_thumbnail_id() )
								)
						);

					?>	
					</a>				
				</div><!--.post-img-->
			<?php endif; ?>
			<div class="post-info"> 
				<?php		
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>				
				<?php
					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">

							<?php 
								void_posted_on();
								void_entry_header();
							?>

						</div><!-- .entry-meta -->
						<div class="blog-excerpt">
							<?php the_excerpt(); ?>
						</div><!--.blog-excerpt-->				
				<?php endif; ?>
			</div><!--.post-info-->			
		</header><!-- .entry-header -->
	</div><!--.col-md-?-->

	<?php 
	
	$col_width = 6; $col_no = 2; 
		$last_post = false;
		if( !empty($post_count) ){
			if(  $post_count == $count - 1 ){
				$last_post = true;				
			}
		}		
	?>
		<?php	if( $count%$col_no == 0 || $last_post ) : ?>
			</div><div class="row">
			

		<?php endif; ?>	
