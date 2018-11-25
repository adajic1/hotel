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
		function setLayoutWidth() {
			doc_width = $(document).width()*90./100;
			$('#layout_table').attr('width', doc_width);
		}		
	</script>
</head>
<body class="no_margin-no_padding" onload="setLayoutWidth();" style="font-family: Georgia, serif;">
	<center>
	<noscript>
	<br>Please enable Javascript to see the page
	</noscript>
	<table cellspacing="0" cellpadding="0" border="0" id="layout_table" width="95%">
		<tr><td align="center">
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>
					<td width="33%" class="left_gradient"></td>
					<td width="34%" rowspan="2" align="center">
						<img src="images/logo.png" alt="L'hotel Palazzu" width="300" height="139">
					</td>
					<td width="33%" align="center" class="right_gradient"><br><a href="#">FR/EN</a>&nbsp;</td>
				</tr>
				<tr>
					<td align="center" class="left_gradient" valign="middle">
					<img src="images/loc.png" width="80px" style="vertical-align: middle;">
					<a href="#">Find us</a>
					</td>
					<td align="center" class="right_gradient">
						<a href="#" class="yellow_button">RESERVATIONS</a>
					</td>
				</tr>
			</table>
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr><td align="center">
					<nav id="topNav">
			        	<ul>
			        		<table cellspacing="0" cellpadding="0" border="0" width="100%">
				        		<tr>
					        		<td align="center" width="1" style="white-space: nowrap;">
						                <li><a href="#" title="Nav Link 1">Nav Link 1</a></li>
						            </td>
						            <td></td>
						            <td align="center" width="1" style="white-space: nowrap;">
						                <li>
						                    <a href="#" title="Nav Link 2">Nav Link 2</a>
						                    <ul>  
						                        <li><a href="#" title="Sub Nav Link 1">Sub Nav Link 1</a></li>
						                        <li><a href="#" title="Sub Nav Link 2">Sub Nav Link 2</a></li>
						                        <li><a href="#" title="Sub Nav Link 3">Sub Nav Link 3</a></li>
						                        <li><a href="#" title="Sub Nav Link 4">Sub Nav Link 4</a></li>
						                        <li class="last"><a href="#" title="Sub Nav Link 5">Sub Nav Link 5</a></li>
						                    </ul>                
						                </li>
						            </td>
						            <td></td>
						            <td align="center" width="1" style="white-space: nowrap;">
						                <li><a href="#" title="Nav Link 3">Nav Link 3</a></li>
						            </td>
						            <td></td>
						            <td align="center" width="1" style="white-space: nowrap;">
						                <li><a href="#" title="Nav Link 4">Nav Link 4</a></li>
						            </td>
						            <td></td>
						            <td align="center" width="1" style="white-space: nowrap;">
						                <li><a href="#" title="Nav Link 5">Nav Link 5</a></li>
					                </td>
					                <td></td>
					                </td><td align="center" width="1" style="white-space: nowrap;">
						                <li><a href="#" title="Nav Link 6">Nav Link 6</a></li>
					                </td>
				                </tr>
			                </table>
			            </ul>
			        </nav>
				</td></tr>
			</table>
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
			              $Idle: 3000
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
					<td align="center" valign="middle" style="position: relative;" width="32%">
						<img src="images/index_1.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left; border-width: 1px; border-style: solid; border-color: #000000;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">							
							<font color="#ffffff" class="alpha60bg70">
								<b>Writing text above image</b>								
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">Beneficiez de nos offres</a>
						</div>			
					</td>
					<td></td>
					<td align="center" valign="middle" style="position: relative;" width="32%">
						<img src="images/index_2.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left; border-width: 1px; border-style: solid; border-color: #000000;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">							
							<font color="#ffffff" class="alpha60bg70">
								<b>Writing text above image</b>								
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">Beneficiez de nos offres</a>
						</div>			
					</td>
					<td></td>
					<td align="center" valign="middle" style="position: relative;" width="32%">
						<img src="images/index_3.jpg" width="100%" height="250px" style="margin:0px; padding: 0px; float: left; border-width: 1px; border-style: solid; border-color: #000000;">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">							
							<font color="#ffffff" class="alpha60bg70">
								<b>Writing text above image</b>								
							</font>
						</div>
    					<div style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;">							
							<a href="#" class="yellow_button">Beneficiez de nos offres</a>
						</div>			
					</td>
				</tr>
			</table>			
			
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>
					<td width="32%" class="left_gradient">
						
					</td>
					<td align="center" width="36%">
						<font style="font-size: 14px;">
							17, Rue Bonaparte 20000 Ajaccio | 04 95 50 00 20<br>
							Suivez-nous:RéseauxSociaux
						</font>
					</td>
					<td width="32%" class="right_gradient">
						<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
						Inscription Newsletter:<br>
						<form action="#">
							<input type="text" name="email" size="35"> <input type="submit" value="Subscribe">
						</form>
						<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
					</td>
				</tr>
			</table>
			<hr style="height: 15px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
			Mentions légales –Nous contacter
			<hr style="height: 50px; width: 99%; margin:0 auto; background: none; border:0 none;"/>
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