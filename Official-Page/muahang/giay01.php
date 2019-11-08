<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cao</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img-bitis/logo2-30x30.png">
  <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bitis.css">
  <link rel="stylesheet" href="giay01.css">
  <link rel="stylesheet" href="../../bootstrap-4.3.1-dist/font-awesome/css/all.css">
  <link rel="stylesheet" href="css/jquery.wm-zoom-1.0.min.css">
</head>
<body>
<?php 
    include('../head-muahang.php');
?>

<section class="bg-light ten_giay">
  <div class="container d-flex tensp">
    <p>Trang Chủ</p>
    <p>></p>
    <p>Tổng Hợp</p>
    <p>></p>
    <p>NAM</p>
    <p>></p>
    <p>Giày Thể Thao Nam Biti's Hunter X BKL - Midnight Black Inverted 02302D</p>
  </div>
</section>

<section class="container">
  <div class="row">
    <div class="col-6">
      <div class="wm-zoom-container my-zoom-1 zoom_anh01">
        <div class="wm-zoom-box">
            <img id="b" src="img-bitis/mua-giay/giay01.png" class="wm-zoom-default-img" alt="alternative text" data-hight-src="img-bitis/mua-giay/giay01.png" data-loader-src="img-bitis/mua-giay/loader.gif">
        </div>
    </div>
    </div>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo expedita maxime dignissimos amet, temporibus facere voluptates tempora distinctio repellat assumenda id quos itaque vel at recusandae aspernatur commodi aliquid minima.</p>
    </div>
  </div>
</section>



<?php 
    include('../footer.php');
?>


<script src="../../bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
<script src="../../bootstrap-4.3.1-dist/js/popper.min.js"></script>
<script src="../../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/jquery.wm-zoom-1.0.min.js"></script>
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
<script type="text/javascript">
      $(document).ready(function(){
        $('.my-zoom-1').WMZoom();
        $('.my-zoom-2').WMZoom({
          config : {
            inner : true
          }
        });
      });
        </script>

</body>
</html>
      