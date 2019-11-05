<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="pagewrap">

    <img alt="Genesis Restorante Banner Image" height="120" src="banner.png" width="100%">

    <div id="navigation1" class="webnav">
      <ul>
        <li class="home"><a href="index.html"><h4>Genesis Restorante Home</h4></a></li>
        <li class="link"><a href="mexmenu.php" class="active">Mexican Menu</a></li>
        <li class="link"><a href="italian.php">Italian Menu</a></li>
        <li class="link"><a href="gallery.html">Gallery</a></li>
        <li class="link"><a href="contact.html">Contact Us</a></li>
      </ul>
    </div>

    <div id="navigation" class="mobnav">
      <a class="mn main" href="index.html">Genesis Restorante</a>
      <a class="phonelink" href="tel:410-690-4489"> <img src="p1.png" class="phoneimg img-responsive" alt="phone image"></a>
      <div id="mobilelinks">
        <a class="mn active" href="mexmenu.php">Mexican Menu</a></li>
        <a class="mn" href="italian.php">Italian Menu</a></li>
        <a class="mn" href="gallery.html">Gallery</a></li>
        <a class="mn" href="contact.html">Contact Us</a></li>
      </div>
      <a href="javascript:void(0);" class="icon mn" onclick="myFunction()">
      <i class="fa fa-bars"></i>
      </a>
    </div>

  <div class="container" id="main">
    <h2 class="webnav"> Genesis Restorante <br>
    <a href="tel:410-690-4489">410-690-4489</a></h2>
    <h2 class="mobnav"> Mexican Menu <br></h2>
    <p> View our Mexican menu offerings.</p>



      <div class="row">
      <!--div class="col-xs-2 webnav"></div-->
      <div class="col-sm-4 menumargin">
        <div class="row typeitem"><h4>Mexican Dishes</h4></div><br>
        <?php
          include 'config.php';
          include 'opendb.php';
          $sql= "SELECT itemname, itemdesc, cost FROM menu WHERE itemtype = 'main' LIMIT 5";
          $result= mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
              echo '<div class="row textup namecost">';
              echo "<b>" . $row["itemname"]. '</b> :: ';
              echo "$" . $row["cost"]. "</div>";
              echo '<div class="row text2">' . $row["itemdesc"]. '<br><br></div>';
            }
          }
          else {
            echo "0 results";
          }

          mysqli_close($conn);
        ?>
      </div>

      <div class="col-sm-4 menumargin">
        <div class="row typeitem"><h4>Quesadillas</h4></div><br>
        <?php
          include 'config.php';
          include 'opendb.php';
          $sql= "SELECT itemname, itemdesc, cost FROM menu WHERE itemtype = 'ques' LIMIT 5";
          $result= mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
              echo '<div class="row textup namecost">';
              echo "<b>" . $row["itemname"]. '</b> :: ';
              echo "$" . $row["cost"]. "</div>";
              echo '<div class="row text2">' . $row["itemdesc"]. '<br><br></div>';
            }
          }
          else {
            echo "0 results";
          }

          mysqli_close($conn);
        ?>
        <img src="pic4.PNG" alt="food picture" class="img-responsive">
      </div>
      <br class="mobnav">
      <div class="col-sm-4 menumargin">
        <div class="row typeitem"><h4>Platillos</h4></div><br>
        <?php
          include 'config.php';
          include 'opendb.php';
          $sql= "SELECT itemname, itemdesc, cost FROM menu WHERE itemtype = 'plat' LIMIT 5";
          $result= mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
              echo '<div class="row textup namecost">';
              echo "<b>" . $row["itemname"]. '</b> :: ';
              echo "$" . $row["cost"]. "</div>";
              echo '<div class="row text2">' . $row["itemdesc"]. '<br><br></div>';
            }
          }
          else {
            echo "0 results";
          }

          mysqli_close($conn);
        ?>
      </div>




      <!--div class="col-xs-2 webnav"></div-->

    </div>


  </div>

  <div class="container" id="footer">

    <br>
    <div class="row">
      <div class="col-xs-4">
        <a href="sitemap.pdf">Site Map</a>
        <p>Phone:<br class="mobnav"><a href="tel:410-690-4489">410-690-4489</a> </p>
      </div>
      <div class="col-xs-4">
        <b>Genesis Restorante</b> <br>
        216 East Dover Street <br>
        Easton, Maryland  21601
      </div>
      <div class="col-xs-4">
        <a href="https://www.facebook.com/pages/category/Mexican-Restaurant/Genesis-Restorante-919858651527787/"><img src="fb.png" alt="facebook icon link"></a>  &nbsp;  <img src="yelp.png" alt="yelp icon link">
        <br> Links to Social Media
      </div>
    </div>


  </div>
</div>
<script>
  function myFunction() {
    var x = document.getElementById("mobilelinks");
    if (x.style.display === "block") {
      x.style.display = "none";
      document.getElementById("navigation").style.height = "52px";
    } else {
      x.style.display = "block";
      document.getElementById("navigation").style.height = "auto";
    }
  }
</script> <!--pagewrap-->
</body>
</html>
