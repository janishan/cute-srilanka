<?php 
/* 	Travel Theme's part for showing blog or page in the front page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
if (of_get_option('fpostex', '1') != '1'): ?>
 <br />
 <div class="boxcontainer boxrel">
 <div class="featured-contents">
 <?php //if (of_get_option('fpostex', '1') != '2'): echo '<div id="content-full" class="full-content">'; else: echo '<div id="content">'; endif;?>
 <?php echo '<div id="content">';?>
 
 <?php if ( of_get_option('fnews01-title', 'Recent') != '' || of_get_option('fnews02-title', 'News') != '' ): ?>
 <h2 class="fpagenews"><?php echo of_get_option('fnews01-title', 'Recent'); ?><span> <?php echo of_get_option('fnews02-title', 'News'); ?></span></h2>
 <?php endif; 
 if (of_get_option('sel-post', '0') == '1'): if ( 'posts' == get_option( 'show_on_front' ) ):
 $sbargs = array( 'post_type'=> 'post', 'meta_key'=>'sb_fp', 'meta_value'=>'on', 'orderby' => 'date', 'order' => 'DESC' , 'ignore_sticky_posts' => 1, 'paged' => get_query_var('paged'));
 query_posts( $sbargs ); 
 endif; endif;
 ?>
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php if (!is_page()): ?>
 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fpage-thumb'); ?></a>
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <?php endif; ?>
 <div class="entrytext">
 <?php if ( is_page() || of_get_option('sfsw-check', '1') == '0' ): the_content('<span class="read-more">' . of_get_option('readmore', 'Read More ...') . '</span>'); else: global $blExcerptLength; $blExcerptLength = '30'; the_excerpt();  endif; ?>
 <div class="clear"> </div>
 </div></div>
 <?php endwhile;  if (!is_page()): ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('&laquo;  ' . of_get_option('pe3', 'Previous Entries') ) ?></div>
<div class="alignright"><?php next_posts_link(of_get_option('ne3', 'Next Entries') .' &raquo;') ?></div>
</div>
 
<?php endif; endif; wp_reset_query(); ?>
 
</div>
<?php if (of_get_option('fpostex', '1') != '3'): get_sidebar( 'others' ); endif; ?>
</div>
<div class="clear"></div><div class="sep2">sep</div>
</div>
<?php endif; ?>