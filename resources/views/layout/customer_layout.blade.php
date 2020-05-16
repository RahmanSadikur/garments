<!DOCTYPE html>
<html lang="en">
<head>
<title>>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('website/styles/bootstrap-4.1.3/bootstrap.css')}}">
<link href="{{asset('website/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/styles/responsive.css ')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/style/style.css')}}" />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
</head>
<body>

<div class="super_container">





	<!-- Menu -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="nav-link" href="{{route('user.index')}}">{{ session('email') }}</a>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" id="search"aria-label="Search">
            <a href="{{ route('item.search') }}"<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </a>
          </form>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{route('cart.index')}}">Cart</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout.index')}}"><span class="fas fa-sign-in-alt"></span> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col-sm-4"></div>
      <div class="col-sm-4"id="country_list"></div>
      <div class="col-sm-4"></div>
      </div>

	<!-- Sidebar -->

	<div class="sidebar">




		<div class="sidebar_logo">
			<a href="#"><div>RIP<br><span style="font-size: 20px">Garments</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
                <li><a href="{{route('customer.index')}}">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="{{route('user.index')}}">Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				<li><a href="{{route('category.showall')}}">Category<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="{{route('favourite.index')}}">Favourite<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="{{route('order.index')}}">Order History<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="{{route('payment.index')}}">Payment History<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>



		<!-- Cart -->


	</div>

	<div class="home">
		@yield('content')
	</div>
</div>
	<!-- Footer -->

	<footer class="footer">

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src=" {{asset('website/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('website/styles/bootstrap-4.1.3/popper.js')}}"></script>
<script src="{{asset('website/styles/bootstrap-4.1.3/bootstrap.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('website/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('website/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src=" {{asset('website/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src=" {{asset('website/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('website/plugins/easing/easing.js')}}"></script>
<script src="{{asset('website/plugins/parallax-js-master/parallax.min.js ')}}"></script>
<script src=" {{asset('website/plugins/Isotope/isotope.pkgd.min.js ')}}"></script>
<script src=" {{asset('website/plugins/Isotope/fitcolumns.js')}}"></script>
<script src=" {{asset('website/js/custom.js')}}"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script>






       <script type="text/javascript">
            $(document).ready(function () {

                $('#search').on('keyup',function() {
                    var query = $(this).val();
                    $.ajax({

                        url:"{{ route('item.search') }}",

                        type:"GET",

                        data:{'search':query},

                        success:function (data) {

                            $('#search_list').html(data);
                        }
                    })
                    // end of ajax call
                });


                $(document).on('click', 'li', function(){

                    var value = $(this).text();
                    $('#search').val(value);
                    $('#search_list').html("asdfghj");
                });
            });
        </script>


</body>
</html>
