<?php
include('include/connection.php');
error_reporting(0);

$result=mysql_query("SELECT * FROM domestictour WHERE destinationname like 
'%".$_POST['destination']."%' and destinationtype LIKE '%".
$_POST['packages']."%'");
	 /*$query = "SELECT * FROM 
domestictour WHERE 1=1 ";

if($_POST['destinationname'])
    $query .= " AND destinationname like '%". $_POST['destination'] . "%' ";

if($_POST['packages'])
    $query .= " AND destinationtype like '%". $_POST['packages'] . "%' ";*/

/*if($_POST['city'])
   $query .= " AND city like '%". $_POST['city'] . "%' ";*/

//$result = mysql_query($sql);
		
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Aapka Sewak</title>


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
        <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fa fa-sliders"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>Color Scheme</p>
                <div class="predefined_styles" id="styleswitch_area">
                    <a class="styleswitch" href="rentals-search-2c392.html?default=true" style="background:#ED8323;"></a>
                    <a class="styleswitch" href="#" data-src="bright-turquoise" style="background:#0EBCF2;"></a>
                    <a class="styleswitch" href="#" data-src="turkish-rose" style="background:#B66672;"></a>
                    <a class="styleswitch" href="#" data-src="salem" style="background:#12A641;"></a>
                    <a class="styleswitch" href="#" data-src="hippie-blue" style="background:#4F96B6;"></a>
                    <a class="styleswitch" href="#" data-src="mandy" style="background:#E45E66;"></a>
                    <a class="styleswitch" href="#" data-src="green-smoke" style="background:#96AA66;"></a>
                    <a class="styleswitch" href="#" data-src="horizon" style="background:#5B84AA;"></a>
                    <a class="styleswitch" href="#" data-src="cerise" style="background:#CA2AC6;"></a>
                    <a class="styleswitch" href="#" data-src="brick-red" style="background:#cf315a;"></a>
                    <a class="styleswitch" href="#" data-src="de-york" style="background:#74C683;"></a>
                    <a class="styleswitch" href="#" data-src="shamrock" style="background:#30BBB1;"></a>
                    <a class="styleswitch" href="#" data-src="studio" style="background:#7646B8;"></a>
                    <a class="styleswitch" href="#" data-src="leather" style="background:#966650;"></a>
                    <a class="styleswitch" href="#" data-src="denim" style="background:#1A5AE4;"></a>
                    <a class="styleswitch" href="#" data-src="scarlet" style="background:#FF1D13;"></a>
                </div>
                <div class="line"></div>
                <p>Layout</p>
                <div class="predefined_styles"><a class="btn btn-sm" href="#" id="btn-wide">Wide</a><a class="btn btn-sm" href="#" id="btn-boxed">Boxed</a>
                </div>
                <div class="line"></div>
                <p>Background Patterns</p>
                <div class="predefined_styles" id="patternswitch_area">
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/binding_light.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/binding_dark.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/dark_fish_skin.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/dimension.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/escheresque_ste.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/food.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/giftly.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/grey_wash_wall.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/ps_neutral.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/pw_maze_black.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/pw_pattern.png);"></a>
                    <a class="patternswitch" href="#" style="background-image: url(img/patterns/simple_dashed.png);"></a>
                </div>
                <div class="line"></div>
                <p>Background Images</p>
                <div class="predefined_styles" id="bgimageswitch_area">
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/bike.jpg);" data-src="img/backgrounds/bike.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/flowers.jpg);" data-src="img/backgrounds/flowers.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/wood.jpg);" data-src="img/backgrounds/wood.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/taxi.jpg);" data-src="img/backgrounds/taxi.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/phone.jpg);" data-src="img/backgrounds/phone.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/road.jpg);" data-src="img/backgrounds/road.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/keyboard.jpg);" data-src="img/backgrounds/keyboard.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/beach.jpg);" data-src="img/backgrounds/beach.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/street.jpg);" data-src="img/backgrounds/street.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/nature.jpg);" data-src="img/backgrounds/nature.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/bridge.jpg);" data-src="img/backgrounds/bridge.jpg"></a>
                    <a class="bgimageswitch" href="#" style="background-image: url(img/switcher/cameras.jpg);" data-src="img/backgrounds/cameras.jpg"></a>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <? include("header.php");?>
        

        <div class="container">
           <!-- <h1 class="page-title">Search for Rentals</h1>-->
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <form>
                            <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Where</label>
                                <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text" />
                            </div>
                            <div class="input-daterange" data-date-format="MM d, D">
                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                    <label>Check in</label>
                                    <input class="form-control" name="start" type="text" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                    <label>Check out</label>
                                    <input class="form-control" name="end" type="text" />
                                </div>
                            </div>
                            <div class="form-group form-group- form-group-select-plus">
                                <label>Guests</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />1</label>
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="options" />2</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />3</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />4</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />4+</label>
                                </div>
                                <select class="form-control hidden">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option selected="selected">5</option>
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
                            <div class="form-group form-group-select-plus">
                                <label>Rooms</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="options" />1</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />2</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />3</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />4</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" />4+</label>
                                </div>
                                <select class="form-control hidden">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option selected="selected">5</option>
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
                            <input class="btn btn-primary mt10" type="submit" value="Search for Hotels" />
                        </form>
                    </aside>
                </div>
                <div class="col-md-9">
                    
                    
                    <div class="gap"></div>
                    <h3 class="mb20">Domestic Tour Packages</h3>
                    <div class="row row-wrap">
                    <?php
					while($row = mysql_fetch_array($result)) {
						?>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="domestic/<?php echo $row['destinationimage'];?>" alt="Image Alternative text" title="The pool" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                   <!-- <ul class="icon-group text-tiny text-color">
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
                                    </ul>-->
                                    <h5 class="thumb-title"><a class="text-darken" href="#"><?php echo $row['destinationname'];?></a></h5>
                                    <p class="mb0">
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 5</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color"><?php echo $row['price'];?></span><small> /person</small>
                                    </p>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                       <!-- <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_porto_bay_serra_golf_suite2_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Luxury Studio in Manhattan NYC</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> Jamaica, NY (Kennedy Airport (JFK))</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 6</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$232</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_2_800x600.jpg" alt="Image Alternative text" title="hotel 2" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Duplex Greenwich</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> Jamaica, NY (Kennedy Airport (JFK))</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$216</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_porto_bay_serra_golf_suite_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Soho Art Gallery Massive Lu...</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$224</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/lhotel_porto_bay_sao_paulo_lobby_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">East Village Apartment</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> East Elmhurst, NY (LaGuardia Airport (LGA))</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$164</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_porto_bay_liberdade_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Midtown Manhattan Oversized</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> Long Island City, NY (Long Island City - Astoria)</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$226</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/lhotel_porto_bay_sao_paulo_luxury_suite_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">NyCityStay Greenwich Village</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> Brooklyn, NY (Brooklyn)</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 3</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$297</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_porto_bay_rio_internacional_de_luxe_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Manhattan Beautiful Loft Ex...</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Times Square)</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$299</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="img/hotel_porto_bay_serra_golf_living_room_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
                                        <h5 class="hover-title-center">Book Now</h5>
                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
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
                                    <h5 class="thumb-title"><a class="text-darken" href="#">NYC One Badroom in Midtown ...</a></h5>
                                    <p class="mb0"><small><i class="fa fa-map-marker"></i> Jamaica, NY (Kennedy Airport (JFK))</small>
                                    </p>
                                    <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign clearfix mt5 mb5">
                                        <li rel="tooltip" data-placement="top" title="Sleeps"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 4</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bedrooms"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                        <li rel="tooltip" data-placement="top" title="Bathrooms"><i class="im im-shower"></i><span class="booking-item-feature-sign">x 1</span>
                                        </li>
                                    </ul>
                                    <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$196</span><small> /night</small>
                                    </p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="gap gap-small"></div>
                </div>
            </div>
        </div>



        <footer id="main-footer">
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
        </footer>

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



