<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang bán hàng trực tuyến của Biti's Việt Nam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img-bitis/logo2-30x30.png">
	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bitis.css">
  <link rel="stylesheet" href="../bootstrap-4.3.1-dist/font-awesome/css/all.css">
</head>
<body>
	<section class=" bg-dark">
  <div class="container section-hotline"> 
  <ul class="nav nav-hotline d-flex justify-content-start ">
  <li class="nav-item menu-li ">
    <a class="nav-link active pl-0" href="#">Hotline: 0966 158 666 (8h- 12h, 13h30 - 17h)</a>
  </li>
  <li class="nav-item menu-li">
    <a class="nav-link active" href="#">Tìm cửa hàng</a>
  </li>
  <li class="nav-item menu-li">
    <a class="nav-link active" href="#">Liên hệ hợp tác</a>
  </li>
  <li class="nav-item menu-li">
    <a class="nav-link active" href="#">Ship Hàng Ra Nước Ngoài</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Kiểm tra đơn hàng</a>
  </li>
  <li class="nav-item menu-li" >
    <a class="nav-link active" href="#">Đăng Nhập</a>
  </li>
  <li class="nav-item">
    <span style="color: #fff; padding: 7px 10px; text-align: center; display: flex;" class="active">|</span>
  </li>
  <li class="nav-item menu-li">
    <a class="nav-link active" href="#">Đăng Ký</a>
  </li>
  <li class="nav-item">
    <a style="padding: 7px;" class="nav-link active" href="#">
      <img class="img-fluid" src="https://theme.hstatic.net/1000230642/1000484971/14/vi.png?v=1505" alt="">
    </a>
  </li>
    
  </ul>
  </div>
</section>

<section class="bg-white nav-bitis">
	<nav class="container navbar navbar-expand-lg navbar-light page-nav">
      <a class="navbar-brand mx-auto" href="../bitis.php">
        <img class="img-fluid" src="img-bitis/logo_bitis.png" alt="logo">
      </a>
      
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-item-1">
      	<li class="nav-item active">
        	<a style="padding: 28px 22px;" class="nav-link" href="../page-nam/nam.php">NAM<span class="sr-only">(current)</span></a>
      	</li>
      	<li class="nav-item active">
        	<a style="padding: 28px 28px;" class="nav-link" href="../page-nu/nu.php">NỮ</a>
      	</li>
      	<li class="nav-item active">
        	<a style="padding: 28px 15px;" class="nav-link" href="../page-betrai/betrai.php">BÉ TRAI</a>
      	</li>
      	<li class="nav-item active">
        	<a style="padding: 28px 15px;" class="nav-link" href="../page-begai/begai.php">BÉ GÁI</a>
      	</li>
      	<li class="nav-item active">
        	<a style="padding: 28px 15px;" class="nav-link" href="../page-gosto/gosto.php">GOSTO</a>
      	</li>
        <li class="nav-item active">
          <a style="padding: 28px 15px;" class="nav-link" href="#">VỀ BITIS</a>
        </li>
            <!-- <div class="nav-item active form-login">
              <a style="padding: 28px 15px;" class="nav-link" href="#">Đăng Nhập</a>
            </div>
            <div class="nav-item active form-login">
              <a style="padding: 28px 15px;" class="nav-link" href="#">Đăng Ký</a>
            </div> -->
          <form style="padding: 28px 15px; margin: 0 30px;" class="form-inline">
    <div class="input-group">
      <input style="height: 30px;" type="text" class="form-control" placeholder="Nhập thông tin cần tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
      <div class="input-group-prepend">
        <span class="input-group-text search-1" id="basic-addon1"><i class="fas fa-search"></i></span>
      </div>
    </div>
  </form>             
        <a class="navbar-brand px-2 mx-0" href="#">
          <i style="padding: 28px 2px;" class=" far fa-heart heart-1"></i>
          <i style="padding: 28px 2px;" class=" fas fa-shopping-cart giohang"></i>
      </a>
        
    </ul>
  	</div>
	</nav>
</section>


<script src="../bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
<script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <script>
  jQuery(document).ready(function($) {
  pos = $(".nav-bitis").position();
  $(window).scroll(function(){
    var posScroll = $(document).scrollTop();
    if(parseInt(posScroll) > parseInt(pos.top)) {
      $(".nav-bitis").addClass('fixed');
    } else {
      $(".nav-bitis").removeClass('fixed');
    }
  });
 });
</script>
</body>
</html>