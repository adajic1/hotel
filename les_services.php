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
			
			nav_link_el = $("a[title='Nav Link 3']")[0];
			$(nav_link_el).css({"text-decoration": "underline"});
			
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

			<a href="navette_aeroport.php" style="text-decoration: none; color: black;">NAVETTE AEROPORT</a> <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> - <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> 
			<a href="conciergerie.php" style="text-decoration: none; color: black;">CONCIERGERIE</a> <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> - <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> 
			<a href="restaurant.php" style="text-decoration: none; color: black;">RESTAURANT</a> <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> - <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> 
			<a href="salondethe.php" style="text-decoration: none; color: black;">SALONDETHE</a> 
			
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>	
					<td></td>								
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="35%">
						<a href="navette_aeroport.php" style="text-decoration: none; color: black;">
						<img src="images/les_services_1.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Navette aéroport / gare maritime
								</b></font><br>
								Aller –Retour, sur réservation
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="navette_aeroport.php" class="yellow_button">En savoir plus</a>
						</div>	
						</a>		
					</td>
					<td width="20px"></td>
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="35%">
						<a href="conciergerie.php" style="text-decoration: none; color: black;">
						<img src="images/les_services_2.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Conciergerie
								</b></font><br>
								Un besoin, une envie, matin et<br>
								soir nous répondons à vos demandes
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="conciergerie.php" class="yellow_button">En savoir plus</a>
						</div>	
						</a>		
					</td>	
					<td></td>				
				</tr>
			</table>		
			
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
				
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>	
					<td></td>								
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="35%">
						<a href="restaurant.php" style="text-decoration: none; color: black;">
						<img src="images/les_services_3.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Restaurant
								</b></font><br>
								Pour tous vos déplacements, les chauffeurs de l’hôtel sont à votre écoute
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="restaurant.php" class="yellow_button">En savoir plus</a>
						</div>	
						</a>		
					</td>
					<td width="20px"></td>
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="35%">
						<a href="salondethe.php" style="text-decoration: none; color: black;">
						<img src="images/les_services_4.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Salondethe
								</b></font><br>
								Massage; Manicure; Pédicure; Esthéticienne…
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="salondethe.php" class="yellow_button">En savoir plus</a>
						</div>	
						</a>		
					</td>	
					<td></td>				
				</tr>
			</table>
			
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