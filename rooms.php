<html>
    <head>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/rooms.css">
    </head>
    <body>
        <div style="margin-left:100px;margin-top:130px">
            <?php 
		        if($_REQUEST['room']==1) { ?>      
            <h2>SUPER DELUXE</h2>      
            <div style="margin-top:30px">
                <table width="98%">
                    <tr>
                        <td>
                            <div id="img1">
                                <img src="imgs\PREMIUM-ROOM.jpg" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <div id="img2" style="display:none">
                                <img src="imgs\caro1.jfif" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <button onclick="disimg1()"><img src="imgs\PREMIUM-ROOM.jpg" style="width:150px;height:100px"></button>
                            <button onclick="disimg2()"><img src="imgs\caro1.jfif" style="width:150px;height:100px"></button>
                        </td>
                        <td class="checkoutcol" width="35%">
                            <h3 style="font-weight:bold">YOUR RESERVATION</h3>
                            <br/>
                            <form action="#">
                                <table align="center">
                                    <tr>
                                        <td><label for="checkin">Check in:</label></td>
                                        <td><input type="date" id="checkin" name="checkin"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="checkout">Check out:</label></td>
                                        <td><input type="date" id="checkout" name="checkout"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="adults">Adults:</label></td>
                                        <td><input type="number" id="adults" name="adults"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="children">Children:</label></td>
                                        <td><input type="number" id="children" name="children"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2 style="padding-left:60px">
                                            <a class="anchorbook" href="#">Book Now</a>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
                <table width ="70%" style="margin:50px 100px;font-size:25px">
                    <tr>
                        <td style="font-weight:bold;vertical-align:top" width="30%">Properties:
                        </td>
                        <td>Accommodates: 2<br/> 
                            Size: 221 sq ft<br/>
                            Beds: 1 King(s)
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">More Info:
                        </td>
                        <td>Rooms include conveniences like comfortable bed, flat screen TV, desk and attached bathroom with hot/cold water supply. Guest can avail services like concierge, laundry, ironing, doctor on call, wake-up call, 24-hours security and room service.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">Amenities:
                        </td>
                        <td>
                        <ul id="menu" style="list-style-type: none;">
                            <li style="font-size:25px;margin:10px"><i class="fa fa-wifi"></i>&nbsp;&nbsp;WIfi</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-shower"></i>&nbsp;&nbsp;Shower</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-bath"></i>&nbsp;&nbsp;Bath</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-taxi"></i>&nbsp;&nbsp;Taxi</li> 
                            <li style="font-size:25px;margin:10px"><i class="fa fa-television">Television</i>&nbsp;&nbsp;</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone</li>
                        </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <script>
                function disimg1(){
                    var x = document.getElementById("img1");
                    var y = document.getElementById("img2");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                }
                function disimg2(){
                    var x = document.getElementById("img1");
                    var y = document.getElementById("img2");
                    if (y.style.display === "none") {
                        y.style.display = "block";
                        x.style.display = "none";
                    }
                }
            </script>
            <?php } else if($_REQUEST['room']==2) { ?>
            <h2>SUPER DELUXE EXECUTIVE</h2>      
            <div style="margin-top:30px">
                <table width="98%">
                    <tr>
                        <td>
                            <div id="img3">
                                <img src="imgs\PREMIUM-ROOM.jpg" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <div id="img4" style="display:none">
                                <img src="imgs\caro2.jfif" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <button onclick="disimg3()"><img src="imgs\PREMIUM-ROOM.jpg" style="width:150px;height:100px"></button>
                            <button onclick="disimg4()"><img src="imgs\caro2.jfif" style="width:150px;height:100px"></button>
                        </td>
                        <td class="checkoutcol" width="35%">
                            <h3 style="font-weight:bold">YOUR RESERVATION</h3>
                            <br/>
                            <form action="#">
                                <table align="center">
                                    <tr>
                                        <td><label for="checkin">Check in:</label></td>
                                        <td><input type="date" id="checkin" name="checkin"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="checkout">Check out:</label></td>
                                        <td><input type="date" id="checkout" name="checkout"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="adults">Adults:</label></td>
                                        <td><input type="number" id="adults" name="adults"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="children">Children:</label></td>
                                        <td><input type="number" id="children" name="children"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2 style="padding-left:60px">
                                            <a class="anchorbook" href="#">Book Now</a>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
                <table width ="70%" style="margin:50px 100px;font-size:25px">
                    <tr>
                        <td style="font-weight:bold;vertical-align:top" width="30%">Properties:
                        </td>
                        <td>Accommodates: 2<br/> 
                            Size: 221 sq ft<br/>
                            Beds: 1 King(s)
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">More Info:
                        </td>
                        <td>Rooms include conveniences like comfortable bed, flat screen TV, desk and attached bathroom with hot/cold water supply. Guest can avail services like concierge, laundry, ironing, doctor on call, wake-up call, 24-hours security and room service.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">Amenities:
                        </td>
                        <td>
                        <ul id="menu" style="list-style-type: none;">
                            <li style="font-size:25px;margin:10px"><i class="fa fa-wifi"></i>&nbsp;&nbsp;WIfi</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-shower"></i>&nbsp;&nbsp;Shower</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-bath"></i>&nbsp;&nbsp;Bath</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-taxi"></i>&nbsp;&nbsp;Taxi</li> 
                            <li style="font-size:25px;margin:10px"><i class="fa fa-television">Television</i>&nbsp;&nbsp;</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone</li>
                        </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <script>
                function disimg3(){
                    var x = document.getElementById("img3");
                    var y = document.getElementById("img4");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                }
                function disimg4(){
                    var x = document.getElementById("img3");
                    var y = document.getElementById("img4");
                    if (y.style.display === "none") {
                        y.style.display = "block";
                        x.style.display = "none";
                    }
                }
            </script>
            <?php } else if($_REQUEST['room']==3) { ?>
            <h2>PREMIUM EXECUTIVE</h2>      
            <div style="margin-top:30px">
                <table width="98%">
                    <tr>
                        <td>
                            <div id="img5">
                                <img src="imgs\PREMIUM-ROOM.jpg" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <div id="img6" style="display:none">
                                <img src="imgs\caro3.jfif" alt="Avatar" class="image" style="width:900px;height:600px">
                            </div>
                            <button onclick="disimg5()"><img src="imgs\PREMIUM-ROOM.jpg" style="width:150px;height:100px"></button>
                            <button onclick="disimg6()"><img src="imgs\caro3.jfif" style="width:150px;height:100px"></button>
                        </td>
                        <td class="checkoutcol" width="35%">
                            <h3 style="font-weight:bold">YOUR RESERVATION</h3>
                            <br/>
                            <form action="#">
                                <table align="center">
                                    <tr>
                                        <td><label for="checkin">Check in:</label></td>
                                        <td><input type="date" id="checkin" name="checkin"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="checkout">Check out:</label></td>
                                        <td><input type="date" id="checkout" name="checkout"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="adults">Adults:</label></td>
                                        <td><input type="number" id="adults" name="adults"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="children">Children:</label></td>
                                        <td><input type="number" id="children" name="children"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2 style="padding-left:60px">
                                            <a class="anchorbook" href="#">Book Now</a>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
                <table width ="70%" style="margin:50px 100px;font-size:25px">
                    <tr>
                        <td style="font-weight:bold;vertical-align:top" width="30%">Properties:
                        </td>
                        <td>Accommodates: 2<br/> 
                            Size: 221 sq ft<br/>
                            Beds: 1 King(s)
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">More Info:
                        </td>
                        <td>Rooms include conveniences like comfortable bed, flat screen TV, desk and attached bathroom with hot/cold water supply. Guest can avail services like concierge, laundry, ironing, doctor on call, wake-up call, 24-hours security and room service.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;vertical-align:top">Amenities:
                        </td>
                        <td>
                        <ul id="menu" style="list-style-type: none;">
                            <li style="font-size:25px;margin:10px"><i class="fa fa-wifi"></i>&nbsp;&nbsp;WIfi</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-shower"></i>&nbsp;&nbsp;Shower</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-bath"></i>&nbsp;&nbsp;Bath</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-taxi"></i>&nbsp;&nbsp;Taxi</li> 
                            <li style="font-size:25px;margin:10px"><i class="fa fa-television">Television</i>&nbsp;&nbsp;</li>
                            <li style="font-size:25px;margin:10px"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone</li>
                        </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <script>
                function disimg5(){
                    var x = document.getElementById("img5");
                    var y = document.getElementById("img6");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                        y.style.display = "none";
                    }
                }
                function disimg6(){
                    var x = document.getElementById("img5");
                    var y = document.getElementById("img6");
                    if (y.style.display === "none") {
                        y.style.display = "block";
                        x.style.display = "none";
                    }
                }
            </script>            
            <?php } else { 
    			include($_REQUEST['view']);
            } ?>
        </div>
    </body>
</html>