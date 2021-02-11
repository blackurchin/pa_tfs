<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        @guest
        <div class="col-lg-6 col-md-6 footer-info">
        @endguest
       @auth
       <div class="col-lg-4 col-md-6 footer-info">
        @endauth
          {{--<img src="img/logo.png" alt="IPAMS">--}}
          <h4>The Event</h4>
          <p>{{ $settings['footer_description'] ?? '' }}</p>
        </div>
        @guest
        <div class="col-lg-6 col-md-6 footer-links">
        @endguest
       @auth
       <div class="col-lg-4 col-md-6 footer-links">
        @endauth
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#intro">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            @guest
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('login') }}">Login</a></li>
            @endguest
            @auth
              <li><i class="fa fa-angle-right"></i> <a href="{{ route('admin.home') }}">Admin Panel</a></li>
            @endauth
          </ul>
        </div>
        @auth
        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            {!! $settings['footer_address'] ?? '' !!}<br>
            <strong>Landline:</strong> {{ $settings['contact_phone'] }}<br>
            <strong>Email:</strong> {{ $settings['contact_email'] }}<br>
          </p>

          <div class="social-links">
            <a href="{{ $settings['footer_twitter'] ?? '' }}" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ $settings['footer_facebook'] ?? '' }}" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ $settings['footer_instagram'] ?? '' }}" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="{{ $settings['footer_googleplus'] ?? '' }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="{{ $settings['footer_linkedin'] ?? '' }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>
        @endauth
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>{{ env('APP_NAME', 'IPAMS') }}</strong>. All Rights Reserved
    </div>
    <div class="credits">
      Powered by <a href="https://www.army.mil.ph">ISDC, NETB, ASR, PA</a>
    </div>
  </div>
</footer><!-- #footer -->
