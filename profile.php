<?php
require 'function.php';
if (isset($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM register WHERE id = $id"));
} else {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile | Page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/styleprofile.css">
</head>

<body>
  <div id="snippetContent">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" hidden href="javascript:void(0)">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" hidden href="javascript:void(0)">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="" hidden href="javascript:void(0)">Link</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="logout.php" class="btn btn-primary" type="button">Logout</a>
          </form>
        </div>
      </div>
    </nav>
    <section class="section about-section gray-bg" id="about">
      <div class="container">
        <div class="row align-items-center flex-row-reverse">
          <div class="col-lg-6">
            <div class="about-text go-to">

              <h6 class="theme-color lead">A Lead <?php echo $user["jobrole"]; ?></h6>
              <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in
                creating stylish, modern websites, web services and online stores. My passion is to
                design digital user experiences through the bold interface and meaningful interactions.
              </p>
              <div class="row about-list">
                <div class="col-md-6">
                  <div class="media"> <label>Name</label>
                    <p><?php echo $user["name"]; ?></p>
                  </div>
                  <div class="media"> <label>Age</label>
                    <p><?php echo $user["age"]; ?></p>
                  </div>
                  <div class="media"> <label>DOB</label>
                    <p><?php echo $user["DOB"]; ?></p>
                  </div>
                  <div class="media"> <label>Email</label>
                    <p><?php echo $user["email"]; ?></p>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="media"> <label>contact</label>
                    <p><?php echo $user["contactno"]; ?></p>
                  </div>
                  <div class="media"> <label>country</label>
                    <p><?php echo $user["country"]; ?></p>
                  </div>
                  <div class="media"> <label>state</label>
                    <p><?php echo $user["state"]; ?></p>
                  </div>
                  <div class="media"> <label>Job Role</label>
                    <p><?php echo $user["jobrole"]; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-avatar"> <img width="315" height="315" src="images/avatar7.jpg" alt="user_pic"></div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript"></script>
  </div>
  <script src="jquery/jquery-3.6.0.js"></script>
<script src="js/script.js"></script></body>

</html>