<!DOCTYPE html>
<?php
  session_start();

  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());

if (isset($_POST['schfly'])){
  $depdate = $_POST['depdate'];
  $retdate = $_POST['retdate'];
  $query = mysqli_query($db,"select country from place where ");
}

  ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel = "stylesheet" href="css/flight.css">
   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>
    
<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="flight.php">Flights</a></li>
        <li><a href="cruise.php">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;" >
    <hgroup>
      <h2>Great flight deals</h2>
    </hgroup>
</div>
<br>
  <div class="list flight">
    <form action="flight.php" method = "POST">
      <h2>Flights booking</h2>
      <div class="ftype">
        Search for a flight
      </div>
      <div class="location">
        <p>
          <label for="to">To</label>
          <input type="text" name="to" id="to" placeholder="Type To Location">
        </p>
      </div>
      <div class="date">
        <p>
          <label for="depart">Depart date</label>
          <input type="text" name="depart" id="depart" placeholder="Type Departing Date">
        </p>
        <p>
          <label for="return">Return date</label>
          <input type="text" name="amount" id="return" placeholder="Type Return Date">
        </p>
      </div>
      <div class="schbtn">
        <p>
          <button type="submit" name ="schfly" class="schfly" onclick ="location.href='result.php'">Search</button>
        </p>
      </div>
    </form>

<div class="latest">
      <h2>Browse latest</h2>
      <table>
        <thead>
          <tr>
            <th>Route</th>
            <th>Depart Date</th>
            <th>Price</th>
            <th>Check Availability</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Phi Phi Island</td>
            <td>15/06/2018</td>
            <td class="price">€599</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Tokyo</td>
            <td>01/07/2018</td>
            <td class="price">€1080</td>
          <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Kyoto</td>
            <td>01/06/2018</td>
            <td class="price">€875</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Beijing</td>
            <td>01/08/18</td>
            <td class="price">€789</td>
           <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Xi'An</td>
            <td>01/07/18</td>
            <td class="price">€850</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Sydney</td>
            <td>01/08/2018</td>
            <td class="price">€980</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Melbourne</td>
            <td>01/07/2018</td>
            <td class="price">€860</td>
           <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Madrid</td>
            <td>20/08/2018</td>
            <td class="price">€300</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Venice</td>
            <td>10/06/18</td>
            <td class="price">€480</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
          <tr>
            <td>Capri</td>
            <td>01/06/2018</td>
            <td class="price">€250</td>
           <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
           <tr>
            <td>Athens</td>
            <td>01/07/2018</td>
            <td class="price">€1050</td>
            <td><a href="booking.php">Check <span class="sm-hidden"></span></a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6">Load more...</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>


</div>

 
   <footer id="footer">
  <div class="top sm-hidden">
    <div class="column left">
      <h2>About</h2>
      <hr>
      <ul>
        <li><a href ="about.html"> How many Countries? </a></li>
        <li><a href ="about.html"> Best for our guests</a></li>
        <li><a href ="package.html"> Package trips</a></li>
        <li><a href ="about.html"> Travel services</a></li>
      </ul>
    </div>
    <div class="column mid">
      <h2>JOIN US!</h2>
      <hr>
      <ul>
        <button onclick ="location.href='login.php'" class="button active" >Login</button>  
        <button onclick ="location.href='register.php'"class="button" >Register</button>
        <li><a href ="customer.php">My Profile</a></li>
        <li><a href ="mybooking.php">My Bookings</a></li>
      </ul>     
    </div>
    <div class="column right">
      <h2>Contact</h2>
      <hr>
      <ul>
        <li>Email: info@vaykaytravels.ie</li>
        <li>Phone: 01-2233432.</li>
        <li>Address: 44 Merrions Square, Dublin, Ireland.</li>
      </ul>     
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bottom">Copyright &copy; VayKay Travels 2018 | Travel Agency</div>
</footer>




</body>
</html>