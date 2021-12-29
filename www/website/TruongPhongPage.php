<!DOCTYPE html>
<html lang="en">

<head>
	<title>Trang chủ Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="Shortcut Icon" href="img/logo-i.png"  type="img/x-icon"/> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/test.css">
	<script src="js/main.js"></script>
</head>

<body>
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
      
</nav>
	<section class="introContent">
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron" style="height:600px;">
          <h1 id="introText1">Kính Chào Giám Đốc</h1>
        </div>
      </div>
    </div>
  </section>

	<div class="container">
		<div class="btn-group btn-group-justified">
			<div class="btn btn-primary btn-danger" id="a">Thêm</div>
			<div class="btn btn-primary btn-danger" id="u">Cập Nhật</div>
			<div class="btn btn-primary btn-danger" id="d">Xóa</div>
		</div>
		<hr />
		<div id="add">
			<form class="form-horizontal" role="form" id="addf">
				<div class="form-group">
					<label class="control-label col-sm-2" for="flightno2">#1</label>
					<div class="col-sm-6">
						<input type="flightno" class="form-control" id="flightno2" placeholder="" name="flightno">
					</div>

				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="airplaneid2">#2</label>
					<div class="col-sm-6">
						<input type="airplaneid" class="form-control" id="airplaneid2" placeholder="" name="airplaneid">
					</div>
					<label class="control-label col-sm-1" for="airpiddetail" id="ad1">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="detail">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="departure">#3</label>
					<div class="col-sm-6">
						<input type="departure" class="form-control" id="departure2" placeholder="" name="departure">
					</div>
					<label class="control-label col-sm-1" for="dairportdetail" id="ad2">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="adetail2">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="dtime">#4</label>
					<div class="col-sm-6">
						<input type="dtime" class="form-control" id="dtime2" placeholder="" name="dtime">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="arrival">#5</label>
					<div class="col-sm-6">
						<input type="arrival" class="form-control" id="arrival2" placeholder="" name="arrival">
					</div>
					<label class="control-label col-sm-1" for="dairportdetail" id="ad3">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="adetail3">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="atime">#6</label>
					<div class="col-sm-6">
						<input type="atime" class="form-control" id="atime2" placeholder="" name="atime">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ecapacity">#7</label>
					<div class="col-sm-6">
						<input type="ecapacity" class="form-control" id="ecapacity2" placeholder="" name="ecapacity">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="eprice">#8</label>
					<div class="col-sm-6">
						<input type="eprice" class="form-control" id="eprice2" placeholder="" name="eprice">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="bcapacity">#9</label>
					<div class="col-sm-6">
						<input type="bcapacity" class="form-control" id="bcapacity2" placeholder="" name="bcapacity">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="bprice">#10</label>
					<div class="col-sm-6">
						<input type="bprice" class="form-control" id="bprice2" placeholder="" name="bprice">
					</div>
				</div>

				<br />
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
						<input type="button" class="btn btn-primary btn-block btn-success" name="btn-submit" id="ad" value="Thêm" />
					</div>
				</div>
			</form>
		</div>
		
		<div id="update">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="control-label col-sm-2" for="number">#1</label>
					<div class="col-sm-6">
						<input type="flightno" class="form-control" name="number" id="number" placeholder="">

					</div>
					<div class="col-sm-2">
						<input type="button" class="btn btn-success btn-block" name="search" id="search"
							value="Search" />
					</div>
				</div>
			</form>
			<form class="form-horizontal" role="form" id="result">
				<div class="form-group">
					<label class="control-label col-sm-2" for="flightno">#11</label>
					<div class="col-sm-6">
						<input type="flightno" class="form-control" id="flightno1" placeholder="" name="flightno">

					</div>

				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="airplaneid">#2</label>
					<div class="col-sm-6">
						<input type="airplaneid" class="form-control" id="airplaneid1" placeholder="" name="airplaneid">
					</div>

					<label class="control-label col-sm-1" for="dairportdetail" id="ud1">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="detail1">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="departure">#3</label>
					<div class="col-sm-6">
						<input type="departure" class="form-control" id="departure1" placeholder="" name="departure">
					</div>
					<label class="control-label col-sm-1" for="dairportdetail" id="ud2">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="udetail2">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="dtime">#4</label>
					<div class="col-sm-6">
						<input type="dtime" class="form-control" id="dtime1" placeholder="" name="dtime">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="arrival">#3</label>
					<div class="col-sm-6">
						<input type="arrival" class="form-control" id="arrival1" placeholder="" name="arrival">
					</div>
					<label class="control-label col-sm-1" for="dairportdetail" id="ud3">
						<font color="gray">Chi tiết</font>
					</label>
					<div class="col-sm-3" id="udetail3">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="atime">#6</label>
					<div class="col-sm-6">
						<input type="atime" class="form-control" id="atime1" placeholder="" name="atime">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ecapacity">#9</label>
					<div class="col-sm-6">
						<input type="ecapacity" class="form-control" id="ecapacity1" placeholder="" name="ecapacity">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="eprice">#8</label>
					<div class="col-sm-6">
						<input type="eprice" class="form-control" id="eprice1" placeholder="" name="eprice">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="bcapacity">#9</label>
					<div class="col-sm-6">
						<input type="bcapacity" class="form-control" id="bcapacity1" placeholder="" name="bcapacity">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="bprice">#10</label>
					<div class="col-sm-6">
						<input type="bprice" class="form-control" id="bprice1" placeholder="" name="bprice">
					</div>
				</div>

				<br />
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
						<input type="button" class="btn btn-primary btn-block btn-success" value="Cập Nhật" id="up" />
						<input type="button" class="btn btn-primary btn-block btn-danger" value="Xóa" id="de" />
					</div>
				</div>
			</form>
		</div>
		<div id="delete">
		</div>
		<br /><br /><br />
	</div>

	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
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