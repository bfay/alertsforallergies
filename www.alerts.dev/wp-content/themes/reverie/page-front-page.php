<?php
/*
Template Name: Front Page
*/
get_header(); ?>

		<!-- Row for main content area -->
		<div class="slider-container" role="main">
	
			<div class="slider eleven columns"><img src="http://images.alertsforallergies.com/slider-hands-in-air.png" alt="Alerts for Allergies Signs"></div>
			
			
			<div class="opt-in five columns right"><?php $widgetdata=array (
   'widget_id' => 'wysija-nl-php-1',//form identifier important when many subscription forms on the same page
   'title' => '',//title of widget
   'instruction' => '', // instruction to be displayed on top of the widget
   'lists' =>  array (0 => '1'), //array of list_id to which you want to subscribe your users
   'submit' => 'Subscribe!',//name of the subscribe button
   'success' => 'You’ve successfully subscribed. Check your inbox now to confirm your subscription.',//success message returned when registered
   'customfields' =>array ( //optional array of custom fields to be displayed lastname, firstname, email
        'email' => array ('label' => 'Email')
   ),
   'labelswithin' => 'labels_within' //parameter to put the label of the custom field as a default value of the field
);
 
$widgetNL=new WYSIJA_NL_Widget(1);
$subscriptionForm= $widgetNL->widget($widgetdata,$widgetdata);
 
echo $subscriptionForm; ?></div>


		</div><!-- End slider row -->
		
<!--!Products Banner-->
<div class="row">
<div class="eight columns centered ribbon">
<a href="/products"><img src="http://images.alertsforallergies.com/products-banner.png"/></a>
</div>
</div><!--end products banner row-->

<div class="row">

<section class="product panel three columns text-center fancy-font">
	<div class="cat-block">
          <img class="entry-thumb inner-panel fancy-font" src="http://images.alertsforallergies.com/stickers.png" alt="Stickers">
          <div class="entry-content4 fancy-font">
            <div class="cat-title fancy-font">
            </div>
          </div>
          </div>
      <h4><a href="/products/stickers">Stickers</h4>
      <p> 2.5" Circle</br>
              Price: $5 for 25
            </p></a>

    </section>


<section class="product panel three columns text-center fancy-font">
	<div class="cat-block">
          <img class="entry-thumb inner-panel fancy-font" src="http://images.alertsforallergies.com/bags.png" alt="Lunch Bags">
          <div class="entry-content1 fancy-font">
            <div class="cat-title fancy-font">
            </div>
          </div>
          </div>
      <h4><a href="/products/lunch-bags">Lunch Bags</h4>
      <p>9″w x 10″h x 4″d </br>
              Price: $15
            </p></a>

    </section>
   
<section class="product panel three columns text-center fancy-font">
	<div class="cat-block">
          <img class="entry-thumb inner-panel fancy-font" src="http://images.alertsforallergies.com/cards.png" alt="Chef Cards">
          <div class="entry-content3 fancy-font">
            <div class="cat-title fancy-font">
            </div>
          </div>
          </div>
      <h4><a href="/products/chef-cards">Chef Cards</h4>
      	<p>Business Card Size </br>
              Price: $4 for 20
            </p></a>
    </section>
    
<section class="product panel three columns text-center fancy-font">
	<div class="cat-block">
          <img class="entry-thumb inner-panel fancy-font" src="http://images.alertsforallergies.com/tattoos.png" alt="Tattoos">
          <div class="entry-content2 fancy-font">
            <div class="cat-title fancy-font">
            </div>
          </div>
          </div>
      <h4><a href="/products/tattoos">Tattoos</h4>
      		<p>2" Circle </br>
              Price: $8 for 25
            </p></a>
    </section>
    
<section class="product panel three columns text-center fancy-font">
	<div class="cat-block">
          <img class="entry-thumb inner-panel fancy-font" src="http://images.alertsforallergies.com/signs.png" alt="Signs">
          <div class="entry-content5 fancy-font">
            <div class="cat-title fancy-font">
            </div>
          </div>
          </div>
      <h4><a href="/products/signs">Signs</a></h4>
      		<p>11" x 8.5" on card stock</br>Price: $12 for 4 
            </p>
    </section>  
  </div>
  
  <section>
 <div class="row">
  <div class="four columns panel testimonials">
  	<h2 class="text-center">Testimonials</h2>
  	<p class="fancy-font">I’m looking forward to using the chef cards when we eat out. We always tell our server about my daughter’s peanut allergy, but realize instructions sometimes are forgotten or “lost in translation” from the table to the kitchen. The cards will help ensure the message is delivered directly to the kitchen staff and give reminders on how to prepare her food. &nbsp &nbsp &nbsp<strong>- Heather</strong></br>
  	<p class="fancy-font">We loved the tattoo's- thank you they were perfect and we gave them to a few friends of ours! I'm a nervous mommy- sent my son to camp for the first time and although he's getting better about watching out for peanuts he's not perfect- so was very nervous to have him out of my sight. So put them on his right forearm as a reminder to all his counselors- the kids thought they were cool too! Gave me a little peace of mind. Thank you!
&nbsp &nbsp &nbsp <strong>- Kelly</strong></p> 
  </div>
  <div class="eleven columns push-one panel feature">
  <h2 class="text-center">Check out my book!</h2>
  <div class="row">
  <div class="seven columns inner-text"><p class="fancy-font">Allergies at School is a valuable resource that will give insight into the important questions to ask. It’s a simple and straightforward guide to help increase your child’s safety at school. It also has several checklists of key points to easily reference, helpful resources to share, and relevant stories to discuss with the team members.</p>

<p class="fancy-font">Whether your child is starting kindergarten or entering a new school, Allergies at School is an easy way to help you prepare for a safe transition. This is also an excellent resource for teachers, nurses, principals and other school staff.</p>
  <a href="http://www.amazon.com/gp/reader/B008VKCNY2/ref=sib_dp_kd#reader-link" target="_blank"><h5 class="fancy-font">Take a peek inside...</h5></a>
  </div>
  <div class="nine columns kindle">
  
  <a href="http://www.amazon.com/Allergies-School-awareness-life-threatening-ebook/dp/B008VKCNY2/ref=sr_1_1?s=digital-text&ie=UTF8&qid=1344951624&sr=1-1&keywords=stacey+stratton+allergies" target="_blank"><img src="http://images.alertsforallergies.com/kindle.png" alt="Alerts at School: By Stacey Stratton"></a>
  </div>
  </div>
  </div>
  </div><!--end row-->
  </section>
  
  <!--<section>
	  <div class="row">
	  	<div class="four column panel text-center">
	  	<h3>Affiliate 1</h3>
	  	</div>
	  	<div class="four column panel text-center">
	  	<h3>Affiliate 2</h3>
	  	</div>
	  	<div class="four column panel text-center">
	  	<h3>Affiliate 3</h3>
	  	</div>
	  	<div class="four column panel text-center">
	  	<h3>Affiliate 4</h3>
	  	</div>
	  </div>
  </section>

  </div> 
  
</div>-->


	

		
		
		
		
<?php get_footer(); ?>
