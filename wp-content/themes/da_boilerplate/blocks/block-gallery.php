<?php 
// display images from an ACF gallery field

$images = get_field('acf_images');

if( $images ): ?>
<div class="block-gallery wrapper">

  <ul class="block-gallery__list">
    <?php foreach( $images as $image ): ?>
      <?php
      $caption = $image['title'].$image['caption']; 
      ?>
      <li class="block-gallery__item">
        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery" data-caption="<?php echo $caption; ?>">
            <img src="<?php echo esc_url($image['sizes']['square']); ?>" alt="<?php echo $image['alt']; ?>"/>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>

</div>
<?php endif; ?>