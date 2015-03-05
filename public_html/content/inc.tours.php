<div class="main">

	<h1>Upcoming Tours</h1>
	<table class="data-grid margin-bottom" id="upcomingTours">
		<thead>
			<tr>
				<th>Date</th>
				<th>Tour name/Website</th>
				<th>Destination</th>
				<th>Brochure</th>
				<th>Buy tickets</th>
				<th>Facebook</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	
	<h2>2015 Proposed tours</h2>
	<table class="data-grid margin-bottom">
		<thead>
			<tr>
				<th>Date</th>
				<th>Tour name/Website</th>
				<th>Destination</th>
				<th>Brochure</th>
				<th>Buy tickets</th>
				<th>Facebook</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>
		</tbody>
	</table>
	
	
	<h2>Past tours</h2>
	
	
	
	<div class="flexbox-container noborder">
		<div class="flexbox thirds">
			<h2>Conditions of Travel</h2>
			
			<h3>Conditions</h3>
			<p>Travellers on Steamrail trains are bound by Steamrail's standard conditions of travel. Acceptance of a ticket is deemed an acceptance of these regulations. While we endeavour to operate this tour as advertised, it may be necessary to alter or cancel all or part of the tour due to circumstances beyond our control. On days declared to be of high fire danger and/or Total Fire Ban, the train will be hauled by one of Steamrail's heritage diesel locomotives. We cannot be liable for any cost incurred by you arising from any late running of this tour.</p>
			<p>Adults must take responsibility at all times for infants and other persons in their care.</p>
			
			<h3>Rail and Sail conditions</h3>
			<p>In particular, the Rail and Sail may be subject to extreme weather conditions. Due to high fire danger the train will be hauled by one of Steamrail's heritage diesel locomotives. In the event of very rough conditions forecast on Port Phillip Bay, the Victoria Star may be unable to cruise. In this case the train will be increased in size and all patrons conveyed in both directions by rail, and a partial refund, or discount on the next Rail and Sail, offered.</p>
			
			<h3>Refunds</h3>
			<p>Steamrail will offer refunds if you are unable to travel due to illness or other serious cause, providing that tickets are returned and you notify us 7 days prior to day of travel. A cancellation fee will be charged to cover our costs.</p>
			
			<h3>Group Discounts</h3>
			<p>We offer group discounts for parties of 16 or more on most tours. If you have a group of 50 or more, a special private carriage may be available, while for larger groups your own chartered Vintage Train may be an option.</p>
			
			<h3>Seniors</h3>
			<p>We welcome holders of Seniors card. On request, during the tour, the valid card must be produced for each seat booked at the reduced rate.</p>
			
			<h3>Under 16</h3>
			<p>Children under 16 travel at a reduced rate. If you are bringing small children, please let us know.</p>
			
			<h3>Smoking</h3>
			<p>On board smoking is not permitted.</p>
			
			<h3>Alcohol</h3>
			<p>Strickly no BYO alcohol is to be consumed onboard. The train has a licensed bar, with a range of wines, ales and mixed drinks at reasonable prices.</p>
		</div>
		
		<div class="flexbox thirds noborder">
			<h2>Important Information</h2>
			
			<h3>Regional Fast Rail</h3>
			<p>Due to circumstances beyond Steamrail's control, all Steamrail trains operating on the Regional Fast Rail Network (Geelong, Traralgon, Bendigo and Ballarat) are restricted to 80km/h running. This can from time to time have an impact on operating tours along these lines. V/Line Network Access operational needs can from time to time affect the operation of various Steamrail tours.</p>
			
			<h3>Fire Restrictions</h3>
			<p>Fire Restrictions can be applied across most areas of Victoria by CFA, when fire danger is high. Typically this is over the summer period of November through to April. Restrictions are applied in small areas at a time. View a map of <a href="http://cfaonline.cfa.vic.gov.au/mycfa/Show?pageId=showFrImagePublic">current restrictions</a> across Victorian municipalities.</p>
			
			<h3>Elecrail</h3>
			<p>Elecrail still has no trips planned at this stage, but talks are progressing with the goal of getting Elecrail operational again. Hopefully it will not be long until Elecrail is back on the rails.</p>
			
			<h3>Cross Posting of Proposed Tour Dates</h3>
			<p>This is a quick note for the editors of some other websites. Please feel free to cross post the information listed in the main section of this page but please refrain from referring to trips listed solely on the Tour Calendar. Trip information listed on the Calendar are subject to change pending operational needs. Trips are not confirmed as running until they are listed on the main page. Thank you.</p>
			
			<h3>Departure Information and Enquiries</h3>
			<p>The train departs and arrives at Southern Cross Station, also picking up and setting down at selected suburban stations. It is advised to contact Steamrail's Information Line on (03) 9397 1953 at least two days prior to departure to confirm any timetabling arrangements.</p>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$.getJSON("http://api.railpage.com.au/v2/organisation/4/events/upcoming", function(data) {
			if (data.stat == "ok") {
				$target = $("#upcomingTours tbody");
				
				for (var i in data.events) {
					for (var z in data.events[i]) {
						$tr = $("<tr />");
						$tr.append("<td>" + data.events[i][z].date.date + "</td>");
						$tr.append("<td>" + data.events[i][z].title + "</td>");
						$tr.append("<td></td>");
						$tr.append("<td><a href='" + data.events[i][z].links.website + "'>Details</a></td>");
						$tr.append("<td><a href='" + data.events[i][z].links.tickets + "'>Tickets</a></td>");
						$tr.append("<td></td>");
						
						$target.append($tr);
					}
				}
			}
		});
	});
</script>