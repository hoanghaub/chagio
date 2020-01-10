<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vua Cha Gio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|DM+Serif+Display:400,400i&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{url('')}}/public/template/ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{url('')}}/public/template/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('')}}/public/template/css/animate.css">
    <link rel="stylesheet" href="{{url('')}}/public/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/template/css/aos.css">

    <link rel="stylesheet" href="{{url('')}}/public/template/css/magnific-popup.css">


    <link rel="stylesheet" href="{{url('')}}/public/template/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/template/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('')}}/public/template/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('')}}/public/template/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{route('template')}}"><img src="{{url('')}}/public/template/img/chagio.jpg" alt="" width="100px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('template')}}">Trang Chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('introduction_view')}}">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu_view')}}">Thực Đơn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('promotion_view')}}">Khuyến Mãi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('news_view')}}">Tin Tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('image_view')}}">Hình Ảnh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact_view')}}">Liên Hệ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{url('')}}/public/template/img/thiet-ke-website-nha-hang.png');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up mb-5">Một không gian ẩm thực Hà Thành</h1>
                <p data-aos="fade-up" data-aos-delay="200">
                  Tại Vua Chả Giò chúng tôi luôn phục vụ những suất chả giò thơm ngon chứ danh của đất Hà Thành được chế biến tinh tế từ các nguyên liệu dễ kiếm bằng đẳng cấp của bếp trưởng gần 20 năm kinh nghiệm.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url('{{url('')}}/public/template/img/vuachaca.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up mb-5">Cảm giác thoải mái</h1>
                <p data-aos="fade-up" data-aos-delay="200">
                  Đội ngũ nhân viên phục vụ tại Vua Chả Giò sẽ luôn nhiệt tình và tận tâm để quý khách có được giảm giác thoải mái như tại nhà của mình.
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="slider-item" style="background-image: url('{{url('')}}/public/template/img/anh_1.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up mb-5">Một trải nghiệm tuyệt vời</h1>
                <p data-aos="fade-up" data-aos-delay="200">
                  Thưởng thức đặc sản truyền thống Hà Thành trong một không gian ấm cúng, sang trọng tiêu chuẩn 5 sao sẽ là một trải nghiệm tuyệt vời bên gia đình, bạn bè.
                </p>
              </div>
            </div>
          </div>
        </div>

      </section>
    <!-- END slider -->
    </div> 
    
    {{-- Promotion --}}
     <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row align-items-center">
          @foreach($article_detail_view as $adv)
          <div class="col-md-8">
            <h3><a href="" title="">{{$adv['name']}}</a></h3>
            <p>{{$adv['day']}}</p>
            <p>{{$adv['content']}}</p>
            <img src="{{url('public/image')}}/{{$adv['img']}}" alt="">
          </div>
          @endforeach
          <div class="col-md-4 ml-auto">
            <div class="text-left heading-wrap">
              <h2 data-aos="fade-up">Bài Viết Mới Nhất</h2>
            </div>
            <!-- <h3 class="mb-4">Welcome To Our Restaurant</h3> -->
          @foreach($article_view as $av)
            <p><a href="{{route('article_detail_view',['id'=>$av['id']])}}" title="" id="{{$av['id']}}">{{$av['name']}}</a></p>
          @endforeach
            <p><img src="{{url('')}}/public/template/img/signature.png" alt="Image" class="img-fluid w-25"></p>
          </div>
          
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>

    <footer class="site-footer" role="contentinfo">
      
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>Về Chúng Tôi</h3>
            <p class="mb-5">Hệ thống nhà hàng VUA CHẢ GIÒ là nhà hàng chả giò đầu tiên tại Hà Nội trang bị hệ thống hút mùi tiêu chuẩn Hàn Quốc, Bạn sẽ không còn lo lắng những mùi dầu mỡ khó chịu bám theo mình suốt cả ngày, Vua Chả Giò giới thiệu tới bạn một phong cách ẩm thực đặc sắc và hiện đại</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Giờ Mở Cửa</h3>
              <p><strong class="d-block font-weight-normal text-black">Thứ 2-Chủ Nhật</strong> 10h00 đến 22h00</p>
            </div>
            <div>
            @foreach($address_view as $av)
              <h3>{{$av['name']}}</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Địa Chỉ:</span>
                  <span>{{$av['address']}}</span></li>
                <li class="d-block"><span class="d-block text-black">Hotline:</span><span>{{$av['phone']}}</span></li>
                <li class="d-block"><span class="d-block text-black">Số chứng nhận đăng kí kinh doanh:</span><span>{{$av['business_registration_certificate_number']}}</span></li>
                <li class="d-block"><span class="d-block text-black">Đăng kí lần đầu:</span><span>{{$av['register']}}</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>{{$av['email']}}</span></li>
              </ul>
            @endforeach
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Đặt Bàn Ngay</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Cơ sở 1: 0979 77 55 12</a></li>
              <li><a href="#">Cơ sở 2: 0961 75 75 23</a></li>
              <li><a href="#">Cơ sở 3: 0961 75 75 53</a></li>
              <li><a href="#">Cơ sở 4: 0961 75 75 17</a></li>
              <li><a href="#">Cơ sở 5: 0961 75 75 81</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="{{url('')}}/public/template/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('')}}/public/template/js/popper.min.js"></script>
    <script src="{{url('')}}/public/template/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/public/template/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/public/template/js/jquery.waypoints.min.js"></script>
    <script src="{{url('')}}/public/template/js/aos.js"></script>

    <script src="{{url('')}}/public/template/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('')}}/public/template/js/magnific-popup-options.js"></script>
    

    <script src="{{url('')}}/public/template/js/main.js"></script>
    
  </body>
</html>