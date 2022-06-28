<?php
  $id= 'row'.get_row_index();
  $themeurl = get_stylesheet_directory_uri();

  $text_image_half_large_title = get_sub_field('text_image_half_large_title') ? : '';
  $text_image_half_large_text = get_sub_field('text_image_half_large_text') ? : '';
  $text_image_half_large_link = get_sub_field('text_image_half_large_link') ? : '';
  $text_image_half_large_image = get_sub_field('text_image_half_large_image') ? : '';
  $text_image_half_large_image_position = get_sub_field('text_image_half_large_image_position') ? : '';
  if ($text_image_half_large_image_position == "image-right") {
    $image_position = " image-right";
  }else{
    $image_position = "";
  }

?>

<section class="text-image-half-large<?php echo $image_position;  ?>">
  <div class="content-area">
    <div class="image-area">
      <div class="img-box">
        <img src="<?php echo $text_image_half_large_image['url']; ?>" alt="<?php echo $text_image_half_large_image['alt']; ?>" class="img-fluid">
      </div>
    </div>
    <div class="text-area">
      <div class="text-box">
        <h3><?php echo $text_image_half_large_title; ?></h3>
        <p><?php echo $text_image_half_large_text; ?></p>
        <a href="<?php echo $text_image_half_large_link['url']; ?>" class="btn btn-green"><?php echo $text_image_half_large_link['title']; ?></a>
      </div>
    </div>
  </div>
</section>