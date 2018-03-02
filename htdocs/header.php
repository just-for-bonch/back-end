<!DOCTYPE html>
<html>
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="favicon.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <header><!-- start header -->
    <div class="main-menu"> <!-- главное меню -->
      <div class="container">
        <nav class="navbar row">
          <div class="col col-10">
          <ul class="row">
            <li class="logo col col-3"><a href="#"><img src="img/logo.svg"></a></li>
            <li class="nav-item col col-2"><a href="#">О системе</a></li>
            <li class="nav-item col col-2"><a href="#">Поддержка</a></li>
            <li class="social col col-2">
              <div><a href="#"><img src="img/github.svg"></a></div>
              <div><a href="#"><img src="img/vk.svg"></a></div>
            </li>
            <li class="profile col col-3">
              <div class="avatar-hello">
                <div class="avatar-image"><?php echo ("<img src='../".$_SESSION['img']."'>"); ?></div>
                <div><p style="margin: 0;">Hi, Tom!<br>
                  <a href="php/logout.php">Log Out</a></p></div>
              </div>
            </li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
  </header><!-- end header -->