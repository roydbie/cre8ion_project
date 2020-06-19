<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cre8ion</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


  <!-- materialize icons, css & js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
  <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="../css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
  <link rel="manifest" href="../manifest.json">

  <!-- ios support-->
  <link rel="apple-touch-icon" href="icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#00985F">

</head>
<body class="white lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="/">CRE8ION <span>Start match</span></a>
      <span class="right green-text">
        <i class="material-icons sidenav-trigger" data-target="side-menu" style="color: #00985F;">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">CRE8ION Start match</a></li>
    <li><a href="../index.html" class="waves-effect">
      <i class="material-icons">home</i>Home</a>
    </li>
    <li><a href="leaderboard.php" class="waves-effect">
      <i class="material-icons">list</i>Leaderboard</a>
    </li>
    <li><a href="startmatch.php" class="waves-effect">
      <i class="material-icons">flash_on</i>Start match</a>
    </li>
    <li><a href="help.html" class="waves-effect">
      <i class="material-icons">help</i>Help</a>
    </li>
    <li><a href="settings.html" class="waves-effect">
      <i class="material-icons">settings</i>Settings</a>
    </li>
  </ul>

  <div class="row">
    <div class="col s6" style="margin-left:25vw;">
      <ul class="tabs">
        <li class="tab col s6"><a class="active" href="#test1">1 vs 1</a></li>
        <li class="tab col s6"><a href="#test2">2 vs 2</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <div class="row">
        <form class="col s6" style="margin-left:25vw;">
          <div class="row"><br></br>
            <div class="input-field col s6">
              <select>
                <option value="" selected>Choose your option</option>
                <option value="1">Roy de Bie</option>
                <option value="2">Pieter Wels</option>
                <option value="3">David Schol</option>
              </select>
              <label>Competitor 1</label>
            </div>
            <div class="input-field col s6">
              <select>
                <option value="" selected>Choose your option</option>
                <option value="1">Roy de Bie</option>
                <option value="2">Pieter Wels</option>
                <option value="3">David Schol</option>
              </select>
              <label>Competitor 2</label>
            </div>
          </div>
          <div class="col s12">
            <a class="waves-effect waves-light btn" style="background-color: #00985F;">These are the players!</a>
          </div>
        </form>
      </div>

    </div>
    <div id="test2" class="col s12">
      <div class="row">
        <form class="col s6" style="margin-left:25vw;">
          <div class="row"><br></br>
            <div class="input-field col s6">
              <select>
                <option value="" selected>Choose your option</option>
                <option value="1">Roy de Bie</option>
                <option value="2">Pieter Wels</option>
                <option value="3">David Schol</option>
              </select>
              <label>Team 1</label>
            </div>
            <div class="input-field col s6">
              <select>
                <option value="" selected>Choose your option</option>
                <option value="1">Roy de Bie</option>
                <option value="2">Pieter Wels</option>
                <option value="3">David Schol</option>
              </select>
            </div>
          <div class="input-field col s6">
            <select>
              <option value="" selected>Choose your option</option>
              <option value="1">Roy de Bie</option>
              <option value="2">Pieter Wels</option>
              <option value="3">David Schol</option>
            </select>
            <label>Team 2</label>
          </div>
          <div class="input-field col s6">
            <select>
              <option value="" selected>Choose your option</option>
              <option value="1">Roy de Bie</option>
              <option value="2">Pieter Wels</option>
              <option value="3">David Schol</option>
            </select>
          </div>
        </div>
        <div class="col s12">
          <a class="waves-effect waves-light btn" style="background-color: #00985F;">These are the players!</a>
        </div>
        </form>
      </div>

        </form>
      </div>


    </div>
  </div>


  <script src="../js/app.js"></script>
  <script src="../js/ui.js"></script>
  <script>
    var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el, {});

    document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('select');
     var instances = M.FormSelect.init(elems, options);
   });

   // Or with jQuery

   $(document).ready(function(){
     $('select').formSelect();
   });
  </script>
</body>
</html>
