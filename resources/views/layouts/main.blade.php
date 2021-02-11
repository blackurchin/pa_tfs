<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{ trans('panel.site_title') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  @include('partials.header')
  @yield('content')

  @include('partials.footer')

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>

  <script>
      $(document).ready(function(){
          var maxLength = 230;
          $(".show-read-more").each(function(){
              var myStr = $(this).text();
              if($.trim(myStr).length > maxLength){
                  var newStr = myStr.substring(0, maxLength);
                  var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                  $(this).empty().html(newStr);
                  $(this).append(' <a href="http://www.shangri-la.com/manila/shangrilaatthefort/about/" target="_blank" class="btn-danger btn-sm">Read more...</a>');
//                  $(this).append(' <a href="javascript:void(0);" class="btn-success btn-sm read-more">Read more...</a>');

                  $(this).append('<span class="more-text">' + removedStr + '</span>');
              }
          });
          $(".read-more").click(function(){
              $(this).siblings(".more-text").contents().unwrap();
              $(this).remove();
          });
      });
  </script>
  <style>
    .show-read-more .more-text{
      display: none;
    }
  </style>

  @yield('scripts')
</body>

</html>
