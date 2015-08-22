
<!DOCTYPE HTML>
<html>



<head>
	<title>Traveler - Hotel details 3</title>


	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta name="keywords" content="Template, html, premium, themeforest" />
	<meta name="description" content="Traveler - Premium template for travel companies">
	<meta name="author" content="Tsoy">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
	<!-- /GOOGLE FONTS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<script src="js/modernizr.js"></script>

	<link rel="stylesheet" href="css/switcher.css" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/salem.css" title="salem" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/mandy.css" title="mandy" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/green-smoke.css" title="green-smoke" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/horizon.css" title="horizon" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/cerise.css" title="cerise" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/brick-red.css" title="brick-red" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/shamrock.css" title="shamrock" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/studio.css" title="studio" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/leather.css" title="leather" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/denim.css" title="denim" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="css/schemes/scarlet.css" title="scarlet" media="all" />
</head>

<body>

	<!-- FACEBOOK WIDGET -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- /FACEBOOK WIDGET -->
	<div class="global-wrap">

		<?php 
		include("header.php");
		include("connection.php") ;
		?>





		<div class="container">
           <!-- <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">United States</a>
                </li>
                <li><a href="#">New York (NY)</a>
                </li>
                <li><a href="#">New York City</a>
                </li>
                <li><a href="#">New York City Hotels</a>
                </li>
                <li class="active">InterContinental New York Barclay</li>
            </ul>-->
            <div class="booking-item-details">
            	<header class="booking-item-header">
            		<div class="row">
            			<div class="col-md-9">
            				<h2 class="lh1em">Goa</h2>
                            <!--<p class="lh1em text-small"><i class="fa fa-map-marker"></i> 6782 Sarasea Circle, Siesta Key, FL 34242</p>
                            <ul class="list list-inline text-small">
                                <li><a href="#"><i class="fa fa-envelope"></i> Hotel E-mail</a>
                                </li>
                                <li><a href="#"><i class="fa fa-home"></i> Hotel Website</a>
                                </li>
                                <li><i class="fa fa-phone"></i> +1 (546) 967-9414</li>
                            </ul>-->
                        </div>
                        <div class="col-md-3">
                        	<p class="booking-item-header-price"><small>price from</small>  <span class="text-lg">$350</span>/night</p>
                        </div>
                    </div>
                </header>
                <div class="row">
                	<div class="col-md-7">
                		<div class="tabbable booking-details-tabbable">
                            <!--<ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                                </li>
                                <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>On the Map</a>
                                </li>
                                <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-signal"></i>Rating</a>
                                </li>
                                <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-asterisk"></i>Facilities</a>
                                </li>
                            </ul>-->
                            <div class="tab-content">
                            	<div class="tab-pane fade in active" id="tab-1">
                            		<!-- START LIGHTBOX GALLERY -->
                            		<div class="row row-no-gutter" id="popup-gallery">
                            			<?php
                            			$sql ="select * from image where category='goa' and deleteflag='n'";
                            			$result=$conn->query($sql);
                            			while($row=$result->fetch_array(MYSQLI_BOTH))
                            			{
                            				?>
                            				<div class="col-md-4">
                            					<img src="img\goa\<?php echo $row['imagename'];?>" width="150" height="150">
                            				</div>
                            				<?php 
                            			}
                            			?>
                            		</div>
                            		<!-- END LIGHTBOX GALLERY -->
                            	</div>
                            	<div class="tab-pane fade" id="google-map-tab">
                            		<div id="map-canvas" style="width:100%; height:500px;"></div>
                            	</div>
                            	<div class="tab-pane fade" id="tab-3">
                            		<div class="mt20">
                            			<div class="row">
                            				<div class="col-md-8">
                            					<h4 class="lhem">Traveler rating</h4>
                            					<ul class="list booking-item-raiting-list">
                            						<li>
                            							<div class="booking-item-raiting-list-title">Exellent</div>
                            							<div class="booking-item-raiting-list-bar">
                            								<div style="width:86%;"></div>
                            							</div>
                            							<div class="booking-item-raiting-list-number">1372</div>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Very Good</div>
                            							<div class="booking-item-raiting-list-bar">
                            								<div style="width:7%;"></div>
                            							</div>
                            							<div class="booking-item-raiting-list-number">62</div>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Average</div>
                            							<div class="booking-item-raiting-list-bar">
                            								<div style="width:3%;"></div>
                            							</div>
                            							<div class="booking-item-raiting-list-number">28</div>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Poor</div>
                            							<div class="booking-item-raiting-list-bar">
                            								<div style="width:2%;"></div>
                            							</div>
                            							<div class="booking-item-raiting-list-number">9</div>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Terrible</div>
                            							<div class="booking-item-raiting-list-bar">
                            								<div style="width:1%;"></div>
                            							</div>
                            							<div class="booking-item-raiting-list-number">9</div>
                            						</li>
                            					</ul>
                            				</div>
                            				<div class="col-md-4">
                            					<h4 class="lhem">Summary</h4>
                            					<ul class="list booking-item-raiting-summary-list">
                            						<li>
                            							<div class="booking-item-raiting-list-title">Sleep</div>
                            							<ul class="icon-group booking-item-rating-stars">
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            							</ul>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Location</div>
                            							<ul class="icon-group booking-item-rating-stars">
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o text-gray"></i>
                            								</li>
                            							</ul>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Service</div>
                            							<ul class="icon-group booking-item-rating-stars">
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            							</ul>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Clearness</div>
                            							<ul class="icon-group booking-item-rating-stars">
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            							</ul>
                            						</li>
                            						<li>
                            							<div class="booking-item-raiting-list-title">Rooms</div>
                            							<ul class="icon-group booking-item-rating-stars">
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            								<li><i class="fa fa-smile-o"></i>
                            								</li>
                            							</ul>
                            						</li>
                            					</ul>
                            				</div>
                            			</div>
                            		</div><a class="btn btn-primary" href="#">Write a Review</a>
                            	</div>
                            	<div class="tab-pane fade" id="tab-4">
                            		<div class="row mt20">
                            			<div class="col-md-4">
                            				<ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            					<li><i class="im im-wi-fi"></i><span class="booking-item-feature-title">Wi-Fi Internet</span>
                            					</li>
                            					<li><i class="im im-parking"></i><span class="booking-item-feature-title">Parking</span>
                            					</li>
                            					<li><i class="im im-plane"></i><span class="booking-item-feature-title">Airport Transport</span>
                            					</li>
                            					<li><i class="im im-bus"></i><span class="booking-item-feature-title">Shuttle Bus Service</span>
                            					</li>
                            					<li><i class="im im-fitness"></i><span class="booking-item-feature-title">Fitness Center</span>
                            					</li>
                            				</ul>
                            			</div>
                            			<div class="col-md-4">
                            				<ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            					<li><i class="im im-pool"></i><span class="booking-item-feature-title">Pool</span>
                            					</li>
                            					<li><i class="im im-spa"></i><span class="booking-item-feature-title">SPA</span>
                            					</li>
                            					<li><i class="im im-restaurant"></i><span class="booking-item-feature-title">Restaurant</span>
                            					</li>
                            					<li><i class="im im-wheel-chair"></i><span class="booking-item-feature-title">Wheelchair Access</span>
                            					</li>
                            					<li><i class="im im-business-person"></i><span class="booking-item-feature-title">Business Center</span>
                            					</li>
                            				</ul>
                            			</div>
                            			<div class="col-md-4">
                            				<ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            					<li><i class="im im-children"></i><span class="booking-item-feature-title">Children Activites</span>
                            					</li>
                            					<li><i class="im im-casino"></i><span class="booking-item-feature-title">Casino & Gambling</span>
                            					</li>
                            					<li><i class="im im-bar"></i><span class="booking-item-feature-title">Bar/Lounge</span>
                            					</li>
                            				</ul>
                            			</div>
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<?php 
                    	$sql="select content from content where page_name='goa'";
                    	$result=$conn->query($sql);
                    	$row=$result->fetch_assoc();
                    	echo $row['content'];
                    	$result->free();
                    	?>
                    </div>

                </div> 
            </div>
        </div>
        <div class="gap"></div>
        <h3>Available Rooms</h3>
        <div class="row">
        	<div class="col-md-8">
        		<div class="booking-item-dates-change">
        			<form>
        				<div class="row">
        					<div class="col-md-6">
        						<div class="input-daterange" data-date-format="MM d, D">
        							<div class="row">
        								<div class="col-md-6">
        									<div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
        										<label>Check in</label>
        										<input class="form-control" name="start" type="text" />
        									</div>
        								</div>
        								<div class="col-md-6">
        									<div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
        										<label>Check out</label>
        										<input class="form-control" name="end" type="text" />
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-md-2">
        						<div class="form-group">
        							<label>Adults</label>
        							<select class="form-control">
        								<option>1</option>
        								<option>2</option>
        								<option>3</option>
        								<option>4</option>
        								<option>5</option>
        								<option>6</option>
        								<option>7</option>
        								<option>8</option>
        								<option>9</option>
        								<option>10</option>
        								<option>11</option>
        								<option>12</option>
        								<option>13</option>
        								<option>14</option>
        							</select>
        						</div>
        					</div>
        					<div class="col-md-2">
        						<div class="form-group">
        							<label>Children</label>
        							<select class="form-control">
        								<option>0</option>
        								<option>1</option>
        								<option>2</option>
        								<option>3</option>
        								<option>4</option>
        								<option>5</option>
        								<option>6</option>
        								<option>7</option>
        								<option>8</option>
        								<option>9</option>
        								<option>10</option>
        								<option>11</option>
        								<option>12</option>
        								<option>13</option>
        								<option>14</option>
        							</select>
        						</div>
        					</div>
        					<div class="col-md-2">
        						<div class="form-group">
        							<label>Rooms</label>
        							<select class="form-control">
        								<option>1</option>
        								<option>2</option>
        								<option>3</option>
        								<option>4</option>
        								<option>5</option>
        								<option>6</option>
        								<option>7</option>
        								<option>8</option>
        								<option>9</option>
        								<option>10</option>
        							</select>
        						</div>
        					</div>
        				</div>
        			</form>
        		</div>
        		<div class="gap gap-small"></div>
        		<ul class="booking-list">
        			<li>
        				<a class="booking-item">
        					<div class="row">
        						<div class="col-md-3">
        							<img src="img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
        						</div>
        						<div class="col-md-6">
        							<h5 class="booking-item-title">Superior Penthouse</h5>
        							<p class="text-small">Semper a dui sapien proin dis tellus eu praesent sodales posuere cum hendrerit</p>
        							<ul class="booking-item-features booking-item-features-sign clearfix">
        								<li rel="tooltip" data-placement="top" title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 3</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">410</span>
        								</li>
        							</ul>
        							<ul class="booking-item-features booking-item-features-small clearfix">
        								<li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Mini Bar"><i class="im im-bar"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Bathtub"><i class="im im-bathtub"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Kitchen"><i class="im im-kitchen"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="SPA tub"><i class="im im-spa"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Terrace"><i class="im im-terrace"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Washing Machine"><i class="im im-washing-machine"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Pool"><i class="im im-pool"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-md-3"><span class="booking-item-price">$444</span><span>/night</span><span class="btn btn-primary">Book</span>
        						</div>
        					</div>
        				</a>
        			</li>
        			<li>
        				<a class="booking-item">
        					<div class="row">
        						<div class="col-md-3">
        							<img src="img/hotel_2_800x600.jpg" alt="Image Alternative text" title="hotel 2" />
        						</div>
        						<div class="col-md-6">
        							<h5 class="booking-item-title">Double Room with Town View</h5>
        							<p class="text-small">Penatibus arcu sollicitudin rhoncus tellus rutrum hendrerit mauris dictumst duis cursus potenti sit</p>
        							<ul class="booking-item-features booking-item-features-sign clearfix">
        								<li rel="tooltip" data-placement="top" title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 1</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Children Occupancy"><i class="im im-children"></i><span class="booking-item-feature-sign">x 1</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">400</span>
        								</li>
        							</ul>
        							<ul class="booking-item-features booking-item-features-small clearfix">
        								<li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Flat Screen TV"><i class="im im-tv"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Mini Bar"><i class="im im-bar"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Bathtub"><i class="im im-bathtub"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Kitchen"><i class="im im-kitchen"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Patio"><i class="im im-patio"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="SPA tub"><i class="im im-spa"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Terrace"><i class="im im-terrace"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Washing Machine"><i class="im im-washing-machine"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Pool"><i class="im im-pool"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-md-3"><span class="booking-item-price">$216</span><span>/night</span><span class="btn btn-primary">Book</span>
        						</div>
        					</div>
        				</a>
        			</li>
        			<li>
        				<a class="booking-item">
        					<div class="row">
        						<div class="col-md-3">
        							<img src="img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool" />
        						</div>
        						<div class="col-md-6">
        							<h5 class="booking-item-title">Family Suite</h5>
        							<p class="text-small">Dolor dolor vehicula mauris bibendum venenatis faucibus lobortis porttitor interdum inceptos inceptos integer</p>
        							<ul class="booking-item-features booking-item-features-sign clearfix">
        								<li rel="tooltip" data-placement="top" title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 1</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Children Occupancy"><i class="im im-children"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">770</span>
        								</li>
        							</ul>
        							<ul class="booking-item-features booking-item-features-small clearfix">
        								<li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Mini Bar"><i class="im im-bar"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Bathtub"><i class="im im-bathtub"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Patio"><i class="im im-patio"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Soundproof"><i class="im im-soundproof"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="SPA tub"><i class="im im-spa"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Pool"><i class="im im-pool"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-md-3"><span class="booking-item-price">$364</span><span>/night</span><span class="btn btn-primary">Book</span>
        						</div>
        					</div>
        				</a>
        			</li>
        			<li>
        				<a class="booking-item">
        					<div class="row">
        						<div class="col-md-3">
        							<img src="img/lhotel_porto_bay_sao_paulo_lobby_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
        						</div>
        						<div class="col-md-6">
        							<h5 class="booking-item-title">Standard Double room</h5>
        							<p class="text-small">Ac fames molestie aliquet primis nullam netus varius amet libero risus velit ultrices</p>
        							<ul class="booking-item-features booking-item-features-sign clearfix">
        								<li rel="tooltip" data-placement="top" title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">270</span>
        								</li>
        							</ul>
        							<ul class="booking-item-features booking-item-features-small clearfix">
        								<li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Mini Bar"><i class="im im-bar"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Patio"><i class="im im-patio"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Soundproof"><i class="im im-soundproof"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Terrace"><i class="im im-terrace"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Washing Machine"><i class="im im-washing-machine"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Pool"><i class="im im-pool"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-md-3"><span class="booking-item-price">$356</span><span>/night</span><span class="btn btn-primary">Book</span>
        						</div>
        					</div>
        				</a>
        			</li>
        			<li>
        				<a class="booking-item">
        					<div class="row">
        						<div class="col-md-3">
        							<img src="img/hotel_1_800x600.jpg" alt="Image Alternative text" title="hotel 1" />
        						</div>
        						<div class="col-md-6">
        							<h5 class="booking-item-title">Junior Suite</h5>
        							<p class="text-small">Iaculis sit laoreet sit magna vel duis primis inceptos tempor ornare class dictum</p>
        							<ul class="booking-item-features booking-item-features-sign clearfix">
        								<li rel="tooltip" data-placement="top" title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 2</span>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">320</span>
        								</li>
        							</ul>
        							<ul class="booking-item-features booking-item-features-small clearfix">
        								<li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Mini Bar"><i class="im im-bar"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Bathtub"><i class="im im-bathtub"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Kitchen"><i class="im im-kitchen"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Patio"><i class="im im-patio"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Terrace"><i class="im im-terrace"></i>
        								</li>
        								<li rel="tooltip" data-placement="top" title="Pool"><i class="im im-pool"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-md-3"><span class="booking-item-price">$373</span><span>/night</span><span class="btn btn-primary">Book</span>
        						</div>
        					</div>
        				</a>
        			</li>
        		</ul>
        	</div>
        	<div class="col-md-4">
        		<h4>Hotels Near InterContinental New York Barclay</h4>
        		<ul class="booking-list">
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/hotel_porto_bay_serra_golf_living_room_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">Waldorf Astoria New York</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star-o"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$388</span>
        						</div>
        					</div>
        				</div>
        			</li>
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/hotel_2_800x600.jpg" alt="Image Alternative text" title="hotel 2" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">New York Hilton Midtown</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star-o"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$296</span>
        						</div>
        					</div>
        				</div>
        			</li>
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">Grand Hyatt New York</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star-o"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$388</span>
        						</div>
        					</div>
        				</div>
        			</li>
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/hotel_porto_bay_liberdade_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">Holiday Inn Express Kennedy Airport</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star-half-empty"></i>
        								</li>
        								<li><i class="fa fa-star-o"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$241</span>
        						</div>
        					</div>
        				</div>
        			</li>
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">Warwick New York Hotel</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star-half-empty"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$162</span>
        						</div>
        					</div>
        				</div>
        			</li>
        			<li>
        				<div class="booking-item booking-item-small">
        					<div class="row">
        						<div class="col-xs-4">
        							<img src="img/hotel_the_cliff_bay_spa_suite_800x600.jpg" alt="Image Alternative text" title="hotel THE CLIFF BAY spa suite" />
        						</div>
        						<div class="col-xs-5">
        							<h5 class="booking-item-title">Wellington Hotel</h5>
        							<ul class="icon-group booking-item-rating-stars">
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        								<li><i class="fa fa-star"></i>
        								</li>
        							</ul>
        						</div>
        						<div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$373</span>
        						</div>
        					</div>
        				</div>
        			</li>
        		</ul>
        	</div>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>

<? include("footer.php");?>

        <!--<footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/switcher.js"></script>
    </div>
</body>



</html>



