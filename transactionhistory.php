<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSF Bank</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel = "icon" href = "img/logo.ico" type = "image/x-icon">
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1e272e;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <h1><a href="index.php">TSF Bank</a></h1>
        <ul class="navbar-nav">
          <li class="nav-item btn btn-secondary">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="http://amlan-007.github.io/Portfolio/">About Me</a>
          </li>
          <li class="nav-item btn btn-secondary">
            <a class="nav-link link-text text-white" href="contactme.php">Contact me</a>
          </li>
        </ul>

      </div>

    </div>
  </nav>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<div id="container">
    <div id="header"  class="footer">© 2021. Made with ❤️ by <a class="" href="http://amlan-007.github.io/Portfolio/">Amlan Dutta</a><br>
 </div>
</body>
</html>