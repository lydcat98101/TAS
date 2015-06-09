<?php
/*
    Template TAS: Front Page
*/
?>
<?php get_header(); ?>

		
    		<!-- start front-page slider -->
    <div id="slider-home">
<?php
		display_metaslider_by_slug(); //functions.php
	?>
    </div>
    		<!-- end front-page slider -->        
<!-- start content -->
	<div class="content-area">		
  	<p>
  		TAS 
             
                SEO keyword rich summary goes

here. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac

turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.

Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
  	
  	 <!-- start posts -->            
            	
	<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(''); ?>
	<?php endwhile; endif; ?>-->
	<!-- end this loop -->
  
      
	<!-- start second loop show latest 3 posts-->
	<?php rewind_posts(); //stop the first loop ?>
	<?php query_posts('showposts=3'); //show latest 3 posts ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="article-post">

             <h2 id="post-<?php the_ID(); ?>" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
             </h2>

             <?php the_excerpt(); ?><a href="<?php the_permalink() ?>">Read More &raquo;</a> 
             <p><small>Posted by <?php the_author(); ?> in <?php the_category(', ') ?></small></p>
	</article>
	
	
	<?php endwhile; ?>
        <?php endif; ?>
        <!-- end posts -->
        <?php wp_link_pages(); ?>
       
             
    </div>

  
    <?php get_sidebar(); ?>
    
    

<?php get_footer(); ?>
