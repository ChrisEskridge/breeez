<?php
/**
Template Name: Home
**/

get_header(); ?>

<div class="hero">
  <div class="restrictor">
  <div class="side-by-side">
      <div class="sxs-txt order-2 sxs-txt--big sxs-txt--breakout">
        <h1>A <span class="accent underline">wide variety</span> of kitchens at <span class="accent underline">unbeatable prices</span>.</h1>
        <ul class="hero-list">
          <li class="hero-li">Work with our expert team to create your kitchen</li>
          <li class="hero-li">Free no obligation quotes</li>
          <li class="hero-li">Hundreds of colours & styles to choose from</li>
        </ul>
        <div class="spacer"></div>
        <div class="hero-wrap">
        <button class="outline hero__btn">Our Kitchens</button> <button class="hero__btn">Book an Appointment</button>
        </div>
      </div>
      <div class="image">
        <div class="image--breakout" style="background-image: url(<?php echo get_field( "hero_image" );?>); background-size: cover; background-position: 82% 58%;"></div>
      </div>
    </div>
  </div>
</div>

<?php $query = new WP_Query( [
    'post_type'      => 'Kitchens',
] ); ?>

<?php if ( $query->have_posts() ) : ?>

<div class="bg-light">
<div class="spacer"></div>
  <div class="restrictor">
    <h2 class="h2--breakout">Our <span class="accent">Range</span> of Kitchens</h2>
    <div class="kitchens kitchens--big-gap">
    
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="card card--big-gap" style="background-image: url(<?php echo get_field( "kitchen_type_image" );?>);background-size: cover;">
        <div class="title">
        <?php the_title(); ?> <div class="arrow accent">⟶</div>
          <div class="card__subtitle accent">KITCHENS</div>
        </div>
      </div>
      <?php endwhile; ?>
      
      <div class="lg-spacer"></div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<div class="bg-white">
<div class="lg-spacer"></div>
  <div class="restrictor">
    <div class="wrap">
    <div class="features">
    <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/crown.svg" width="35px">
        </div>
        <div class="i-txt">
        <div class="i-txt__title">Bespoke Design</div>
        Easily book appointments to design your kitchen.
        </div>
      </div>
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/pig.svg" width="40px">
        </div>
        <div class="i-txt">
        <div class="i-txt__title">Save Money</div>
        Save the pennies with our highly competitive prices.
        </div>
      </div>
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/rate.svg" width="40px">
        </div>
        <div class="i-txt">
        <div class="i-txt__title">Well Reviewed</div>
        Trusted by many happy customers across the country.
        </div>
      </div>
    </div>
    <div class="cta bg-medium">
      <!--Book in with our team today to create your new kitchen.
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie.</p>
      Call <strong>0800 000 0000</strong>
      <button>Book an Appointment</button>-->
    </div>
</div>
  </div>
  
</div>

<div class="lg-spacer hr"></div>
<div class="lg-spacer"></div>

<div class="bg-white">
  <div class="restrictor">
    <div class="side-by-side">
      <div class="sxs-txt">
        <h2>Lorem ipsum dolor sit amet vestibum.</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur sed turpis id efficitur. Morbi vel fermentum elit, id pulvinar mi. Cras rutrum sit amet lorem nec iaculis. 
        </p>
        <p class="lead">Proin velit leo, viverra eget mattis eu, vestibulum a leo. Nulla facilisi. Phasellus sodales vehicula porttitor. Praesent aliquam lectus rhoncus, dapibus tellus at, laoreet lacus. Fusce a turpis non velit ornare ullamcorper ut non dolor. 
        </p>
        <span class="lead">Call <strong>0800 000 0000</strong> or <button>Book an Appointment</button></span>
      </div>
      <div class="image" style="background-image: url('wp-content/themes/breeez/images/sxs.png');background-size: cover;">
        
      </div>
    </div>
  </div>
</div>

<div class="lg-spacer"></div>

<div class="bg-white">
  <div class="restrictor">
  <div class="wrap">
    <div class="testimonials" style="background-image: url('wp-content/themes/breeez/images/testimonials.png');background-size: cover;">
      
    </div>
    <div class="parts">
      <div class="card card--grow" style="background-image: url('wp-content/themes/breeez/images/cabinets.png');background-size: cover;">
        <div class="title">
          cabinets <div class="arrow accent">⟶</div>
          <div class="card__subtitle accent">& DOORS</div>
        </div>
      </div>
      <div class="card card--grow" style="background-image: url('wp-content/themes/breeez/images/worktops.png');background-size: cover;">
        <div class="title">
          worktops <div class="arrow accent">⟶</div>
          <div class="card__subtitle accent">FOR KITCHENS</div>
        </div>
      </div>
    </div>
</div>
  </div>
</div>

<div class="lg-spacer"></div>

<div class="bg-dark">
<div class="lg-spacer"></div>
  <div class="restrictor">
  <h2>A <span class="accent">Quick & Simple Process</span> to<br>Create Your New Kitchen</h2>
    <div class="process">
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/phone.svg" width="25px">
        </div>
        <div class="i-txt">
        Call <strong>0800 000 0000</strong> and speak to our experts.
        </div>
      </div>
      <div class="arrow accent">⟶</div>
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/crown.svg" width="40px">
        </div>
        <div class="i-txt">
        Design your <strong>dream kitchen</strong> through a consultation.
        </div>
      </div>
      <div class="arrow accent">⟶</div>
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/thumb.svg" width="35px">
        </div>
        <div class="i-txt">
        <strong>Confirm your order</strong> and your new kitchen is built.
        </div>
      </div>
      <div class="arrow accent">⟶</div>
      <div class="icon-txt">
        <div class="icon accent">
        <img src="wp-content/themes/breeez/images/truck.svg" width="50px">
        </div>
        <div class="i-txt">
        Your new dream kitchen is <strong>delivered and installed</strong>.
        </div>
      </div>
    </div>
  </div>
<div class="lg-spacer"></div>
</div>



<?php
get_footer();
