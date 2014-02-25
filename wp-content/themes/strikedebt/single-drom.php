<?php get_header(); ?>

  <div class="wrapper drom-chapter">
	<?php if (have_posts()) : while (have_posts()) : the_post(); 
	
       /* $toc = get_post_meta( get_the_ID(), 'Table of Contents', true);
	     
        if($toc) {
            echo '<aside class="left" class="toc">' . $toc . '</aside>';
        } */?>
        
        <div id="drom-toc">
        	<p>Placeholder for TOC!</p>
        	<?php wp_nav_menu( array( 'theme_location' => 'drom-toc' ) ); ?>
		</div>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
			<?php 
    	     $by = get_post_meta( get_the_ID(), 'By', true);
    	     
    	     if(! empty($by)) {
			     echo '<p class="by">By ' . $by . '</p>';
      	     } ?>

			<div class="entry-content">
			
		    <?php edit_post_link(__('Edit','mytheme'), '', ''); ?> 
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<!--<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>-->

			</div>
			
		</article>

	<?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>