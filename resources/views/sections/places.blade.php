<section id="supporters" class="section-with-bg wow fadeInUp">

  <div class="container" style="height: 1000px;">
    <div class="section-header">
      <h2>Explore Interest</h2>
    </div>
    <h2 style="margin-left: 330px">About the Philippines</h2>
    <div class="row">
      <div class="column">
      </div>
      <div class="column">
          <div  id="play" class="play-image">
            @if($settings['youtube_link'])
              <a href="{{ $settings['youtube_link'] }}" title="Click to play video" class="venobox play-btn mb-4" data-vbtype="video"></a>
            @endif
          </div>
        </div>

        <div class="column">
        </div>
    </div>
    <h2> Tourist Spot</h2>
    <div class="row no-gutters supporters-wrap clearfix">
      @foreach($sponsors as $sponsor)
        <div class="col-lg-3 col-md-4 col-xs-6">
            {{--<p style="text-align: center"><a href="{{ $sponsor->link }}">{{ $sponsor->name }}</a></p>--}}

            <div class="supporter-logo">
            <img src="{{ $sponsor->logo->getUrl() }}" class="img-fluid" alt="{{ $sponsor->name }}" style="height: 350px;">
          </div>
        </div>
      @endforeach
    </div>
      <h2>Filipino Food</h2>
      <div class="row no-gutters supporters-wrap clearfix">
          @foreach($sponsors as $sponsor)
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                      <img src="{{ $sponsor->logo->getUrl() }}" class="img-fluid" alt="{{ $sponsor->name }}" style="height: 350px;">
                  </div>
                  {{--<p style="text-align: center"><a href="{{ $sponsor->link }}">{{ $sponsor->name }}</a></p>--}}
              </div>
          @endforeach
      </div>
  </div>
</section>


<style>
  * {
    box-sizing: border-box;
  }

  /*img{*/
    /*height: 70px;*/
    /*width: 80px;*/
  /*}*/

  .column {
    float: left;
    width: 30%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
</style>


<style>
  #play{
    background-image: url('/img/about.png');
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
    height: 200px;
    width: 320px;
    line-height: 200px;
    background-size: 540px;
    /*height: 300px;*/
    border: 2px solid;
    text-shadow: white 0px 0px 2px;
    /*font-size: 16px;*/
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.5;
    filter: alpha(opacity=50);

  }
  #play:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
  }
</style>