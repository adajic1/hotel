<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="stylesheet" href="css/style.css">
	<script src="javascript/jquery-3.3.1.min.js"></script>
	<script src="javascript/modernizr.js"></script>
	<!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
		function loaded() {
			doc_width = $(document).width()*95./100;
			$('#layout_table').attr('width', doc_width);
						
			$('.modal-toggle').on('click', function(e) {
			  e.preventDefault();
			  $('.modal').toggleClass('is-visible');
			});
		}		
		
		function subscribe() {
			var postData = $(document.getElementById("subscriber_form")).serialize();
			$.ajax({
			    type: "post",
			    url: "subscribe.php",
			    data: postData,
			    contentType: "application/x-www-form-urlencoded",
			    async: true,
			    success: function(responseData, textStatus, jqXHR) {
			        $($(".modal-heading")[0]).html("Inscription Newsletter API Message");
			        $($(".modal-text")[0]).html(responseData);
			        $('.modal').toggleClass('is-visible');
			    },
			    error: function(jqXHR, textStatus, errorThrown) {
			        console.log(jqXHR);
			        console.log(textStatus);
			        console.log(errorThrown);
			    }
			});
		}
	</script>
</head>
<body class="no_margin-no_padding" onload="loaded();" style="font-family: Georgia, serif;">
	<center>
	<noscript>
	<br>Please enable Javascript to see the page
	</noscript>
	<table cellspacing="0" cellpadding="0" border="0" id="layout_table" width="95%">
		<tr><td align="center">
		
			<?php require "_header.php"; ?>
			
			<?php require "_navigation.php"; ?>
			
		    <h3 style="padding: 0px; margin: 0px;">Emplacement sur google maps</h3>
		    <hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
		    <table cellspacing="0" cellpadding="0" border="0">
		    	<tr>
		    		<td width="220px" valign="top" style="white-space: nowrap;">
		    			<font style="font-family: Arial;"><i>			    			
			    			Rue: 17 Saint Louis en l'Ile<br>
			    			La ville: Paris<br>
			    			Latitude: 48.83218163<br>
			    			Longitude: 2.34832764
		    			</i></font>
		    		</td>
		    		<td align="center"><img src="images/map.jpg"></td>
		    		<td width="100px"></td>
		    	</tr>
		    </table>		 
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
		    <div id="map"></div> 
		    <script> 
		      function initMap() { 
		        var paris = {lat: 48.83218163, lng: 2.34832764}; 
		        var map = new google.maps.Map(document.getElementById('map'), { 
		          zoom: 12, 
		          center: paris 
		        }); 
		        var marker = new google.maps.Marker({ 
		          position: paris, 
		          map: map 
		        }); 
		      } 
		    </script> 
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2bXKNDezDf6YNVc-SauobynNHPo4RJb8&callback=initMap"> 
		    </script> 			
			
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			
			<?php include "_footer.php"; ?>
			
			<?php include "_modal.php"; ?>
			
		</td></tr>
	</table>
	</center>
	<script type="text/javascript">	
		(function($){				
			//cache nav
			var nav = $("#topNav");
					
			//add indicators and hovers to submenu parents
			nav.find("li").each(function() {
				if ($(this).find("ul").length > 0) {
					
					//show subnav on hover
					$(this).mouseenter(function() {
						$(this).find("ul").stop(true, true).slideDown();
					});
							
					//hide submenus on exit
					$(this).mouseleave(function() {
						$(this).find("ul").stop(true, true).slideUp();
					});
				}
			});
			
			$("#layout_table")[0].style.visibility = "visible";
		})(jQuery);
	</script>
</body>
</html>