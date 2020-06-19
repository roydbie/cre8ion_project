<?php
require('../database/database.php');
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cre8ion</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


  <!-- materialize icons, css & js -->
  <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="../css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <link rel="manifest" href="../manifest.json">

  <!-- ios support-->
  <link rel="apple-touch-icon" href="icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#00985F">

</head>
<body class="white lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="/">CRE8ION <span>LEADERBOARD</span></a>
      <span class="right green-text">
        <i class="material-icons sidenav-trigger" data-target="side-menu" style="color: #00985F;">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">CRE8ION LEADERBOARD</a></li>
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

  <?php
  $sql1 = "SELECT id, name, points FROM users WHERE points = (SELECT max(points) FROM users)";
  $result1 = mysqli_query($conn, $sql1);

  if (mysqli_num_rows($result1) > 0) {
    echo '<div class="users container grey-text text-darken-1">';
    while($row = mysqli_fetch_assoc($result1)) {
      echo "<script>console.log('User gevonden.' );</script>";
      echo '<div class="card-panel user grey lighten-4 row">
        <img src="../img/numb1.png" alt="not found">
        <div class="user-details">
          <div class="user-title">' . $row["name"] . '</div>
          <div class="user-info">Money in the bank:  &nbsp;&nbsp; &#36;	 ' . $row["points"] . '</div>
        </div>
        <div class="user-delete">
          <span>Win:</span> &nbsp;&#36;300
        </div>
      </div>';

    }
    echo '</div>';
  } else {
    echo "<script>console.log('Er is geen gebruikersnaam gevonden.' );</script>";
  }

  $sql2 = "SELECT MAX( points ) FROM users WHERE points < ( SELECT MAX( points ) FROM users )";
  $result2 = mysqli_query($conn, $sql2);

  if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {
      $amountofpoints= $row["MAX( points )"];
      $sql3 = "SELECT name, points FROM users WHERE points ='$amountofpoints'";
      $result3 = mysqli_query($conn, $sql3);

      if (mysqli_num_rows($result3) > 0) {
        echo '<div class="users container grey-text text-darken-1">';
        while($row = mysqli_fetch_assoc($result3)) {
          echo "<script>console.log('User gevonden.' );</script>";
          echo '<div class="card-panel user grey lighten-4 row">
            <img src="../img/numb2.png" alt="not found">
            <div class="user-details">
              <div class="user-title">' . $row["name"] . '</div>
              <div class="user-info">Money in the bank:  &nbsp;&nbsp; &#36;	 ' . $row["points"] . '</div>
            </div>
            <div class="user-delete">
              <span>Win:</span> &nbsp;&#36;300
            </div>
          </div>';

        }
        echo '</div>';
      } else {
        echo "<script>console.log('joejoe.' );</script>";
      }
    }
  } else {
    echo "<script>console.log('joejoe.' );</script>";
  }

  $sql4 = "SELECT MAX( points ) FROM users WHERE points < ( SELECT MAX( points ) FROM users WHERE points < ( SELECT MAX( points ) FROM users ))";
  $result4 = mysqli_query($conn, $sql4);

  if (mysqli_num_rows($result4) > 0) {
    while($row = mysqli_fetch_assoc($result4)) {
      $amountofpoints= $row["MAX( points )"];
      $sql5 = "SELECT name, points FROM users WHERE points ='$amountofpoints'";
      $result5 = mysqli_query($conn, $sql5);

      if (mysqli_num_rows($result5) > 0) {
        echo '<div class="users container grey-text text-darken-1">';
        while($row = mysqli_fetch_assoc($result5)) {
          echo "<script>console.log('User gevonden.' );</script>";
          echo '<div class="card-panel user grey lighten-4 row">
            <img src="../img/numb3.png" alt="not found">
            <div class="user-details">
              <div class="user-title">' . $row["name"] . '</div>
              <div class="user-info">Money in the bank:  &nbsp;&nbsp; &#36;	 ' . $row["points"] . '</div>
            </div>
            <div class="user-delete">
              <span>Win:</span> &nbsp;&#36;300
            </div>
          </div>';

        }
        echo '</div>';
      } else {
        echo "<script>console.log('joejoe.' );</script>";
      }
    }
  } else {
    echo "<script>console.log('joejoe.' );</script>";
  }

  $sql = "SELECT id, name, points FROM users ORDER BY points DESC LIMIT 100 OFFSET 3";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo '<div class="users container grey-text text-darken-1">';
    while($row = mysqli_fetch_assoc($result)) {
      echo "<script>console.log('User gevonden.' );</script>";
      echo '<div class="card-panel user grey lighten-4 row">
        <img src="../img/blank.png" alt="not found">
        <div class="user-details">
          <div class="user-title">' . $row["name"] . '</div>
          <div class="user-info">Money in the bank:  &nbsp;&nbsp; &#36;	 ' . $row["points"] . '</div>
        </div>
        <div class="user-delete">
          <span>Win:</span> &nbsp;&#36;300
        </div>
      </div>';

    }
    echo '</div>';
  } else {
    echo "<script>console.log('Er is geen gebruikersnaam gevonden.' );</script>";
  }

  ?>

  <div class="center">
    <a class="btn-floating btn-small btn-large add-btn sidenav-trigger" data-target="side-form">
      <i class="material-icons">add</i>
    </a>
  </div>

  <!-- add user side nav -->
  <div id="side-form" class="sidenav side-form">
    <form class="add-user container section">
      <h6 >New user</h6>
      <div class="divider"></div>
      <div class="input-field">
        <input placeholder="" id="title" type="text" class="validate">
        <label for="title">user Title</label>
      </div>
      <div class="input-field">
        <input placeholder="" id="info" type="text" class="validate">
        <label for="info">info</label>
      </div>
      <div class="input-field center">
        <button class="btn-small">Add</button>
      </div>
    </form>
  </div>

  <script src="../js/app.js"></script>
  <script src="../js/ui.js"></script>
</body>
</html>
