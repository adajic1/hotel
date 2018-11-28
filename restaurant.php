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
			<a href="#" style="text-decoration: none; color: blue;"><b>RESTAURANT</b></a> <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> - <?php for($i=0; $i<8; $i++) print "&nbsp;"; ?> 
			<a href="salondethe.php" style="text-decoration: none; color: black;">SALONDETHE</a> 
			
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>		
					<td></td>							
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="65%">
						<img src="images/012.jpg" width="100%" height="175px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Restaurant
								</b></font>
							</font>
						</div>    							
					</td>
					<td></td>						
				</tr>
				<tr>
					<td></td>
					<td style="border-width: 1px; border-style: solid; border-color: #5e68ee#5e68ee; padding: 10px; border-top: none;">
						<b>Restaurant</b><br>
						<p>
						The English edition of Wikipedia has grown to 5,757,526 articles, equivalent to over 2,500 print volumes of the Encyclopædia Britannica. Including all language editions, Wikipedia has over 48 million articles,[1] equivalent to over 19,000 print volumes.
						</p><p>
						Wikipedia's Main Page as it appeared on 20 December 2001.
						</p><p>
						Wikipedia began with its launch on 15 January 2001, two days after the domain was registered[2] by Jimmy Wales and Larry Sanger. Its technological and conceptual underpinnings predate this; the earliest known proposal for an online encyclopedia was made by Rick Gates in 1993,[3] but the concept of a free-as-in-freedom online encyclopedia (as distinct from mere open source)[4] was proposed by Richard Stallman in December 2000.[5]
						<p>
						Crucially, Stallman's concept specifically included the idea that no central organization should control editing. This characteristic was in stark contrast to contemporary digital encyclopedias such as Microsoft Encarta, Encyclopædia Britannica, and even Bomis's Nupedia, which was Wikipedia's direct predecessor. In 2001, the license for Nupedia was changed to GFDL, and Wales and Sanger launched Wikipedia using the concept and technology of a wiki pioneered in 1995 by Ward Cunningham.[6] Initially, Wikipedia was intended to complement Nupedia, an online encyclopedia project edited solely by experts, by providing additional draft articles and ideas for it. In practice, Wikipedia quickly overtook Nupedia, becoming a global project in multiple languages and inspiring a wide range of other online reference projects.
						</p>
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