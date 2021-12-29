<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập Khách Hàng</title>
    <meta name="language" content="english" />
    <meta name="keywords" content="airprice, travel, cheap airfare, discount airfare" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Shortcut Icon" href="img/logo-i.png" type="img/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/test.css">
    <script src="js/main.js">
    </script>
</head>
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <a class="navbar-brand" href="homepage.html"><img src="img/TĐT_logo.png" alt="TĐTU"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" id="new">
                            <a class="dropdown-toggle" data-toggle="dropdown" style="padding-top:25px;"><span
									class="glyphicon glyphicon-user"> Đăng nhập&nbsp;</span>
								<span class="caret"></span>
							</a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #FFE174">
                                <li><a href="TruongPhong.html">Giám Đốc</a></li>
                                <li><a href="#">Trưởng Phòng</a></li>
                                <li><a href="#">Nhân Viên</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="dropdown" id="old">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top:25px;"><span
								class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
							<span class="caret"></span>
						</a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #FFE174">
                            <li><a href="showhistory.php">Lịch Sử</a></li>
                            <li><a href="cartshow.php">Giỏ hàng</a></li>
                            <li><a href="#" id="logout">Đăng xuất</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="introContent">
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" style="height:600px;">
                    <h1 id="introText1">TĐTU-Company</h1>
                    <p id="introText2">Đăng nhập</p>
                </div>
            </div>
        </div>
    </section>

    <section class="signIn">
        <div class="container" id="formSign">
            <div class="row">
                <div class="col-md-6  col-xs-12">
                    <h2>TĐTU-Group</h2>
                    
                </div>
                <div class="col-md-6 col-xs-12">
                    <form action="login.php" method="post">
                        <div class="container" id="main">
                            <input type="text" id="username" placeholder="Tên đăng nhập" name="username" required>
                            </br>
                            <input type="password" id="pwd" placeholder="Mật khẩu" name="pwd" required>
                        </div>
                        <div class="col-sm-offset-2 col-sm-6">
                            <div class="checkbox">
                                <label><input type="checkbox"> Ghi nhớ tên đăng nhập</label>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-danger btn-block" name="btn-login">Đăng
								nhập</button>
                        </div>
                        <br>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br /><br />
    <footer class="container-fluid text-center">
        <a title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <br>
        <p>Liên hệ với chúng tôi: </p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        <p>TĐTU.com</p>
        <p>Copyright &copy; 2020 TĐTU Company</p>
    </footer>
</body>

</html>