<?php
	/**
	 * Steamrail Victoria homepage
	 * @since Version 1.0 
	 * @author Lionel Camilleri
	 */
	
	$pagetitle = "Steamrail Victoria - Home Page"; 
	
	// Require because we *need* the page, and require_once because we only need it *once*
	require_once("header.php");
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=523426197678792";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<table width="900" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="267" colspan="2" valign="top">
			<img src="images/Banner_SR_Home_Mstr.jpg" width="900" height="200" />
			<?php require_once("menu.php"); ?>
			
			<script type="text/javascript">
				//dolphintabs.init("ID_OF_TAB_MENU_ITSELF", SELECTED_INDEX)
				dolphintabs.init("dolphinnav", 1);
			</script>
		</td>
	</tr>

	<tr>
	 <td width="600" align="left" valign="top" bgcolor="#FFFFCC" class="Arial" ><blockquote>
	   <p><center>
	     <iframe align="center" src="http://www.flickr.com/slideShow/index.gne?set_id=72157627276739189" width="500" height="500" frameborder="0" scrolling="no"></iframe>
	     <br />
	     <center>
	     </center>
	   </center></p>
	   <span class="arial16nobold">Step aboard and be  transported back in time.
	   <br /><br />
	
	   From the moment you  board a Steamrail train, you are riding living history in the beautiful timber  panelled carriages, many still with fantastic Edwardian pressed tinwork on the  ceilings. Up front is the <strong>real deal</strong> - a fully restored steam locomotive up to  107 years old, or heritage diesel dating from the 1950s, ready to take you away... </span></blockquote>        </td>
	 <td width="300" height="495" rowspan="3" valign="top" bgcolor="#FFFFCC"><table width="300" border="0" cellpadding="5" cellspacing="5">
	
	   <tr>
		 <td height="464" valign="top" bgcolor="#FFCC66"><div align="center">
		   <p align="center" class="center"><span class="gill50red"><span class="gill85red">UPCOMING</span></span><br />
			 <span class="vivaldi50red">-Tours-</span><br />
			 <a href="tours.php"><img src="images/upcomingtours/rotate.php" alt="Click here to visit our tours page! Download brochures, view our upcoming tours and even book online!" width="250" height="500" border="0"></a><br />
			 <br />
		   </p>
			 </p>
		   </p>
		 </p>
		 </div></td>
		 </tr>
	  </table>
	   
	  <p>&nbsp;</p></td>
	</tr>
	<tr>
	 <td align="left" valign="top" bgcolor="#FFFFCC" class="Arial" ><table width="520" border="0" align="center" cellpadding="5" cellspacing="5">
	
	   <tr>
		 <td bgcolor="#FFCC66"><p><a href="http://www.flickr.com/photos/steamrail" target="_blank"><img src="images/srvgallery.png" width="425" height="50" border="0" /></a><br />
		   <span class="arial16nobold">(via <a href="http://www.flickr.com/photos/steamrail" target="_blank">Flickr</a>)<br />
		   See the latest images of recent tours, as well as our locomotives and rollingstock...</span></p>
		   <p><span class="arial16nobold">We are currently using our &quot;Flickr&quot; group for  images and plans are in place to link this back to our website. Our old  &quot;Gallery&quot; software is currently offline so this means the About Us  pages for our Steam, Electric, Diesel and Carriage pages do not contain photos  at this point in time. We hope to have this rectified as soon as possible. Some latest  photos have also been uploaded to our Facebook page in the interim.</span></p></td>
	   </tr>
	 </table></td>
	</tr>
	<tr>
	 <td height="19" align="left" valign="top" bgcolor="#FFFFCC" class="Arial" >&nbsp;</td>
	</tr>
	<tr>
	 <td height="269" colspan="2" align="left" valign="top" bgcolor="#FFFFCC"><div align="center">
	
	   <table width="840" border="0" cellspacing="0" cellpadding="5">
		 <tr>
		   <td width="830" height="125" colspan="3" valign="top" bgcolor="#FFCC66" class="gill50white"><table width="831" border="0" cellspacing="0" cellpadding="0">
			 <tr>
			   <td width="652" height="62" class="Gill50backCTR">ANNOUNCEMENTS AND UPDATES</td>
			   <td width="179" class="Gill50backCTR"><a href="http://www.facebook.com/steamrail" target="_blank"><img src="images/facebooklogo.gif" alt="" width="144" height="44" border="0" align="middle" /></a></td>
			   </tr>
			 <tr>
	
			   <td height="53" colspan="2" class="gill50white">                 <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
				 <tr>
				   <td bgcolor="#F5F5F5"><div class="fb-like-box" data-href="https://www.facebook.com/steamrail" data-width="750" data-show-faces="false" data-stream="true" data-header="false"></div></td>
				 </tr>
			   </table>                </td>
			   </tr>
			 </table></td>
		 </tr>
		 </table>
	   <br />
	   <div align="center">
	     <table width="840" border="0" cellspacing="0" cellpadding="5">
	       <tr>
	         <td width="830" height="125" colspan="3" valign="top" bgcolor="#FFCC66" class="gill50white"><table width="831" border="0" cellspacing="0" cellpadding="0">
	           <tr>
	             <td width="652" height="22" class="Gill50backCTR">&nbsp;</td>
	             <td width="179" class="Gill50backCTR">&nbsp;</td>
	             </tr>
	           <tr>
	             <td height="19" colspan="2" span class="arial14bold">&nbsp;</td>
	             </tr>
	           </table></td>
            </tr>
          </table>
	   </div>
	   <p><br />
        </p>
	
	 </div></td>
	</tr>
</table>

<?php require_once("footer.php"); ?>