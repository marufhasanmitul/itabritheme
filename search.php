<?php 
//Heading part call
get_header() ;



?>
		<div class="content_wrapper">
			<div class="left_content">
				<?php 
					if( have_posts() ) : ?>
                    <h2>Search for : "<?php the_search_query( );?>"</h2>
                        

						<?php while( have_posts() ): the_post(); ?>
							<?php get_template_part('content')?>
						<?php endwhile;
					else:
						echo "Post Not found";
					endif;
				
				
				?>

<?php if (function_exists("pagination")) {    pagination(); } ?>
				
				
				
				
			</div>
			<?php get_sidebar( ); ?>
			<br class="clear" />
		</div>

<!--Before footer widhget-->
<?php get_template_part('befor_widget'); ?>






<?php get_footer();?>