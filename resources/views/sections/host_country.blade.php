<section id="supporters" class="section-with-bg wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2 style="text-align: center">Host Country</h2>
    </div>
    {{--<p>About the Philippines</p>--}}
      <div class="row no-gutters supporters clearfix">
        <div class="col-md-4 col-xs-6">
            <div  id="video1" class="play-image">
              @if($settings['video_teaser1'])
                  <a href="{{ $settings['video_teaser1'] }}" class="venobox play mb-4"  data-autoplay="true" data-vbtype="video"></a>
                  {{--<a href="{{ $settings['youtube_link'] }}" title="Click to play video" class="venobox play-btn mb-4" data-vbtype="video"></a>--}}
              @endif
          </div>
            <p style="text-align: center">Philippine Army</p>
        </div>
        <div class="col-md-4 col-xs-6">
            <div  id="play" class="play-image">
            @if($settings['youtube_link'])
                  <a href="{{ $settings['youtube_link'] }}" class="venobox play mb-4"  data-autoplay="true" data-vbtype="video"></a>
                  {{--<a href="{{ $settings['youtube_link'] }}" title="Click to play video" class="venobox play-btn mb-4" data-vbtype="video"></a>--}}
            @endif
          </div>
            <p style="text-align: center">About the Philippines</p>
        </div>
        <div class=" col-md-4 col-xs-6">
            <div  id="video2" class="play-image">
                @if($settings['video_teaser2'])
                    <a href="{{ $settings['video_teaser2'] }}" class="venobox play mb-4"  data-autoplay="true" data-vbtype="video"></a>
                    {{--<a href="{{ $settings['youtube_link'] }}" title="Click to play video" class="venobox play-btn mb-4" data-vbtype="video"></a>--}}
                @endif
            </div>
            <p style="text-align: center">Uniqueness</p>
        </div>
    </div>
    <h2> Tourist Spot</h2>
    <div class="row no-gutters supporters clearfix">
      @foreach($tourists as $sponsor)
        <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
                <a href="{{ $sponsor->link }}"   target="_blank" style="color: black;"><img src="{{ $sponsor->logo ?  $sponsor->logo->getUrl()  : '/img/blank.jpg' }}" class="img-fluid" alt="{{ $sponsor->name }}"></a>
          </div>
            <p style="text-align: center"><a href="{{ $sponsor->link }}"   target="_blank" style="color: black;">{{ $sponsor->name }}</a></p>

        </div>
      @endforeach
    </div>
      <h2>Foods</h2>
      <div class="row no-gutters supporters clearfix">
          @foreach($foods as $sponsor)
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                      <a href="{{ $sponsor->link }}"   target="_blank" style="color: black;">     <img src="{{ $sponsor->logo ?  $sponsor->logo->getUrl()  : '/img/blank.jpg' }}" class="img-fluid" alt="{{ $sponsor->name }}"></a>
                  </div>
                  <p style="text-align: center"><a href="{{ $sponsor->link }}"  target="_blank" target="_blank" style="color: black">{{ $sponsor->name }}</a></p>
              </div>
          @endforeach
      </div>
      <h2>Cultures</h2>
      <div class="row no-gutters supporters clearfix">
          @foreach($cultures as $sponsor)
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                      <a href="{{ $sponsor->link }}"   target="_blank" style="color: black;">       <img src="{{ $sponsor->logo ?  $sponsor->logo->getUrl()  : '/img/blank.jpg' }}" class="img-fluid" alt="{{ $sponsor->name }}"></a>
                  </div>
                  <p style="text-align: center"><a href="{{ $sponsor->link }}"  target="_blank" style="color: black;" >{{ $sponsor->name }}</a></p>
              </div>
          @endforeach
      </div>
      <h2>Shopping Malls</h2>
      <div class="row no-gutters supporters clearfix">
          @foreach($shoppings as $sponsor)
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="supporter-logo">
                      <a href="{{ $sponsor->link }}"   target="_blank" style="color: black;">           <img  src="{{ $sponsor->logo ?  $sponsor->logo->getUrl()  : '/img/blank.jpg' }}" class="img-fluid" alt="{{ $sponsor->name }}"></a>
                  </div>
                  <p style="text-align: center"><a href="{{ $sponsor->link }}"   target="_blank" style="color: black">{{ $sponsor->name }}</a></p>
              </div>
          @endforeach
      </div>
  </div>
</section>
 <style>
 #play{
    background-image: url('/img/h_video/video2.PNG');
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


<style>
    #video1{
        background-image: url('/img/h_video/video1.PNG');
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
    #video1:hover {
        opacity: 1.0;
        filter: alpha(opacity=100); /* For IE8 and earlier */
    }
</style>

<style>
    #video2{
        background-image: url('/img/h_video/video3.PNG');
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
    #video2:hover {
        opacity: 1.0;
        filter: alpha(opacity=100); /* For IE8 and earlier */
    }
</style>