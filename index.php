<?php
    $root = $_SERVER['DOCUMENT_ROOT']."/";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Arenal Backpackers Resort</title>
        <meta name="description" content="">
        <?php include($root."include/head.html"); ?>

    </head>
    <body>
        <?php include($root."include/header.html"); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">
                <h1>Booking Information</h1>

                <form action="insert.php" method="get">

                <div class="status">
                    <h2>Status</h2>
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" class="checkbox" value="1" name="urgent"> Urgent
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="statusPendiente">Pending Reply</label>
                                <select id="statusPendiente" name="statusPendiente">
                                    <option value="None" selected="selected">None</option>
                                    <option value="Client">Client</option>
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
                                    <label for="name">Name</label>
                                </td>
                                <td>
                                    <input type="text" id="name" name="name"/>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="lastName">Last Name</label>
                                </td>
                                <td> 
                                    <input type="text" id="lastName" name="lastName"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email">E-Mail</label> 
                                </td>
                                <td>
                                    <input type="text" id="email" name="email" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="season">Season</label>
                                </td>
                                <td>
                                    <select id="season" name="season">
                                        <option value="None" selected="selected">None</option>
                                        <option value="High Season">Hight Season</option>
                                        <option value="Low Season">Low Season</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="company">Booking Company</label>
                                </td>

                                <td>
                                    <select id="company" name="bookingCompany">
                                        <option value="None" selected="selected">None</option>
                                        <option value="CF">Contact Form</option>
                                        <option value="HW">Hostelworld</option>
                                        <option value="HB">Hostelbookers</option>
                                        <option value="Booking">Booking.com</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="bookingNum">Booking Number</label>
                                </td>
                                <td>
                                    <input type="text" id="bookingNum" name="bookingNum"/>
                                </td>
                            </tr>

                        </table>
                    </div>    
                        
                    <div class="generalInfo2">
                        <table>

                            <tr>
                                <td>
                                    <label for="numPeople">Number of People</label>
                                </td>
                                <td>
                                    <input type="text" id="numPeople" name="numPeople"/>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label for="numNights">Number of Nights</label>
                                </td>
                                <td>
                                    <input type="text" id="numNights" name="numNights"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="chkInDate">Check in Date</label>
                                </td>
                                <td>
                                    <input name="chkInDate" id="chkInDate" type="date" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="chkInHour">Check in Hour</label>
                                </td>
                                <td>
                                    <input name="chkInHour" id="chkInHour" type="number" />
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
                                    <select id="privates" name="privates">
                                        <option value="None" selected="selected">None</option>

                                        <option value="Single w/Shared Bathroom">1- Standard Single w/Shared Bathroom</option>
                                        <option value="Single with Terrace">1- Standard Single with Terrace</option>
                                        <option value="Single with Private Balcony">1- Deluxe Single with Balcony</option>

                                        <option value="Double w/Shared Bathroom">2- Standard Double w/Shared Bathroom</option>
                                        <option value="Double with Terrace">2- Standard Double with Terrace</option>
                                        <option value="Double with Balcony">2- Deluxe Double with Balcony</option>

                                        <option value="Triple with Balcony">3- Deluxe Triple with Balcony</option>
                                        <option value="Triple with Terrace">3- Standard Triple with Terrace</option>

                                        <option value="Quad with Balcony">4- Deluxe Quad with Balcony</option>

                                        <option value="Penta with Balcony">5- Deluxe Penta with Balcony</option>

<!--                                        <option value="private15">Multiple Rooms (check Additional Info)</option>-->
                                    </select>
                                </td>
                            </tr>

<!--                            HACER EN UN FUTURO: TIPO CARRITO DE AMAZON EN DONDE UNO AGREGA ITEMS A UNA LISTA-->

<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <label for="safariTent">Safari Tents</label>-->
<!--                                </td>-->
<!---->
<!--                                <td>-->
<!--                                    <select id="safariTent">-->
<!--                                        <option value="tent1">Deluxe Single Tent</option>-->
<!--                                        <option value="tent2">Deluxe Double Tent</option>-->
<!--                                        <option value="tent3">Deluxe Triple Tent</option>-->
<!--                                        <option value="tent4">Deluxe Quadruple Tent</option>-->
<!--                                        <option value="tent5">Multiple Rooms (check Additional Info)</option>-->
<!--                                        <option value="tent6" selected="selected">None</option>-->
<!--                                    </select>-->
<!--                                </td>-->
<!--                            </tr>-->
<!---->
<!--                             <tr>-->
<!--                                <td>-->
<!--                                    <label for="dorm">Dorms</label>-->
<!--                                </td>-->
<!---->
<!--                                <td>-->
<!--                                    <select id="dorm">-->
<!--                                        <option value="dorm1">8 Bed Mixed Dorm</option>-->
<!--                                        <option value="dorm2">8 Bed Female Dorm</option>-->
<!--                                        <option value="dorm3">8 Bed Private Dorm</option>-->
<!--                                        <option value="dorm4">Multiple Rooms (check Additional Info)</option>-->
<!--                                        <option value="dorm5" selected="selected">None</option>-->
<!--                                    </select>-->
<!--                                </td>-->
<!--                            </tr>-->

                            <tr>
                                <td>
                                    <label for="roomPrice">Price (US $)</label>
                                </td>
                                <td>
                                    <input type="number" id="roomPrice" name="roomPrice"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="paymentType">Payment Type</label>
                                </td>

                                <td>
                                    <select id="paymentType" name="paymentType">
                                        <option value="None" selected="selected">None</option>
                                        <option value="PR/PN">Per Room/Per Night</option>
                                        <option value="PP/PN">Per Person/Per Night</option>
                                        <option value="Total">Total</option>
                                    </select>
                                </td>
                            </tr>




<!--                            PARA LA SEGUNDA VERSION!!!!!-->
<!--                            -->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <label for="tBeds">Type of Beds</label>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds1"> 1 Single Bed-->
<!--                                        </div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds2"> 1 Double Bed-->
<!--                                        </div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds3"> 2 Double Beds-->
<!--                                        </div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds4"> 3 Single Beds-->
<!--                                        </div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds5"> 1 Extra Mattress-->
<!--                                        </div>-->
<!--                                        <div class="checkbox_beds">-->
<!--                                            <input type="checkbox" class="checkbox" value="tBeds6"> 2 Extra Mattress-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->

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
                                    <select id="typeCC" name="typeCC">
                                        <option value="None" selected="selected">None</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Mastercard">Mastercard</option>
                                        <option value="American Express">American Express</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccName">Name</label>
                                </td>
                                <td>
                                    <input type="text" id="ccName" name="ccName"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccNum">Number</label>
                                </td>
                                <td>
                                    <input type="number" id="ccNum" name="ccNum"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccExp">Expires</label>
                                </td>
                                <td>
                                    <input type="number" id="ccExp" name="ccExp"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="ccSecurity">Security Code</label>
                                </td>
                                <td>
                                    <input type="number" id="ccSecurity" name="ccSecurity"/>
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
                                    <input name="shuttleDate" id="shuttleDate" type="date" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleWhen">When</label>
                                </td>
                                <td>
                                    <select id="shuttleWhen" name="shuttleWhen">
                                        <option value="None" selected="selected">None</option>
                                        <option value="In">In</option>
                                        <option value="Out">Out</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleTime">Pick-up Time</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttleTime" name="shuttleTime"/>
                                    <!-- NECESITO K SEA FORMAT EN HORAS -->
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleFrom">From</label>
                                </td>
                                <td>
                                    <input type="text" id="shuttleFrom" name="shuttleFrom"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleTo">To</label>
                                </td>
                                <td>
                                    <input type="text" id="shuttleTo" name="shuttleTo"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleNumPeople">Number of People</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttleNumPeople" name="shuttleNumPeople"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttlePrice">Price Per Person</label>
                                </td>
                                <td>
                                    <input type="number" id="shuttlePrice" name="shuttlePrice"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="shuttleCompany">Company</label>
                                </td>

                                <td>
                                    <select id="shuttleCompany" name="shuttleCompany">
                                        <option value="None" selected="selected">None</option>
                                        <option value="Interbus">Interbus</option>
                                        <option value="Ride CR">Ride CR</option>
                                        <option value="Private Shuttle">Private Shuttle</option>
                                    </select>
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
                                    <select id="flightAirport" name="flightAirport">
                                        <option value="SJO's Airport">SJO's Airport</option>
                                        <option value="Liberia's Airport">Liberia's Airport</option>
                                        <option value="Arenal's Airport">Arenal's Airport</option>
                                        <option value="None" selected="selected">None</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightCompany">Airline Company</label>
                                </td>
                                <td>
                                    <input type="text" id="flightCompany" name="flightCompany"/>
                                </td>
                            </tr>

                            <tr>
                                <td>lastName
                                    <label for="flightNum">Flight Number</label>
                                </td>
                                <td>
                                    <input type="number" id="flightNum" name="flightNum"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightFrom">From</label>
                                </td>
                                <td>
                                    <input type="text" id="flightFrom" name="flightFrom"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="flightTime">Arrival Time</label>
                                </td>
                                <td>
                                    <input type="text" id="flightTime" name="flightTime"/>
                                </td>
                            </tr>

                        </Table>
                    </div>

                </div>

                <div class="section4 clearfix">
                     <div class="aditionalInfo">
                        <H2>Aditional Information</H2>
                        <textarea name="aditionalInfo" id="info" accesskey="o"></textarea>


<!--                         PARA LA SEGUNDA VERSION!!!! -->
<!--                         <div>-->
<!--                            <label for="attachment"></label>-->
<!--                            <input type="file" id="attachment" />-->
<!--                        </div>-->


                     </div>

                    <div class="bookedBy clearfix">
                        <H2>Person Reponsible</H2>
                        <tr>
                            <td>
                                <label for="bookedBy">Booked by</label>
                            </td>
                            <td>
                                <select id="bookedBy" name="bookedBy">
                                    <option value="None" selected="selected">None</option>
                                    <option value="Allan">Allan</option>
                                    <option value="Alfredo">Alfredo</option>
                                    <option value="Diego">Diego</option>
                                    <option value="Mieles">Mieles</option>
                                    <option value="Nacho">Nacho</option>
                                </select>
                            </td>
                        </tr>
                    </div>

                </div>

                <div class="btns">
                    <input type="submit" id="send" value="Send" accesskey="v"/>
                    <input type="reset" id="reset" value="Reset" />
                </div>



                </form>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <?php include($root."include/footer.html"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>