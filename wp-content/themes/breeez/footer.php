<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breeez
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="bg-medium">
    <div class="lg-spacer"></div>
      <div class="restrictor">
        
          <h3 class="foot-cta-h3">Ready to create <span class="accent">your dream kitchen?</span><br>Contact our expert team today.</h3>
          <div class="button-wrap">
            <div class="call">Call us today<br>
              <i class="fa-solid fa-phone accent no-italic i-block"></i>
              <div class="call__number i-block"><strong>020 000 0000</strong></div>
            </div>

            <button>Book an Appointment</button>
          </div>
        
        </div>
        <div class="lg-spacer hr"></div>
        <div class="lg-spacer"></div>
        <div class="restrictor">
        <div class="contact-nav">
        <i class="fa-solid fa-phone accent no-italic"></i> 0800 000 0000<br>
        <i class="fa-regular fa-envelope accent no-italic"></i> info@domainname.co.uk<br>
        <br>
        <i class="fa-solid fa-location-arrow accent no-italic"></i> 123 Main Road<br>
        This Town<br>
        Location, <br>
        AB12 3CD
        </div>
        <div class="service-nav">
          <span class="no-italic accent">SERVICES</span>
          <ul class="foot-ul">
            <li>Kitchen Design</li>
            <li>Cabinets & Doors</li>
            <li>Worktops</li>
            <li>Showroom</li>
            <li>Gallery</li>
          </ul>
        </div>
        <div class="company-nav">
          <span class="no-italic accent">COMPANY</span>
          <ul class="foot-ul">
            <li>About Us</li>
            <li>Our Process</li>
            <li>FAQs</li>
            <li>Reviews</li>
            <li>Get in Touch</li>
          </ul>
        </div>
        <div class="social-nav">
          <span class="no-italic accent">FOLLOW US</span>
          <ul class="foot-ul">
            <li class="social-li"><i class="fa-brands fa-linkedin-in"></i></li>
            <li class="social-li"><i class="fa-brands fa-facebook-f"></i></li>
            <li class="social-li"><i class="fa-brands fa-x-twitter"></i></li>
            <li class="social-li"><i class="fa-brands fa-instagram"></i></li>
          </ul>
        </div>
        </div>
        <div class="lg-spacer hr"></div>
        
        <div class="restrictor">
        <div class="spacer"></div>
        <div class="small-print">
        Company Name Ltd is a registered company in England. Registered Number: 1234567. VAT Number: 987654321.<br>
        © Company Name Ltd 2021. All Rights Reserved.
        </div>
        <div class="foot-logo">
          <img src="wp-content/themes/breeez/images/foot-logo.png">
        </div>
        <div class="spacer"></div>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script>
    $("#menu-toggle").click(function() {
      $(".main-navigation ul").slideToggle(  );
    })
  </script>
</body>
</html>
