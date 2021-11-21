<article> 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h2>
    <div class="feature-image"> 
        <?php the_post_thumbnail();?>
    </div>
    <div class="post-meta"> 
        Posted By:<?php the_author_posts_link();?> | Posted On :<?php the_time('M d, Y');?> | Posted In <?php the_category(' , ');?>  | <?php comments_popup_link('No Comment','1 Comment','%','my-comment-class','comments off');?>

    </div>
    <p><?php  the_content();?></p>
</article>