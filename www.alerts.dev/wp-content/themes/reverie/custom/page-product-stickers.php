<?php
/*
Template Name: Product Stickers
*/
get_header(); ?>

<!-- Row for main content area -->
		<div id="product-page" class="product-container" role="main">
<div class="row">
<div class="product-header text-center sixteen columns">

<!--****************** This is where you put the TITLE of the product *********************-->
<h1>Allergy Alert Stickers</h1>
</div>

<!--****************** end title *********************-->
</div>
<!-- end row -->

<div class="row">
<div class="product-image four columns push-three">

<!--****************** This is where you insert the image.  You don't need to put spacing around it like I taught you to under the advanced settings *******************-->

<img src="http://images.alertsforallergies.com/stickers.png" class="panel" alt="Allergy Alert Product Sticker">

</div>
<!--****************** end image *********************-->
<div class="product-title nine columns">

<!--******************This is where you put the product info that will fit beside the image.  Do everything you want between the
div tags.  You can style it however you want from the toolbar above and it should stick. ******************-->
<h3>Peanut Free Sticker</h3>
<h4>2.5″ circle</h4>
<h4>25 for $5</h4>
</br>
<strong>Buy in Bulk and SAVE!</strong>
<p>Get 150 stickers for only $25</br>
- a savings of over 15%</p>

</div>
</div>
<!--end row-->
<div class="row">


<div class="product-info thirteen columns push-three">

<!--*****************This is where you put the paypal button, pricing, etc.  It is the space under the image and the product info *******************************-->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="paypal"><input type="hidden" name="cmd" value="_s-xclick" /> <input type="hidden" name="hosted_button_id" value="5DVXRVKVCH2LC" />
<table>
<tbody>
<tr>
<td><input type="hidden" name="on0" value="Sticker Quantities" />Sticker Quantities</td>
</tr>
<tr>
<td><select name="os0"> <option value="25 Stickers">25 Stickers$5.00 USD</option> <option value="150 Stickers">150 Stickers$25.00 USD</option> </select></td>
</tr>
</tbody>
</table>
<div class="left"><input type="hidden" name="currency_code" value="USD" /> <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online!" /> <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></div>
</form>&nbsp;

</div>
</div>
<!--end row-->


<div class="row">
</div>


<!--*************************This is where you put the extended information about the product.  It is the width of the page underneath ***************************-->
<div class="product-more thirteen columns centered">

These bright and colorful stickers help get attention and are an excellent way to label purchased and home-baked goods as "safe", so others will have no doubt what they can safely offer. Helps avoid confusion and contamination by labeling your child's drink, especially during sports and parties. A great way to mark alternative peanut butter sandwiches (ex: SunButter) as "safe" and to also mark your child's disposable lunch bags. Make important notes and letters stand out.... there are so many ways you can use them!

</div>
<!--end row-->
</div><!--end container-->
		</div><!--end main-->

	
			
		
<?php get_footer(); ?>