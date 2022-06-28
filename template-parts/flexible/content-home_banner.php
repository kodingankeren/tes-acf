<?php
	$id= 'row'.get_row_index();
	$themeurl = get_stylesheet_directory_uri();

	$background_image = get_sub_field('background_image') ? : '';
	$field_large_title = get_sub_field('large_title') ? : '';
	$large_title = '';
	if ($field_large_title) {
		$large_title = '<span class="large">'.$field_large_title.'</span>';
	}
	$normal_title = get_sub_field('normal_title') ? : '';
	$paragraph = get_sub_field('paragraph') ? : '';
?>
<section class="home-banner" style="background-image: url(<?php echo $background_image['url'] ?>);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <h2 class="title"><?php echo $large_title;?> <?php echo $normal_title;?></h2>
          <p><?php echo $paragraph; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>