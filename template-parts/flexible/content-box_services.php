<?php
  $id= 'row'.get_row_index();
  $themeurl = get_stylesheet_directory_uri();

  $box_service = get_sub_field('item_service') ? : '';
?>
<section class="three-image-options">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <?php if($box_service): ?>
        <div class="content-area">
            <?php 
              foreach($box_service as $i => $item) {
                  $service_images = $item['service_images'];
                  $service_title = $item['service_title'];
                  $link_service = $item['link_service'];

                  if($service_images){
                      ?>
                      <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" class="img-fluid" width="<?php echo $width; ?>">
                        <div class="content-flex">
                          <div class="content-box" style="background-image: url(<?php echo $service_images['url']; ?>);">
                            <div class="text-area">
                              <h3><?php echo $service_title; ?></h3>
                              <?php if ($link_service) {

                                $button_url = $link_service['url'];
                                $button_title = $link_service['title'];
                              ?>
                              <a href="<?php echo  $button_url; ?>"><?php echo $button_title; ?></a>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php
                  }
              }
            ?>

          </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>