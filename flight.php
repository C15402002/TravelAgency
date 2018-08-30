<!DOCTYPE html>


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
        <li><a href="about.html">About</a></li>
        <li class="active"><a href="flight.php">Flights</a></li>
        <li><a href="cruise.html">Cruise</a></li>
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

    <<center><form method="post">
    <br><b><p><font font size="6" >Search for a flight </font></p></b><br>
      <input type="text" name="search" placeholder="country, city..."style="height:25px;width:200px;"></form><br><br></h1>
  </center></body>
            
           <?php

  $db = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
  mysqli_select_db($db, "vaykay") or die("Failure to connect");
  
  if(isset($_POST['search']))
  {
    $s = $_POST['search'];
    
    $sql="SELECT tourid, country, city, price FROM TOUR WHERE  COUNTRY LIKE '%" . $s . "%' OR CITY LIKE '%" . $s  ."%'";
    $results = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($results) != 0)
    { 
      while($row = mysqli_fetch_array($results))
      {
            $tourid = $row['tourid'];
              $country = $row['country'];
              $city=$row['city'];
                $price  =$row['price'];

      
        echo ("<thead><tr><td><center><b>Country:</b> {$row['country']}</td>");
          echo ("<td><b> City:</b> {$row['city']}</td>");
        echo ("<td><b> Price: €</b> {$row['price']}</td></tr></thead><br>");

       echo ("<form method='post' action='booking.php'><input type='hidden' name='tourid' value='{$row['tourid']}'>");
        echo ("<input type='submit' value='Book' name='Book'></form></center>");
      }
    }
    else
    {
    echo "<center><p1>No matching book of that title/author.</p1></center>";
    }
  }
?>
            
 <div class="list flight">
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