<!DOCTYPE HTML>
<html>
<head>
    <title>Travel</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <!--<link rel="stylesheet" type="text/css" href="css/headerstyle.css">-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css");
    </style>
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

        <?php include("header.php");?>


        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-parallax" style="background-image:url(image/White_Background_04.jpg);"></div>
                <div class="bg-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="search-tabs search-tabs-bg mt50">
                                    <!--<h1>Search and Book Online</h1>-->
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a href="#tab-2" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Tour Package</span></a>
                                            </li>
                                            <li><a href="#tab-1" data-toggle="tab"><i class="fa fa-plane"></i> <span >Hotels</span></a>
                                            </li>
                                            <!--<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Rentals</span></a>
                                            </li>
                                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Cars</span></a>
                                            </li>
                                            <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                                            </li>-->
                                        </ul>
                                        <div class="tab-content">
                                          <div class="tab-pane fade in active" id="tab-2">
                                            <h4>Search for Packages</h4>
                                            <form>
                                                <div class="tabbable">
                                                    <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                        <li class="active"><a href="#flight-search-1" data-toggle="tab">Domestic Packages</a>
                                                        </li>
                                                        <li><a href="#flight-search-2" data-toggle="tab">International Packages</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="flight-search-1">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>Where are you going?</label>
                                                                        <input class="form-control" placeholder="Australia,Goa" type="text" name="destination" required />
                                                                    </div>                              </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>Product Code</label>
                                                                            <input class="typeahead form-control" placeholder="Eg:12345" type="text" name="procode" />
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="flight-search-2">



                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>Where are you going?</label>
                                                                            <input class="form-control" placeholder="Australia,Goa" type="text" name="destination" required />
                                                                        </div>                              </div>

                                                                    </div>
                                                                    <div class="row">                                       <div class="col-md-5">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>Product Code</label>
                                                                            <input class="typeahead form-control" placeholder="Eg:12345" type="text" name="procode" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>                                                      

                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-lg" type="submit">Search for Packages</button>
                                                </form>
                                            </div>






                                            <div class="tab-pane fade" id="tab-1">

                                                <form method="post" action="inquiry_action.php">
                                                    <div class="tabbable">
                                                        <!--<ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                            <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                                            </li>
                                                            <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                                            </li>
                                                        </ul>-->
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="flight-search-1">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>Where are you going?</label>
                                                                            <input class="typeahead form-control" placeholder="Eg:New Delhi" type="text" name="destination" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg">
                                                                            <label>Name</label>
                                                                            <input class="typeahead form-control" placeholder="Name" type="text" name="contactname" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg">
                                                                            <label>Contact No.</label>
                                                                            <input class="typeahead form-control" placeholder="Eg:999999999" type="text" name="contactno" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg">
                                                                            <label>Email Id</label>
                                                                            <input class="typeahead form-control" placeholder="Eg:example@gmail.com" type="text" name="emailid"  />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="input-daterange" data-date-format="M d, D">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                <label>Check-in</label>
                                                                                <input class="form-control" name="start" type="text" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                <label>Check-out</label>
                                                                                <input class="form-control" name="end" type="text" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                                <label>No. Of Person</label>
                                                                                
                                                                                <select name="person" style="width:150px; height:40px;" >
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                           <!-- <div class="tab-pane fade" id="flight-search-2">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>From</label>
                                                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>To</label>
                                                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Departing</label>
                                                                            <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                                            <label>Passngers</label>
                                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                                <label class="btn btn-primary active">
                                                                                    <input type="radio" name="options" />1</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />2</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3+</label>
                                                                            </div>
                                                                            <select class="form-control hidden">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected="selected">4</option>
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
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab-3">

                                                <form>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Where are you going?</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                    </div>
                                                    <div class="input-daterange" data-date-format="M d, D">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Check-in</label>
                                                                    <input class="form-control" name="start" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Check-out</label>
                                                                    <input class="form-control" name="end" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Rooms</label>
                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                        <label class="btn btn-primary active">
                                                                            <input type="radio" name="options" />1</label>
                                                                            <label class="btn btn-primary">
                                                                                <input type="radio" name="options" />2</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3</label>
                                                                                    <label class="btn btn-primary">
                                                                                        <input type="radio" name="options" />3+</label>
                                                                                    </div>
                                                                                    <select class="form-control hidden">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option selected="selected">4</option>
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
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>Guests</label>
                                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                                        <label class="btn btn-primary active">
                                                                                            <input type="radio" name="options" />1</label>
                                                                                            <label class="btn btn-primary">
                                                                                                <input type="radio" name="options" />2</label>
                                                                                                <label class="btn btn-primary">
                                                                                                    <input type="radio" name="options" />3</label>
                                                                                                    <label class="btn btn-primary">
                                                                                                        <input type="radio" name="options" />3+</label>
                                                                                                    </div>
                                                                                                    <select class="form-control hidden">
                                                                                                        <option>1</option>
                                                                                                        <option>2</option>
                                                                                                        <option>3</option>
                                                                                                        <option selected="selected">4</option>
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
                                                                                        </div>
                                                                                    </div>
                                                                                    <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="tab-4">
                                                                                <h2>Search for Cheap Rental Cars</h2>
                                                                                <form>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                                                <label>Pick-up Location</label>
                                                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                                                <label>Drop-off Location</label>
                                                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-daterange" data-date-format="M d, D">
                                                                                        <div class="row">
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                    <label>Pick-up Date</label>
                                                                                                    <input class="form-control" name="start" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                                                    <label>Pick-up Time</label>
                                                                                                    <input class="time-pick form-control" value="12:00 AM" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                    <label>Drop-off Date</label>
                                                                                                    <input class="form-control" name="end" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                                                    <label>Drop-off Time</label>
                                                                                                    <input class="time-pick form-control" value="12:00 AM" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="tab-5">
                                                                                <h2>Search for Activities</h2>
                                                                                <form>
                                                                                    <div class="input-daterange" data-date-format="M d, D">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                                                    <label>Where are you going?</label>
                                                                                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                    <label>From</label>
                                                                                                    <input class="form-control" name="start" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                    <label>To</label>
                                                                                                    <input class="form-control" name="end" type="text" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:100px;">
                                                                <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;  height: 300px; overflow: hidden;">

                                                                    <!-- Loading Screen -->
                                                                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                                                                        background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                                                                    </div>
                                                                    <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;

                                                                    top: 0px; left: 0px;width: 100%;height:100%;">
                                                                </div>
                                                            </div>

                                                            <!-- Slides Container -->
                                                            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 300px;
                                                            overflow: hidden;">
                                                            <div>
                                                                <img u="image" src2="img/home/01.jpg"  />
                                                            </div>
                                                            <div>
                                                                <img u="image" src2="img/home/02.jpg"   />
                                                            </div>
                                                            <div>
                                                                <img u="image" src2="img/home/03.jpg"   />
                                                            </div>
                                                            <div>
                                                                <img u="image" src2="img/home/04.jpg"   />
                                                            </div>
                                                        </div>

                                                        <style>

                                                            .jssorb05 {
                                                                position: absolute;
                                                            }
                                                            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                                                                position: absolute;
                                                                /* size of bullet elment */
                                                                width: 16px;
                                                                height: 16px;
                                                                background: url(img/b05.png) no-repeat;
                                                                overflow: hidden;
                                                                cursor: pointer;
                                                            }
                                                            .jssorb05 div { background-position: -7px -7px; }
                                                            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                                                            .jssorb05 .av { background-position: -67px -7px; }
                                                            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
                                                        </style>
                                                        <!-- bullet navigator container -->
                                                        <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                                                            <!-- bullet navigator item prototype -->
                                                            <div u="prototype"></div>
                                                        </div>
                                                        <style>
                                                            .jssora11l, .jssora11r {
                                                                display: block;
                                                                position: absolute;
                                                                /* size of arrow element */
                                                                width: 37px;
                                                                height: 37px;
                                                                cursor: pointer;
                                                                background: url(img/a11.png) no-repeat;
                                                                overflow: hidden;
                                                            }
                                                            .jssora11l { background-position: -11px -41px; }
                                                            .jssora11r { background-position: -71px -41px; }
                                                            .jssora11l:hover { background-position: -131px -41px; }
                                                            .jssora11r:hover { background-position: -191px -41px; }
                                                            .jssora11l.jssora11ldn { background-position: -251px -41px; }
                                                            .jssora11r.jssora11rdn { background-position: -311px -41px; }
                                                        </style>
                                                        <!-- Arrow Left -->
                                                        <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
                                                        </span>
                                                        <!-- Arrow Right -->
                                                        <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
                                                        </span>
                                                        <!--#endregion Arrow Navigator Skin End -->
                                                        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END TOP AREA  -->

                            <div class="gap"></div>


                            <div class="container">
                                <div class="row row-wrap" data-gutter="60">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <header class="thumb-header"><i class="fa fa-dollar box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                                            </header>
                                            <div class="thumb-caption">
                                                <h5 class="thumb-title"><a class="text-darken" href="#">Best Price Guarantee</a></h5>
                                                <p class="thumb-desc">Eu lectus non vivamus ornare lacinia elementum faucibus natoque parturient ullamcorper placerat</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <header class="thumb-header"><i class="fa fa-lock box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                                            </header>
                                            <div class="thumb-caption">
                                                <h5 class="thumb-title"><a class="text-darken" href="#">Trust & Safety</a></h5>
                                                <p class="thumb-desc">Imperdiet nisi potenti fermentum vehicula eleifend elementum varius netus adipiscing neque quisque</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="gap gap-small"></div>
                            </div>
                            <div class="bg-holder">
                                <div class="bg-mask"></div>
                                <div class="bg-parallax" style="background-image:url(img/hotel_the_cliff_bay_spa_suite_2048x1310.jpg);"></div>
                                <div class="bg-content">
                                    <div class="container">
                                        <div class="gap gap-big text-center text-white">
                                            <h2 class="text-uc mb20"></h2>
                                            <ul class="icon-list list-inline-block mb0 last-minute-rating">
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
                                            <h5 class="last-minute-title">Think Travel Think Apka Sewak</h5>
                                            <p class="last-minute-date">
                                                24 X 7 Service Call / SMS +91-9811218594 / 9868028510 </p>
                                                <a class="btn btn-lg btn-white btn-ghost" href="#">Book Now <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                      <li data-target="#myCarousel" data-slide-to="3"></li>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                      <div class="item active">
                                        <div class="col-md-6">
                                          <a class="hover-img curved" href="#">
                                            <img src="img/the_journey_home_400x300.jpg" alt="Image Alternative text" title="the journey home" /><!-- <i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> -->
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                      <h4 class="text-capitalize">Africa</h4>
                                      <p class="text-justify">Ut blandit pharetra suspendisse montes libero eleifend bibendum</p>
                                  </div>
                              </div>

                              <div class="item">
                                <div class="col-md-6">
                                  <a class="hover-img curved" href="#">
                                    <img src="img/upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><!-- <i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> -->
                                </a>
                            </div>
                            <div class="col-md-6">
                              <h4 class="text-capitalize">USA</h4>
                              <p class="text-justify">Cursus faucibus egestas rutrum mauris vulputate consequat ante</p>
                          </div>
                      </div>

                      <div class="item">
                        <div class="col-md-6">
                          <a class="hover-img curved" href="#">
                            <img src="img/people_on_the_beach_800x600.jpg" alt="Image Alternative text" title="people on the beach" /><!-- <i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> -->
                        </a>
                    </div>
                    <div class="col-md-6">
                      <h4 class="text-capitalize">Australia</h4>
                      <p class="text-justify">Senectus hendrerit torquent lorem scelerisque quam a curae</p>
                  </div>
              </div>

              <div class="item">
                <div class="col-md-6">
                  <a class="hover-img curved" href="#">
                    <img src="img/lack_of_blue_depresses_me_800x600.jpg" alt="Image Alternative text" title="lack of blue depresses me" /><!-- <i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> -->
                </a>
            </div>
            <div class="col-md-6">
              <h4 class="text-capitalize">Greece</h4>
              <p class="text-justify">Penatibus ac lacinia platea cras lobortis nullam dapibus</p>
              </div>
          </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
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
                            <img src="img/logo4.jpg" alt="Image Alternative text" title="Image Title" />
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
                        <h4 class="text-color"></h4>
                        <h4><a href="#" class="text-color">aapkasewak.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>-->
        
        <script src="js1/jquery-1.9.1.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="ie10-viewport-bug-workaround.js"></script>


        <script type="text/javascript" src="js1/jssor.slider.mini.js"></script>
        <script>

            jQuery(document).ready(function ($) {
                var options = {
                    $AutoPlay: true,                                    
                    $AutoPlaySteps: 1,                                  
                    $AutoPlayInterval: 2000,                            
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>
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


<input type="text" class="form-control">

</body>


</html>



