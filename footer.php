<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
  <div class="footer-wrapper">
    <div class="footer-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="logo" rel="home">
        <img class="float-center" src="<?php echo get_template_directory_uri(); ?>/logo-footer.png" alt="Logo" width="40px" height="40px" />
      </a>
    </div>
  </div>
    <div class="footer-container">
        <div class="footer-grid">

          <ul class="footer-about">
            <h3>About</h3>
            <li><a href="#">About PaddleGuru Studio</a></li>
            <li><a href="#">Advertise on PaddleGuru</a></li>
            <li><a href="#">Meet the team</a></li>
            <li><a href="#">Contact PaddleGuru</a></li>
            <li><a href="#">Privacy & terms</a></li>
            <li><a href="#">Media kit</a></li>
          </ul>
          <ul class="footer-about">
            <h3>Brands</h3>
            <li><a href="#">Sell products on PaddleGuru</a></li>
            <li><a href="#">Advertise products</a></li>
            <li><a href="#">Shop on PaddleGuru</a></li>
          </ul>
          <ul class="footer-about">
            <h3>Paddlers</h3>
            <li><a href="#">Register for a race</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Go to Dashboard</a></li>
            <li><a href="#">Contact support</a></li>
          </ul>
          <ul class="footer-about">
            <h3>Organizers</h3>
            <li><a href="#">Create an event</a></li>
            <li><a href="#">Advertise an event on PaddleGuru</a></li>
            <li><a href="#">Contact PaddleGuru Race Service</a></li>
          </ul>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
