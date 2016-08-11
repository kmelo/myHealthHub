<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if (isset($title)): ?>
            <title>MyHealthHub<?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>MyHealthHub</title>
        <?php endif ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
            <div id="top">
                <div>
                    <a href="/"><img alt="MyHealthHub" src="/img/MyHealthHub-logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Medications<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                  <li><a href="medications.php">View Medications</a></li>
                                 <li><a href="managemeds.php">Manage Medications</a></li>
                             </ul>
                        </li>
                        <li><a href="vitals.php">My Weight</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Appointments<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                  <li><a href="appointments.php">View Appointments</a></li>
                                 <li><a href="manageappts.php">Manage Appointments</a></li>
                             </ul>
                        </li>
                          <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="doctors.php" role="button" aria-haspopup="true" aria-expanded="false">My Doctors<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="doctors.php">View Doctors</a></li>
                                 <li><a href="managedocs.php">Manage Doctors</a></li>
                             </ul>
                        </li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
  