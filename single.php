<!-- Page for a single movie -->
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="search.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>

  <title>What2Watch</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>


</head>

<body>



  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #FFCCCC">
        <a class="navbar-brand" href="#">What2Watch</a>
        <!-- Hamburger collapsible -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse class -->

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Recommended</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php?logout=true">Log Out</a>
            </li>

          </ul>
        </div>
      </nav>

  <div class = "left" style="color:#E8E8E8; height:2000px">
    <div class = "container0">
      <div>
        <h5>Top Rated Movies This Week</h4>
          <br>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
      </div>
      <br>
      <div>
        <h5>Top Rated Movies This Month </h4>
        <br>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
      </div>
      <br>
      <div>
        <h5>Top Rated Movies This Year </h4>
        <br>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
      </div>
      <br>
      <div>
        <h5>Top Rated Movies This Decade </h4>
        <br>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
        <h9>Terminator: Dark Fate</h5>
        <a class="link" href="#" style="padding-left:20px">Add to WatchList</a>
      </div>
    </div>

    <div class="container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="searchbar" style="padding-left:450px">
        <input type="text" placeholder="Search for movie/show" name="search"  id="courseID" style="width:800px">
        <input type="button" class="btn btn-light" value="Search" onclick="addElement()">
          <i class="fa fa-search"></i>
        </input>
      </form>
    </div>
    <div class = "container2" style="height:20%;padding-left:530px; width:1350px; ">
      <main class="main-content">
        <div class="container">
          <div class="page">
            <div class="breadcrumbs">
              <a href="index.html">Home</a>
              <a href="review.html">Movie Review</a>
              <span>Black Panther</span>
            </div>

            <div class="content">
              <div class="row">
                <div class="col-md-6">
                  <a  id="link1" href="https://www.imdb.com/">
                  <img id="poster1" src="pic.jpeg" style= "width:90%;height:90%;">
                  </a>
                </div>
                <div class="col-md-6">
                  <h2 class="movie-title">Black Panther</h2>

                  <div class="movie-summary">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                  </div>
                  <ul class="movie-meta">
                    <li><strong>IMDB Rating:</strong>
                      <div class="star-rating" title="Rated 9.3"><span style="width:80%"><strong class="rating">9.3</strong> out of 10</span></div>
                    </li>
                    <li><strong>metascore:</strong> 80 </li>
                    <li><strong>Rated:</strong> PG-13 </li>
                    <li><strong>Runtime:</strong> 98 min</li>
                    <li><strong>Year:</strong> 2013 (USA)</li>
                    <li><strong>Genre:</strong> Animation/Adventure/Comedy</li>
                    <li><strong>Production:</strong> Columbia Pictures </li>

                  </ul>

                </div>
              </div> <!-- .row -->
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac pharetra libero. Integer in suscipit diam, sit amet eleifend nunc. Curabitur egestas nunc nulla, in aliquet risus efficitur quis. Vivamus facilisis est libero, vitae iaculis nulla cursus in. Suspendisse potenti. In et fringilla ipsum, quis varius quam. Morbi eleifend venenatis diam finibus vehicula. Suspendisse eu blandit metus. Sed feugiat pellentesque turpis, in lacinia ipsum. Vivamus nec luctus orci.</p>
                <p>Aenean vehicula eget risus sit amet posuere. Maecenas id risus maximus, malesuada leo eget, pellentesque arcu. Phasellus vitae leo rhoncus, consectetur mauris vitae, lacinia quam. Nunc turpis erat, accumsan eget justo quis, auctor ultricies magna. Mauris sodales, risus sit amet hendrerit tincidunt, erat ante facilisis sapien, sit amet maximus neque massa a felis. Nullam consectetur justo massa, vel commodo metus gravida in. Aliquam erat volutpat. Nullam a lorem sed lorem euismod gravida a eu velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis ac ligula vel pharetra. Aenean vitae nulla sed dui volutpat euismod. Nam ex quam, consequat id rutrum sed, porttitor id lectus. Vestibulum venenatis consectetur justo ut sagittis. Duis dignissim tincidunt quam, nec pulvinar libero luctus nec. Morbi blandit nec lorem in ullamcorper.</p>
              </div>
            </div>
          </div>
        </div> <!-- .container -->
      </main>

    </div>
  </div>




</body>

<script>
  /*
  function task(e){
    var hidden_e = 'hidden'.concat(e);
    for(i=1;i<9;i++){
      var hiddenid='hidden'.concat(i);
      if ((i == e) || (hiddenid == hidden_e)){
        document.getElementById(e).disabled=false;
        document.getElementById(hidden_e).disabled=false;
      } else{
        document.getElementById(i).disabled=true;
        document.getElementById(hiddenid).disabled=true;
      }
    }
    document.getElementsByName("check")[0].submit();
  }
  function drop(ev, el){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    el.appendChild(document.getElementById(data)).style.display="block";
  }
  var allowDrop = (ev)=> ev.preventDefault();
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  function addElement() {
    var table = document.getElementById("options");
    var row = table.insertRow(0);
    var cell = document.createElement("TD");
    var name = document.getElementById("courseID").value;
    var cell = row.insertCell(0);
    cell.innerHTML = document.getElementById("courseID").value;
    cell.classList.add("event");

    //cell.classList.insertBefore("event");

        cell.setAttribute("id", name);
        cell.setAttribute("draggable", true);
        cell.addEventListener("dragstart", drag);

  }*/
</script>

<?php
  session_start();

  function logout() {
    session_destroy();
    $_SESSION = [];
    echo "<script> location.href='https://www.cs.virginia.edu/~jmm4ye/what2watch/'; </script>";
  }
  if (isset($_GET['logout'])) {
    logout();
  }
?>

<script>






<?php

//db access credentials

$dbusername = 'jmm4ye';
$dbpassword = 'Abcd!234';
$hostname = 'cs4750.cs.virginia.edu';
$dbname = 'jmm4ye_hounds';
$dsn = "mysql:host=$hostname;dbname=$dbname";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

  if (isset($_GET['search'])){
      $keyword = $_GET['search'];

      try
      {
        $db = new PDO($dsn, $dbusername, $dbpassword);
          $query = "SELECT `title`, `imdb_id`, `imdb_rating`, `poster` FROM `data` WHERE `title` LIKE '%$keyword%' ORDER BY `imdb_rating` DESC LIMIT 3";
          $statement = $db->prepare($query);
          $statement->execute();
          $results = $statement->fetchAll();
          $statement->closeCursor();
          if (!empty($results))
              //print_r($results);
              $js_array = json_encode($results);
              echo "var movies = ". $js_array . ";\n";
              echo "updatePosters();\n";
         }

      catch (PDOException $e)
      {
         $error_message = $e->getMessage();
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }
      catch (Exception $e)
      {
         $error_message = $e->getMessage();
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }
    }
}


?>

function updatePosters() {
  console.log(movies);
  document.getElementById("poster1").src = movies[0].title;

}

</script>

</html>
