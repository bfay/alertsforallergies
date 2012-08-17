<?php
/*
Template Name: Product Chef Cards
*/
get_header(); ?>

		<!-- Row for main content area -->
		<div id="product-page" class="product-container" role="main">
		
		<div class="row">
		<div class="product-header text-center sixteen columns">
		
		
		<!--******************This is where you put the title of the product (remove the quotes too)**********--><h1>Chef Cards</h1>
		
		
		</div>
		</div><!-- end row -->
			<div class="row">
			<div class="product-image four columns push-three"><!--******************This is where you insert the image.  You don't need to put spacing around it like I taught you to under the advanced settings (delete the wording and quotes)*******************-->
		
		<img src="http://images.alertsforallergies.com/cards.png" class="panel" alt="Allergy Alert Chef Cards">

	
		</div>
		<div class="product-title nine columns"><!--******************This is where you put the product info that will fit beside the image.  Do everything you want between the <div> </div> tags.  You can style it however you want from the toolbar above and it should stick. (remove the quotes though)******************-->
<h3>Allergy Alert Chef & Server Cards</h3>
<h4>Conventient Business Card Size</h4>
<h4>3.5" x 2"</h4>
<h4>20 for $4</h4></br></br>

		</div>
		</div><!--end row-->
		
		<div class="row">
		<div class="product-info thirteen columns push-three">
		
		<!--*****************This is where you put the paypal button, pricing, etc.  It is the space under the image and the product info (remove the quotes too)*******************************-->
<p>A great visual to help alert the server and chef of the food allergy. These handy Chef Cards are convenient to keep in a wallet or purse, so you have them with you when you go to a restaurant. They're full color laminated on the front and have a space on the back to write in your specific allergies. Helps to ensure the chef gets this vital information when your order is placed - rather than relying on the server to convey the importance of this information.</p>		
		
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9DVZHRH5GEU4N">
<table>
<tr><td><input type="hidden" name="on0" value="Chef Cards">Chef Cards</td></tr><tr><td><select name="os0">
	<option value="Peanut Allergy">Peanut Allergy $4.00 USD</option>
	<option value="Allergy Alert">Allergy Alert $4.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

				</div>
			</div><!--end row-->
			<div class="row">
			<div class="divider thirteen columns push-three">
			</div>
			</div>
<!--*************************This is where you put the extended information about the product.  It is the width of the page underneath everything, just like petunia.com (remove the quotes too)***************************--><div class="product-more thirteen columns centered">

<h4>Copy of the Back</h4>
<p>I have a severe food allergy to: (fill in the blank)</br></br>To avoid a life-threatening reaction, I must avoid all foods and ingredients that may contain even trace amounts.</p>

<p>Please ensure that all utensils and equipment used to prepare my meal,
as well as prep surfaces, are thoroughly cleaned prior to use.</p>

<p>Thank you for your cooperation.</p>
		</div>
		</div><!--end row-->
		</div><!--end container-->

		</div><!--end main-->

	
			
		
<?php get_footer(); ?>