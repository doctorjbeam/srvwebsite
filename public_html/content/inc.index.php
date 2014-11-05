<?php
	/**
	 * Steamrail index 
	 */
	
?>
<div class="well well-right">
	<h2 style="text-align: center;"><span class="font-impact">Upcoming</span> <span class="font-antiqua divider">Tours</span></h2>
	<a href="?page=tours"><img class="maxwidth" src="images/upcomingtours/rotate.php" alt="Click here to visit our tours page! Download brochures, view our upcoming tours and even book online!" width="250" height="500" border="0"></a>
</div>

<div class="main">
	<div id="carousel">
	
	</div>
	
	<p>Step aboard and be transported back in time. </p>
	<p>From the moment you board a Steamrail train, you are riding living history in the beautiful timber panelled carriages, many still with fantastic Edwardian pressed tinwork on the ceilings. Up front is the real deal - a fully restored steam locomotive up to 107 years old, or heritage diesel dating from the 1950s, ready to take you away...</p>
	
	<div class="inset">
		<h2>Steamrail Gallery</h2>
		<p>See the latest images of recent tours, as well as our locomotives and rollingstock.</p>
		<p>We are currently using our "Flickr" group for images and plans are in place to link this back to our website. Our old "Gallery" software is currently offline so this means the About Us pages for our Steam, Electric, Diesel and Carriage pages do not contain photos at this point in time. We hope to have this rectified as soon as possible. Some latest photos have also been uploaded to our Facebook page in the interim.</p>
	</div>
</div>

<script>
	$(document).ready(function() {
		
		/**
		 * Draw the carousel
		 */
		
		var $images = [
			"https://farm4.staticflickr.com/3942/15444052659_f6b1953c8f_z.jpg",
			"https://farm7.staticflickr.com/6213/6291035484_f3d88c42e0_z.jpg",
			"https://farm4.staticflickr.com/3925/14639579631_a91e85e614_z.jpg",
			"https://farm4.staticflickr.com/3880/14464434449_886c42401c_z.jpg",
			"https://farm6.staticflickr.com/5528/14670921473_30dd786698_z.jpg",
			"https://farm8.staticflickr.com/7352/11700713423_fbaa52eee8_z.jpg",
			"https://farm4.staticflickr.com/3739/11699475415_7ec82dfdea_z.jpg"
		];
		
		var $target = $("#carousel");
		var $k = 99;
		
		window.setInterval(function() {
			if (typeof $images[$k + 1] == "undefined") {
				$k = 0; 
			} else {
				$k++;
			}
			
			$target.css("opacity", 0).css("background-image", "url(" + $images[$k] + ")").animate({ opacity : 1 }, { duration : 400 });
		}, 4000);
	});
</script>