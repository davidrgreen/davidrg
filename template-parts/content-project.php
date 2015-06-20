<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header>

	<div class="entry-content clearfix">
	<div class="text-center">
		<?php
		$subtitle = esc_html( get_post_meta( get_the_ID(), '_davidrg_project_summary', true ) );
		$skills = esc_html( get_post_meta( get_the_ID(), '_davidrg_project_skills', true ) );
		$purl = esc_html( get_post_meta( get_the_ID(), '_davidrg_project_url', true ) );
		?>
		<?php if ( $subtitle ) { ?>
		<h2 class="entry-subtitle">
			<?php echo $subtitle; ?>
			<?php if ( $skills ) { ?>
			<span class="entry-tags"><?php echo $skills; ?></span>
			<?php } ?>
		</h2>
		<?php } ?>
	</div>
		<?php the_content(); ?>

		<div class="text-center">
			<?php
			if ( $purl ) {
				echo '<p><a href="' , $purl , '" target="_blank">View the ' , get_the_title() , ' website</a> (<i>opens in a new tab</i>)</p>';
			}
			?>
			Or <a href="<?php echo home_url( '/' ); ?>#portfolio">return to the portfolio</a>
			<h3 class="text-center diamond-headline">Or <a href="<?php echo home_url( '/' ); ?>contact">contact me about working together</a></h3>
		</div>
	</div>
</article>
