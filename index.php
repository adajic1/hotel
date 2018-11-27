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
			
			nav_link_el = $("a[title='Nav Link 1']")[0];
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
			
			<table cellspacing="0" cellpadding="0" border="1" width="100%"><tr><td>
				 <!-- #region Jssor Slider Begin -->
			    <script src="javascript/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
			    <script type="text/javascript">
			        jQuery(document).ready(function ($) {

			            var jssor_1_SlideshowTransitions = [
			              {$Duration:800,$Opacity:2}
			            ];

			            var jssor_1_options = {
			              $AutoPlay: 1,
			              $SlideshowOptions: {
			                $Class: $JssorSlideshowRunner$,
			                $Transitions: jssor_1_SlideshowTransitions,
			                $TransitionsOrder: 1
			              },
			              $ArrowNavigatorOptions: {
			                $Class: $JssorArrowNavigator$
			              },
			              $BulletNavigatorOptions: {
			                $Class: $JssorBulletNavigator$
			              },
			              $Idle: 3000,
			              $PauseOnHover: 0
			            };

			            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

			            /*#region responsive code begin*/

			            var MAX_WIDTH = 2000;

			            function ScaleSlider() {
			                var containerElement = jssor_1_slider.$Elmt.parentNode;
			                var containerWidth = containerElement.clientWidth;
			                if (containerWidth) {
			                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
			                    jssor_1_slider.$ScaleWidth(expectedWidth);
			                }
			                else {
			                    window.setTimeout(ScaleSlider, 30);
			                }
			            }

			            ScaleSlider();

			            $(window).bind("load", ScaleSlider);
			            $(window).bind("resize", ScaleSlider);
			            $(window).bind("orientationchange", ScaleSlider);
			            /*#endregion responsive code end*/
			        });
			    </script>
			    <style>
			        /*jssor slider loading skin spin css*/
			        .jssorl-009-spin img {
			            animation-name: jssorl-009-spin;
			            animation-duration: 1.6s;
			            animation-iteration-count: infinite;
			            animation-timing-function: linear;
			        }

			        @keyframes jssorl-009-spin {
			            from { transform: rotate(0deg); }
			            to { transform: rotate(360deg); }
			        }

			        /*jssor slider bullet skin 051 css*/
			        .jssorb051 .i {position:absolute;cursor:pointer;}
			        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
			        .jssorb051 .i:hover .b {fill-opacity:.7;}
			        .jssorb051 .iav .b {fill-opacity: 1;}
			        .jssorb051 .i.idn {opacity:.3;}

			        /*jssor slider arrow skin 051 css*/
			        .jssora051 {display:block;position:absolute;cursor:pointer;}
			        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
			        .jssora051:hover {opacity:.8;}
			        .jssora051.jssora051dn {opacity:.5;}
			        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
			    </style>
			    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:250px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/spin.svg" />
			        </div>
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:250px;overflow:hidden;">
			            <div>
			                <a href="http://google.com"><img data-u="image" src="images/001.jpg" /></a>
			            </div>
			            <div>
			                <img data-u="image" src="images/002.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/003.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/004.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/005.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/006.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/007.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/008.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/009.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/010.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/011.jpg" />
			            </div>
			            <div>
			                <img data-u="image" src="images/012.jpg" />
			            </div>
			        </div>
			        <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			            <div data-u="prototype" class="i" style="width:16px;height:16px;">
			                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
			                </svg>
			            </div>
			        </div>
			        <!-- Arrow Navigator -->
			        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			            </svg>
			        </div>
			        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			            </svg>
			        </div>
			    </div>
			    <!-- #endregion Jssor Slider End -->
			</td></tr></table>
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="32%">
						<img src="images/index_1.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								A la une
								</b></font><br>								
								Offre du moment
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">Beneficiez de nos offres</a>
						</div>			
					</td>
					<td></td>
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="32%">
						<img src="images/index_2.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Bistronomie
								</b></font><br>								
								Focus sur le chef: RENVOYER A LA PAGE CHEF
								une cuisine alliant les meilleurs produits du terroirs, à la bistronomie française…
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">Decouvrez une innovation culinaire</a>
						</div>			
					</td>
					<td></td>
					<td align="center" valign="middle" style="position: relative; border-width: 1px; border-style: solid; border-color: #000000;" width="32%">
						<img src="images/index_3.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">							
							<font color="#ffffff" class="alpha60bg70" style="font-size: 16px;">
								<font style="font-size: 18px;"><b>
								Une île à découvrir
								</b></font><br>								
								Mettre en avant les différentes propositions de l’hôtel en mettant à jour régulièrement:
								Bateau, Rando, Termes, Diner en auberge…
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">En savoir plus</a>
						</div>			
					</td>
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