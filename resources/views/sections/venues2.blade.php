<section id="venue" class="wow fadeInUp">
    <div class="container-fluid">
      <div class="section-header">
        <h2>Event Venue</h2>
        <p>Event venue location info and gallery</p>
      </div>
    </div>
  @foreach($venues as $venue)
    <div class="row no-gutters">
        <div class="col-lg-4 venue-info">
            <div class="row justify-content-center">
                <div class="col-11 col-lg-6">
                    <ul class="nav-menu">
                        <li><a href="https://www.shangri-la.com/manila/shangrilaatthefort/" target="_blank"  style=""><h3>{{ $venue->name }}</h3></a></li></ul>
                    <p style="text-align:justify">{{ $venue->description }}</p>
                </div>
            </div>
        </div>
      <div class="col-lg-3 venue-map">
        <iframe src="https://maps.google.com/maps?q={{ $venue->latitude }},{{ $venue->longitude }}&hl=en&z=14&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

        {{--<div class="col-lg-5 venue-map">--}}
            {{--<div class="w3-content w3-section col-lg-5">--}}
            {{--<div class="col-lg-5 venue-map">--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/1.jpg">--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/2.jpg" >--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/4.jpg">--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--<div class="w3-content w3-section col-lg-5">--}}
            {{--<p>Some Photos.</p>--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/1.jpg">--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/2.jpg" >--}}
            {{--<img class="mySlides w3-animate-fading" src="/img/venue/4.jpg">--}}
        {{--</div>--}}

            <div class="col-lg-4 venue-photo">
                {{--<div class="col-11 col-lg-6">--}}
                    {{--<div class="w3-content w3-section col-lg-5">--}}
                    {{--<p>Some Photos.</p>--}}
                    <img class="mySlides w3-animate-fading" src="/img/venue/1.jpg">
                    <img class="mySlides w3-animate-fading" src="/img/venue/2.jpg" >
                    <img class="mySlides w3-animate-fading" src="/img/venue/4.jpg">
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="container-fluid venue-gallery-container">
      <div class="row no-gutters">
        @if($venue->photos)
          @foreach($venue->photos as $photo)
            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="venue-gallery">
                  <img src="{{ $photo->getUrl() }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  @endforeach
</section>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 9000);
    }
</script>
<style>
    img {
        max-width: 200%;
        max-height: 120%;
    }

    .auto-slider img{
        /*width:720px;*/
        /*height:3000px;*/
        position: relative;
        padding-top: 60px;
        padding-bottom: 60px;

    }
    .w3-section{
        /*outline:1px solid red;*/
        /*width:720px;*/
        /*height:760px;*/

        overflow-x:hidden;
    }


    @keyframes slide{
        50%{
            transform:translateX(0);
        }
        50%, 30%{
            transform:translateX(-720px);
        }
        35%, 50%{
            transform:translateX(-1440px);
        }
        55%, 70%{
            transform:translateX(-2160px);
        }
        75%, 90%{
            transform:translateX(0);
        }

    }
</style>