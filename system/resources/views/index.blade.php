<!--A Design by W3layouts
	Author: W3layout
	Author URL: http://w3layouts.com
	-->
	<!DOCTYPE HTML>
	<html>
	<head>
	<title>Gaming Blog Bootstarp Website Template | Home :: w3layouts</title>
	<link href="{{url('public')}}/assets_user/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{url('public')}}/assets_user/js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="{{url('public')}}/assets_user/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Google Fonts -->
	<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{url('public')}}/assets_user/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}
	
		};
		
		// Run the show!
		filterList.init(); 
	});	
	</script>
	</head>
	<body>
	<!-- Header Starts Here -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="{{url('public')}}/assets_user/images/logo.png" alt=""></a>
			</div>
			<span class="menu"></span>
			<div class="navigation">
				<ul class="navig cl-effect-3" >
					<li><a href="{{url('index')}}">Home</a></li> 
					<li><a href="{{url('blog')}}">artikel</a></li> 
					<li><a href="{{url('login')}}">login</a></li> 
				</ul>
				<div class="search-bar">
						<input type="text" placeholder="Search" required="" />
						<input type="submit" value="" />
				</div>
				<div class="clearfix"></div>
				<script>
					$( "span.menu" ).click(function() {
					  $( ".navigation" ).slideToggle( "slow", function() {
						// Animation complete.
					  });
					});
				</script>
	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="banner"></div>
	<!-- Header Ends Here -->	
	<div class="banner-bot">
		<div class="container">
			<h2>Hello!</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
			<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima</p>
			<nav class="cl-effect-3"><a href="#">More</a></nav>
		</div>
	</div>
	<!-- Gallery Starts Here -->
	<div class="games">
		<div class="container">
			<div class="page-path">
				<ul class="path-list">
					<li><a href="index.html">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
					<li><a href="blog.html">Blog</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
					<li class="act">Details</li>
				</ul>
				<p><a href="index.html">Back to Home</a></p>
				<div class="clearfix"></div>
			</div>
			<h3 class="page-header">
				Recent Blogs
			</h3>
			<div class="blog-content">
				<div class="blog-post">
					<h3><a href="#">Internet tend to repeat predefined chunks as necessary</a></h3>
					<div class="post-details">
						<p>Posted By <a href="#">Jackie</a> &nbsp;&nbsp; On <span>15 jan, 2015</span> &nbsp;&nbsp; Comments<span>(10)</span></p>
					</div>
					<img src="images/blog1.jpg" alt="">
					<h4>sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free</h4>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
				</div>
				
				<div class="comment-box">
					<h3 class="page-header">Comment Here </h3>
					<div class="text-cmt">
						<input type="text" placeholder="Name" required=""/>
						<input type="text" placeholder="Email" required=""/>
					</div>
					<div class="text-cmt">
						<textarea placeholder="Message" required=""></textarea>
					</div>
					<div class="text-cmt">
						<input type="submit" />
					</div>
				</div>
			</div>
	<!-- Footer Starts Here -->
	<div class="footer">
		<div class="container">
			<p>&copy; 2020 Gaming Blog. All Rights Reserved. Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
		
	</div>
	<!-- Footer Ends Here -->
	</body>
	</html>