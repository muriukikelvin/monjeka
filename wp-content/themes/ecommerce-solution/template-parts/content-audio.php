<?php
/**
 * The template part for displaying audio post
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod('ecommerce_solution_metafields_date', true) != '' || get_theme_mod('ecommerce_solution_metafields_author', true) != '' || get_theme_mod('ecommerce_solution_metafields_comment', true) != '' || get_theme_mod('ecommerce_solution_metafields_time', true) != '' &&  get_theme_mod('ecommerce_solution_display_post_date', true) != '' || get_theme_mod('ecommerce_solution_display_post_author', true) != '' || get_theme_mod('ecommerce_solution_display_post_comment', true) != ''){ ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'ecommerce_solution_metafields_date',true) != '' || get_theme_mod( 'ecommerce_solution_display_post_date',true) != '') { ?>
          <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_date_icon','far fa-calendar-alt')); ?>"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('ecommerce_solution_blog_post_meta_seperator') ); ?>
        <?php }?>
        <?php if( get_theme_mod( 'ecommerce_solution_metafields_author',true) != '' || get_theme_mod( 'ecommerce_solution_display_post_author',true) != '') { ?>
          <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_author_icon','fas fa-user')); ?>"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><?php echo esc_html( get_theme_mod('ecommerce_solution_blog_post_meta_seperator') ); ?>
        <?php }?>
        <?php if( get_theme_mod( 'ecommerce_solution_metafields_comment',true) != '' || get_theme_mod( 'ecommerce_solution_display_post_comment',true) != '') { ?>
          <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_comment_icon','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comment', 'ecommerce-solution'), __('0 Comments', 'ecommerce-solution'), __('% Comments', 'ecommerce-solution') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'ecommerce_solution_metafields_time',false) != '') { ?>
          <span class="entry-time"><i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_time_icon','fas fa-clock')); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <?php }?>
  <div class="box-image">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <div class="new-text">
    <?php $ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_content_settings','Excerpt');
    if($ecommerce_solution_theme_lay == 'Content'){ ?>
      <?php the_content(); ?>
    <?php }
    if($ecommerce_solution_theme_lay == 'Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <?php $excerpt = get_the_excerpt(); echo esc_html( ecommerce_solution_string_limit_words( $excerpt, esc_attr(get_theme_mod('ecommerce_solution_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('ecommerce_solution_post_discription_suffix','[...]') ); ?>
      <?php }?>
    <?php }?>
  </div>
  <?php if( get_theme_mod('ecommerce_solution_button_text','View More') != ''){ ?>
    <div class="postbtn">
      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('ecommerce_solution_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_button_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ecommerce_solution_button_text','View More'));?></span></a>
    </div>
  <?php }?>
</article>