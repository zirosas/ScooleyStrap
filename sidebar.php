<div class="category">
	<div class="sidetitle">Categories</div>
	<ul>
	<?php 
		$categories = get_categories();
		foreach($categories as $category) { ?>
			<li>	
				<img src="<?php bloginfo('template_directory'); ?>/img/penciles.jpg" alt="">
				<?php echo '<a href="' .get_category_link($category->term_id ). '">'.$category->name. ' ('.$category->count.')
				</a>
			</li>';
		}
	?>
	</ul>
</div>



<div id="authorlist">
	<div class="sidetitle">Authors</div>
	<ul>
		<?php contributors(); ?>
	</ul>
</div>