<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

  <footer id="footer" class="<?php print $classes; ?>">
    <?php if ($content): ?>
    <?php print $content; ?>
    <?php endif; ?>
      <div id="footer-contact" class="full-width">
        <div class="footer-contact-item">
          <i class="fa fa-phone"></i>
          <span>888-888-8888</span>
        </div>
        <div class="footer-contact-item">
          <i class="fa fa-envelope"></i>
          <span>info@halighting.com</span>
        </div>
        <div class="footer-contact-item">
          <i class="fa fa-map-marker"></i>
          <span>1450 2nd Street, Suite 242 Santa Monica</span>
        </div>
      </div>
        <div id="footer-menu-bg" class="full-width">
          <div class="content-wide">
            <nav id="footer-menu">
              <?php if ($secondary_nav): ?>
                <?php print $secondary_nav; ?>
              <?php endif; ?>
            </nav>
          </div>
        </div>
        <div id="footer-copyright" class="full-width">
          <div class="content-wide">
            <span class="font-small uppercase">&#169; 2015 HA Lighting. All rights reserved.</span>
            <div class="bottom-social-div">
              <a class="fa fa-facebook" target="_blank" href="https://www.facebook.com"></a>
              <a class="fa fa-twitter" target="_blank" href="https://www.twitter.com"></a>
            </div>
          </div>
        </div>
  </footer>