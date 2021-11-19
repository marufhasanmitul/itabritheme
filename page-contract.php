<?php 
//Heading part call
get_header() ;



?>
		<div class="content_wrapper">
			<div class="left_content">
				<?php 
					if( have_posts() ) :
						while( have_posts() ): the_post(); ?>
							<article> 
								<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h2>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical </p>
								<div class="feature-image"> 
									<?php the_post_thumbnail();?>
								</div>
								
								<p><?php the_content();?></p>
							</article>
						<?php endwhile;
					else:
						echo "Post Not found";
					endif;
				
				
				?>
				
			</div>
			<?php get_sidebar( ); ?>
			<br class="clear" />
		</div>






<?php get_footer();?>