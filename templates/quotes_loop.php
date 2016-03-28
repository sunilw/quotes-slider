<?php
$args = array(
    'post_type' => 'cll-quote',
    'orderby'      => 'menu_order',
    'order'           => 'ASC',
    'posts_per_page' =>  -1
) ;
$my_query = new WP_Query($args) ;

?>
<?php if ($my_query->have_posts()) : ?>
    <section id="cll-quotes" class="swiper-container">
	<div class="swiper-wrapper">
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    <article class="quote swiper-slide">
		<div>
		<?php the_content()  ?>
		</div>
	    </article>
	<?php endwhile; ?>
	</div>
    </section> <!-- ENDS #...  -->
<?php endif; ?>
<?php return ;  ?>
