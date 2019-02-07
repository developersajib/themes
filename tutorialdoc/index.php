<?php get_header(); ?>




<nav id="toc" class="navigation">
    <ul class="wrapper">

	<?php
	$categories = get_categories( array(
		'orderby' => 'date',
		'order'   => 'DESC'
	) );
	$chap = 1;
	$cateNum=0;
	foreach($categories as $category) {
		echo '<li>';
		$cateNum++;
		echo '<a data-scroll href="#' .$category->slug.'_'. $category->term_id . '">Chapter '.$chap++.': ' . $category->name . '</a>';
				$title_query = new WP_Query( array( 'category_name' => $category->name, 'posts_per_page' => 5, 'orderby' => 'date',
				'order'   => 'ASC', ) );
				echo '<ul>';
				$num = 1;
				while ( $title_query->have_posts() ) {
					$title_query->the_post();
					echo '<li><a data-scroll href="#'.$post->post_name.'_'.get_the_ID().'">'.$cateNum.'.'.$num++.' ' . get_the_title() . '</a></li>';
				}
				echo '</ul>';
		echo '</li>';
	}
?>

    </ul>
</nav>

<div class="wrapper index">
<?php
	$categories = get_categories( array(
		'orderby' => 'date',
		'order'   => 'DESC'
	) );
	$chap = 1;
	$cateNum=0;
	foreach($categories as $category) {
?>
	<section id="<?php echo $category->slug.'_'. $category->term_id; ?>" class="chapter">
		<h2 class="chapter-title"><?php echo 'Chapter '.$chap++.': ' . $category->name; ?></h2>
<?php
	$content_query = new WP_Query( array( 'category_name' => $category->name, 'posts_per_page' => 5, 'orderby' => 'date',
				'order'   => 'ASC', ) );

			$num = 1;
			while ( $content_query->have_posts() ) {
				$content_query->the_post();

?>
		<article id="<?php echo $post->post_name.'_'.get_the_ID(); ?>" class="video">
				<h3 class="titulo"><?php echo $cateNum.'.'.$num++.' ' . get_the_title(); ?></h3>
				<div class=" language-php"><?php the_content(); ?></div>
		  </article>
			<?php } ?>
	</section>
	<?php } ?>
</div> <!--.wrapper-->
<?php get_footer(); ?>
