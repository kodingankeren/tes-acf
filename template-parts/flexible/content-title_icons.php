<?php
  $id= 'row'.get_row_index();
  $themeurl = get_stylesheet_directory_uri();

  $title_icon_icon = get_sub_field('title_icon_icon') ? : '';
  $title_icon_title = get_sub_field('title_icon_title') ? : '';
?>

<section class="title-icon">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <div class="icon-area">
            <img src="<?php echo $title_icon_icon['url']; ?>" alt="<?php echo $title_icon_icon['alt']; ?>" class="img-fluid">
          </div>
          <h2><?php echo  $title_icon_title; ?></h2>
        </div>
      </div>
    </div>
  </div>
</section>