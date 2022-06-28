<?php
  $id= 'row'.get_row_index();
  $themeurl = get_stylesheet_directory_uri();

  $three_column_icon_title_icon = get_sub_field('three_column_icon_title_icon') ? : '';
  $three_column_icon_title = get_sub_field('three_column_icon_title') ? : '';
  $three_column_icon_box = get_sub_field('three_column_icon_box') ? : '';
  $three_column_icon_title_contact = get_sub_field('three_column_icon_title_contact') ? : '';
  $three_column_icon_text_contact = get_sub_field('three_column_icon_text_contact') ? : '';
  
?>

<section class="three-column-icon grey-bg">

  <section class="title-icon">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="content-area">
            <div class="icon-area">
              <img src="<?php echo $three_column_icon_title_icon['url'] ?>" alt="<?php echo $three_column_icon_title_icon['alt'] ?>" class="img-fluid">
            </div>
            <h2><?php echo $three_column_icon_title; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if($three_column_icon_box): ?>
        <div class="column-content-area">

        
            <?php 
              foreach($three_column_icon_box as $i => $item) {
                  $icon = $item['three_column_icon_box_icon'];
                  $title = $item['three_column_icon_box_title'];
                  $text = $item['three_column_icon_box_text'];
            ?>
                  <div class="content-box">
                    <div class="icon-image">
                      <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid">
                    </div>
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $text; ?></p>
                  </div>
                      <?php
                  
              }
            ?>

          
        </div>
        <?php endif; ?>

        <div class="form-get-started">
          <div class="text-area">
            <h3><?php echo $three_column_icon_title_contact; ?></h3>
            <p><?php echo $three_column_icon_text_contact; ?></p>
          </div>
          <div class="form-area">
            <form action="#">
              <div class="input-area">
                <input type="text" placeholder="Name" class="name-input">
              </div>
              <div class="input-area half-width">
                <input type="text" placeholder="Phone">
              </div>
              <div class="input-area half-width">
                <input type="email" placeholder="Email *" required>
              </div>
              <div class="input-submit">
                <input type="submit" value="Contact Us">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>