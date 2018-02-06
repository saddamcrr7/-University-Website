<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fictional
 */
get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Events</h1>
      <div class="page-banner__intro">
        <p>See all Latest Events</p>
      </div>
    </div>  
 </div> <!--./page-banner -->

<div class="container container--narrow page-section">
  <?php while( have_posts() ) { ?>
  <?php the_post(); ?>
    <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Mar</span>
            <span class="event-summary__day">25</span>  
        </a>
        <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words( get_the_content(), 10); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
        </div>
    </div><!--/.event-summary--> 

<?php } 

?>
<?php echo paginate_links(); ?>
</div> <!--/.container container--narrow page-section--> 
 <?php get_footer(); ?> 