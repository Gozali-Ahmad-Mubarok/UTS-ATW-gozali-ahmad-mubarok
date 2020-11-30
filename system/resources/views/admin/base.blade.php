    <!doctype html>
    <html lang="en">
    
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <title>Artikel Gozali</title>
    
      <!-- Template CSS -->
      <link rel="stylesheet" href="{{url('public')}}/assets_admin/css/style-starter.css">
    
      <!-- google fonts -->
      <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    </head>
    
    <body class="sidebar-menu-collapsed">
      <div class="se-pre-con"></div>
    <section>
      <!-- //sidebar menu start --> 

    @include('admin/section/sidebar')

      <!-- //sidebar menu end -->
      <!-- header-starts -->
      @include('admin/section/header')
      <!-- //header-ends -->
      <!-- main content start -->
    <div class="main-content">
    
      <!-- content --> 
      @yield('content')
      <!-- //content -->
    </div>
    <!-- main content end-->
    </section>
      <!--footer section start--> 
      @include('admin/section/footer')
      <!--footer section end-->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };
    
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }
    
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    
    
    <script src="{{url('public')}}/assets_admin/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/assets_admin/js/jquery-1.10.2.min.js"></script>
    
    <!-- chart js -->
    <script src="{{url('public')}}/assets_admin/js/Chart.min.js"></script>
    <script src="{{url('public')}}/assets_admin/js/utils.js"></script>
    <!-- //chart js -->
    
    <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
    <script src="{{url('public')}}/assets_admin/js/bar.js"></script>
    <script src="{{url('public')}}/assets_admin/js/linechart.js"></script>
    <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->
    
    
    <script src="{{url('public')}}/assets_admin/js/jquery.nicescroll.js"></script>
    <script src="{{url('public')}}/assets_admin/js/scripts.js"></script>
    
    <!-- close script -->
    <script>
      var closebtns = document.getElementsByClassName("close-grid");
      var i;
    
      for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function () {
          this.parentElement.style.display = 'none';
        });
      }
    </script>
    <!-- //close script -->
    
    <!-- disable body scroll when navbar is in active -->
    <script>
      $(function () {
        $('.sidebar-menu-collapsed').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- disable body scroll when navbar is in active -->
    
     <!-- loading-gif Js -->
     <script src="{{url('public')}}/assets_admin/js/modernizr.js"></script>
     <script>
         $(window).load(function () {
             // Animate loader off screen
             $(".se-pre-con").fadeOut("slow");;
         });
     </script>
     <!--// loading-gif Js -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('public')}}/assets_admin/js/bootstrap.min.js"></script>
    
    </body>
    
    </html>
      