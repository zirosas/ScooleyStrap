<?php get_header() ?>
				
			<div class="slider">
				<img src="<?php bloginfo('template_directory'); ?>/img/slider.png" alt="">
			</div>
		</div>
	</div>

	<div class="container-narrow">
		<div class="row">
			<div class="span8">
				<?php if (have_posts()) :  ?>
					<?php	while (have_posts()) : ?>
						<?php	the_post(); ?>
						<div class="news">
							<div class="newsdate">
								<div class="month darkblue text-center"><small><?php the_time('jS'); ?></small></div>
								<div class="year darkblue text-center"><small><?php the_time('F'); ?></small></div>
							</div>
							<div class="newstitle">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
						<p>
							<?php the_excerpt(); ?>	
						</p>
						<div class="newsbottom">
							<a href="<?php the_permalink(); ?>" class="btn btn-primary pull-left">Read more &raquo;</a>
							<div class="label label-info pull-right">
								<?php the_category(','); ?>
							</div>
						</div>
						<hr class="style-double">
					<?php  endwhile; ?>
				<?php  endif; ?>
			</div>

			<div class="span4">
			<?php get_sidebar(); ?>
			</div>		
			
		</div>
			
		<div class="registerad">
			<div class="row">
				<div class="span9">
					<div class="catch">Join our collage today, and get the perfect education !</div>
					<p>Style and content changes for simple variations on a standard blockquote.</p>
				</div>
				<div class="span3">
					<div class="vmid">
					 	<button class="btn btn-large btn-primary" type="button">Register Today</button>
					</div>
				</div>
			</div>
		</div>

		<hr class="style-double">
	
	</div>
		
<?php get_footer() ?>