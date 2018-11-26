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
			
			LOCATION			
			
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