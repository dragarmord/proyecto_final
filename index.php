<?php
	require("connectdb.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Arenal Backpackers Bookings</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/initializr.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/author.css">
        <link rel="stylesheet" href="css/helper.css">
        <link rel="stylesheet" href="css/mediaQueries.css">
        <link rel="stylesheet" href="css/print.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="overlay">
            <form id="tfnewsearch" method="get" action="http://www.google.com">
                <input type="text" class="tftextinput" name="q">
            </form>
        </div>


        <div class="header-container">
            <header class="wrapper clearfix">
                <i  id="searchIcon" class="fa fa-search"></i>

                <nav>
					<div class="menu-bar-mobile">
						<span class="pull-left toggle-btn close">Menu</span>
						<!-- <span class="">Open</span> -->
					</div>
					<ul class="navList">
						<li><a href="#">Home</a></li>
						<li><a href="aboutUs.html">About Us</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="http://mail.yahoo.com">Y! Mail</a></li>
                        <li><a href="https://login.live.com/login.srf?wa=wsignin1.0&ct=1417324993&rver=6.1.6206.0&sa=1&ntprob=-1&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2F%3Fowa%3D1%26owasuffix%3Dowa%252f&id=64855&snsc=1&cbcxt=mail">Outlook Mail</a></li>
                        <li><a href="#">Bookings</a></li>
					</ul>
				</nav>
            </header>

        </div>

        <div class="banner">
            <img src="img/arenalBanner-mobile.jpg" class="img-320">
            <img src="img/arenalBanner.jpg" class="img-768">
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <h1>Booking Information</h1>

                <form action="">

                <div class="status">
                    <h2>Status</h2>
                    <table>
                        <tr>
                            <td>
                                <label for="statusNew"></label>
                                <input type="checkbox" class="checkbox" value="statusNew1"> New Reservation
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkbox" value="statusUrgent1"> Urgent
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="statusPendiente"><span id="bdIndex">Pending Reply</span></label>
                                <select id="statusPendiente">
                                    <option value="statusPendiente1">Front Desk</option>
                                    <option value="statusPendiente2">Client</option>
                                    <option value="statusPendiente3" selected="selected">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="checkbox" value="statusModify"> <span>Modified Reservation</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="checkbox" value="overbooking"> <span>Overbooking</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="statusTypeCancelation"><span>Type of Cancelation</span></label>
                                <select id="statusTypeCancelation">
                                    <option value="statusTypeCancelation1">Normal</option>
                                    <option value="statusTypeCancelation2">No Show</option>
                                    <option value="statusTypeCancelation3">Same Day Cancelation</option>
                                    <option value="statusTypeCancelation4" selected="selected">None</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="statusNoshow"><span>Cancelation Charge</span></label>
                                <select id="statusNoshow">
                                    <option value="statusNoshow1">First Day</option>
                                    <option value="statusNoshow2">All Reservation</option>
                                    <option value="statusNoshow3" selected="selected">None</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="section1 clearfix">
                    <h2>General Information</h2>
                    <div class="generalInfo1">
                        <table>
                            <tr>
                                <td>
                                    <label for="nombre">Name</label> 
                                </td>
                                <td>
                                    <input type="text" id="name" tabindex="10" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="apellidos">Last Name</label>
                                </td>
                                <td> 
                                    <input type="text" id="last_name" tabindex="20" /> 
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email">E-Mail</label> 
                                </td>
                                <td>
                                    <input type="text" id="email" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="season">Season</label>
                                </td>
                                <td>
                                    <select id="season">
                                        <option value="season1">Hight Season</option>
                                        <option value="season2">Low Season</option>
                                        <option value="season3" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="company">Booking Company</label>
                                </td>

                                <td>
                                    <select id="company">
                                        <option value="company1">Contact Form</option>
                                        <option value="company2">Hostelworld</option>
                                        <option value="company3">Hostelbookers</option>
                                        <option value="company4">Booking.com</option>
                                        <option value="company5" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="bookingNum">Booking Number</label>
                                </td>
                                <td>
                                    <input type="text" id="bookingNum" tabindex="10" />
                                </td>
                            </tr>

                        </table>
                    </div>    
                        
                    <div class="generalInfo2">
                        <table>

                            <tr>
                                <td>
                                    <label for="n_people">Number of People</label>
                                </td>
                                <td>
                                    <input type="text" id="n_people" tabindex="10" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="n_nights">Number of Nights</label>
                                </td>
                                <td>
                                    <input type="text" id="n_nights" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="chk_in_date">Check in Date</label>
                                </td>
                                <td>
                                    <input name="checkInDate" id="chk_in_date" type="date" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="chk_in_hour">Check in Hour</label>
                                </td>
                                <td>
                                    <input name="checkIn" id="chk_in_hour" type="number" />
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>

                <div class="section2 clearfix">
                    <div class="typeRoom clearfix">
                    <h2>Type of Room</h2>
                        <table>
                            <tr>
                                <td>
                                    <label for="privates">Private Room</label>
                                </td>

                                <td>
                                    <select id="privates">
                                        <option value="private1">1- Standard Single w/Shared Bathroom</option>
                                        <option value="private2">1- Standard Single with Terrace</option>
                                        <option value="private3">1- Deluxe Single with Private Balcony</option>
                                        <option value="private4">1- Superior Single with Private Terrace and Volcano View</option>
                                        <option value="private5">1- Superior Single with Private Balcony and Volcano View</option>

                                        <option value="private6">2- Standard Double w/Shared Bathroom</option>
                                        <option value="private7">2- Standard Double with Terrace</option>
                                        <option value="private8">2- Deluxe Double with Private Balcony</option>
                                        <option value="private9">2- Superior Double with Private Terrace and Volcano View</option>
                                        <option value="private10">2- Superior Double with Private Balcony and Volcano View</option>

                                        <option value="private11">3- Deluxe Triple with Private Balcony</option>
                                        <option value="private12">3- Standard Triple with Terrace</option>

                                        <option value="private13">4- Deluxe Quad with Private Balcony</option>

                                        <option value="private14">5- Deluxe Penta with Private Balcony</option>

                                        <option value="private15">Multiple Rooms (check Additional Info)</option>

                                        <option value="private16" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>
                        
                            <tr>
                                <td>
                                    <label for="safariTent">Safari Tents</label>
                                </td>

                                <td>
                                    <select id="safariTent">
                                        <option value="tent1">Deluxe Single Tent</option>
                                        <option value="tent2">Deluxe Double Tent</option>
                                        <option value="tent3">Deluxe Triple Tent</option>
                                        <option value="tent4">Deluxe Quadruple Tent</option>
                                        <option value="tent5">Multiple Rooms (check Additional Info)</option>
                                        <option value="tent6" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                             <tr>
                                <td>
                                    <label for="dorm">Dorms</label>
                                </td>

                                <td>
                                    <select id="dorm">
                                        <option value="dorm1">8 Bed Mixed Dorm</option>
                                        <option value="dorm2">8 Bed Female Dorm</option>
                                        <option value="dorm3">8 Bed Private Dorm</option>
                                        <option value="dorm4">Multiple Rooms (check Additional Info)</option>
                                        <option value="dorm5" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="price">Price (US $)</label>
                                </td>
                                <td>
                                    <input type="number" id="price" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="paymentType">Payment Type</label>
                                </td>

                                <td>
                                    <select id="paymentType">
                                        <option value="paymentType1">Per Room</option>
                                        <option value="paymentType2">Per Night</option>
                                        <option value="paymentType3">Per Person/Per Night</option>
                                        <option value="paymentType4">Total</option>
                                        <option value="paymentType5" selected="selected">None</option>

                                    </select>
                                </td>
                            </tr>


<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <label for="tBeds">Type of Beds</label>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds1"> 1 Single Bed-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds2"> 1 Double Bed-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds3"> 2 Double Beds-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td></td>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds4"> 3 Single Beds-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds5"> 1 Extra Mattress-->
<!--                                    <input type="checkbox" class="checkbox" value="tBeds6"> 2 Extra Mattress-->
<!--                                </td>-->
<!--                            </tr>-->

                            <tr>
                                <td>
                                    <label for="tBeds">Type of Beds</label>
                                </td>
                                <td>
                                    <div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds1"> 1 Single Bed
                                        </div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds2"> 1 Double Bed
                                        </div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds3"> 2 Double Beds
                                        </div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds4"> 3 Single Beds
                                        </div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds5"> 1 Extra Mattress
                                        </div>
                                        <div class="checkbox_beds">
                                            <input type="checkbox" class="checkbox" value="tBeds6"> 2 Extra Mattress
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>


                    <div class="crd_card">
                        <h2>Credit Card Information</h2>
                        <table>
                            <tr>
                                <td>
                                    <label for="typeCC">Type of Credit Card</label>
                                </td>
                                <td>
                                    <select id="typeCC">
                                        <option value="typeCC1">Visa</option>
                                        <option value="typeCC2">Mastercard</option>
                                        <option value="typeCC3">American Express</option>
                                        <option value="typeCC3">Other</option>
                                        <option value="typeCC4" selected="selected">None</option>
                                    </select>
                                    <input type="text" id="typeCC_other" tabindex="20" placeholder="Another Credit Card..."/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccName">Name</label>
                                </td>
                                <td>
                                    <input type="text" id="ccName" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccNum">Number</label>
                                </td>
                                <td>
                                    <input type="number" id="ccNum" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccExp">Expires</label>
                                </td>
                                <td>
                                    <input type="number" id="ccExp" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccSecurity">Security Code</label>
                                </td>
                                <td>
                                    <input type="number" id="ccSecurity" tabindex="20" />
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>

                <div class="section3 clearfix">
                    <div class="shuttleInfo">
                        <H2>Shuttle Information</H2>
                        <table>

                            <tr>
                                <td>
                                    <label for="shuttleDate">Date</label>
                                </td>
                                <td>
                                    <input name="checkInDate" id="shuttleDate" type="date" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleWhere">Where</label>
                                </td>
                                <td>
                                    <select id="shuttleWhere">
                                        <option value="shuttleWhere1">In</option>
                                        <option value="shuttleWhere2">Out</option>
                                        <option value="shuttleWhere3" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleFrom">From</label>
                                </td>
                                <td>
                                    <input type="text" id="shuttleFrom" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleTo">To</label>
                                </td>
                                <td>
                                    <input type="text" id="shuttleTo" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttlePeople">Number of People</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttlePeople" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttlePrice">Price Per Person</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttlePrice" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleCompany">Company</label>
                                </td>

                                <td>
                                    <select id="shuttleCompany">
                                        <option value="shuttleCompany1">Interbus</option>
                                        <option value="shuttleCompany2">Ride CR</option>
                                        <option value="shuttleCompany3">Private</option>
                                        <option value="shuttleCompany4" selected="selected">None</option>
                                    </select>
                                    <input type="text" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleTime">Pick-up Time</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttleTime" tabindex="20" />
                                    <!-- NECESITO K SEA FORMAT EN HORAS -->
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="flightInfo">
                        <H2>Flight Information (Only if Private Shuttle)</H2>
                        <Table>
                            <tr>
                                <td>
                                    <label for="flightAirport">Airport</label>
                                </td>

                                <td>
                                    <select id="flightAirport">
                                        <option value="flightAirport1">SJO Airport</option>
                                        <option value="flightAirport2">Liberia</option>
                                        <option value="flightAirport3">Arenal Airport</option>
                                        <option value="flightAirport4" selected="selected">None</option>
                                    </select>
                                    <input type="text" tabindex="20" placeholder="Another Airport..." />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightCompany">Airline Company</label>
                                </td>
                                <td>
                                    <input type="text" id="flightCompany" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightNum">Flight Number</label>
                                </td>
                                <td>
                                    <input type="number" id="flightNum" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightFrom">From</label>
                                </td>
                                <td>
                                    <input type="text" id="flightFrom" tabindex="20" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightTime">Arrival Time</label>
                                </td>
                                <td>
                                    <input type="text" id="flightTime" tabindex="20" />
                                </td>
                            </tr>

                        </Table>
                    </div>

                </div>

                <div class="section4 clearfix">
                     <div class="aditionalInfo">
                        <H2>Aditional Information</H2>
                        <textarea name="aditional_info" id="info" accesskey="o" tabindex="40"></textarea>
                        <div>
                            <label for="attachment"></label>
                            <input type="file" id="attachment" />
                        </div>
                     </div>

                    <div class="bookedBy clearfix">
                        <H2>Person Reponsible</H2>
                        <tr>
                            <td>
                                <label for="madeBy">Booked by</label>
                            </td>
                            <td>
                                <select id="madeBy">
                                    <option value="madeBy1">Allan</option>
                                    <option value="madeBy2">Alfredo</option>
                                    <option value="madeBy3">Diego</option>
                                    <option value="madeBy4">Mieles</option>
                                    <option value="madeBy5">Nacho</option>
                                    <option value="madeBy6" selected="selected">None</option>
                                </select>
                            </td>
                        </tr>
                    </div>

                </div>

                <div class="btns">
                    <input type="submit" id="send" value="Send" accesskey="v" tabindex="60" />
                    <input type="reset" id="reset" value="Reset" />
                </div>



                </form>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h2><a href="#">Costa Rica Hostel Network</a></h2>
                <div class="footer1">
                    <div><a href="#">Beds n' Drinks (South Beach)</a></div>
                    <div><a href="#">Arenal Backpackers Resort</a></div>
                    <div><a href="#">Alajuela Backpackers</a></div>
                    <div><a href="#">Monteverde Backpackers</a></div>
                    <div><a href="#">Hostel Toruma</a></div>
                    <div><a href="#">Hostel Pangea</a></div>
                </div>

                <div class="footer2">


                    <div><a href="#">Home</a></div>
                    <div><a href="aboutUs.html">About Us</a></div>
                    <div><a href="#">Gallery</a></div>
                    <div><a href="http://mail.yahoo.com">Y! Mail</a></div>
                    <div><a href="https://login.live.com/login.srf?wa=wsignin1.0&ct=1417324993&rver=6.1.6206.0&sa=1&ntprob=-1&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2F%3Fowa%3D1%26owasuffix%3Dowa%252f&id=64855&snsc=1&cbcxt=mail">Outlook Mail</a></div>
                    <div><a href="#">Bookings</a></div>

                </div>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>