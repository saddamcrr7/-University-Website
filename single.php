<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fictional
 * @since 1.0
 */
get_header(); ?>

<?php while( have_posts() ) { ?>
<?php  the_post(); ?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
</div><!--/.page-banner--> 

<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
         <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link();  ?> on <?php the_time('F j, Y');  ?> in <?php echo get_the_category_list(', '); ?></span></p>
        
    </div><!--/.metabox metabox--position-up metabox--with-home-link--> 

    <div class="generic-conetnt">
        <?php the_content(); ?>
    </div><!--/.generic-content--> 

</div><!--/.container container--narrow page-section--> 
<?php } 
get_footer(); 
?>