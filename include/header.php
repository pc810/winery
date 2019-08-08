<!--<nav class="navbar navbar-expand-xl navbar-white bg-white">
      <a class="navbar-brand" href="#">Expand at xl</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View</a>
            <div class="dropdown-menu" aria-labelledby="dropdown06">
              <a class="dropdown-item" href="#">VineYard</a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    -->
    <div class="w3-top">
      <div class="w3-bar w3-black w3-card" style="font-size: 1.5em;">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="/winery/" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="/winery/show.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Wineries</a>
      <a href="/winery/login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
    <div class="w3-dropdown-hover w3-hide-small">      

    </div>
   
  </div>
</div>
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">  
  <a href="/winery/show.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Wineries</a>
  <a href="/winery/login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Login</a>
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it

</script>

