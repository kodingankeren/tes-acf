<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package for_test
 */

$themeurl = get_stylesheet_directory_uri();
$address_title_footer = get_field('address_title_footer', 'option') ? : '';
$address_text_footer = get_field('address_text_footer', 'option') ? : '';
$contact_title_footer = get_field('contact_title_footer', 'option') ? : '';
$contact_text_footer = get_field('contact_text_footer', 'option') ? : '';
$footer_menu_title = get_field('footer_menu_title', 'option') ? : '';
$footer_menu = get_field('footer_menu', 'option') ? : '';
$footer_copyright = get_field('footer_copyright', 'option') ? : '';

?>

	<footer>
	  <div class="container">
	    <div class="row">
	      <div class="col-12">
	        <div class="content-area">
	          <div class="footer-widget">
	            <div class="widget-box quarter-size-smaller">
	              <h3><?php echo $address_title_footer;?></h3>
	              <?php echo $address_text_footer;?>
	            </div>
	            <div class="widget-box quarter-size">
	              <h3><?php echo $contact_title_footer;?></h3>
	              <?php echo $contact_text_footer;?>
	            </div>
	            <div class="widget-box half-size">
	              <h3><?php echo $footer_menu_title;?></h3>
	              <?php if($footer_menu): ?>
	              <ul class="footer-menu">
	                  <?php 
	                    foreach($footer_menu as $i => $item) {
	                        $item_menu = $item['link_footer_menu'];
	                  ?>  
	                      <li><a href="<?php echo $item_menu['url']; ?>"><?php echo $item_menu['title'] ?></a></li>
	                      <?php
	                    }
	                  ?>

	                
	              
	              </ul>
	              <?php endif; ?>
	            </div>
	          </div>
	          <div class="footer-copyright">
	            <p><?php echo $footer_copyright; ?></p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
	<div class="back-to-top">
	  <a href="#top-page" class="smoothscroll"><img src="<?php echo $themeurl; ?>/images/svg/back-to-top.svg" alt="back to top" class="img-fluid"></a>
	</div>
</div><!-- #page -->

<?php //wp_footer(); ?>

</body>
</html>