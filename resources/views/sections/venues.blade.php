<section id="venue" class="wow fadeInUp">
    <div class="container-fluid">
        <div class="section-header">
            <h2>Event Venue</h2>
            <p>Event venue location info and gallery</p>
        </div>
    </div>
    @foreach($venues as $venue)
        <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-4 venue-info">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-8">
                        <h3 style="text-align:justify"><a href="https://www.shangri-la.com/manila/shangrilaatthefort/" target="_blank">{{ $venue->name }}</a></h3>
                        <p style="text-align:justify" class="show-read-more">{{ $venue->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 venue-map">
                <iframe src="https://maps.google.com/maps?q={{ $venue->latitude }},{{ $venue->longitude }}&hl=en&z=14&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if($venue->photos)
                        @foreach($venue->photos as $photo)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ $photo->getUrl() }}" class="d-block w-100"    width="460" height="520" alt="{{ $venue->name }}" >
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    @endforeach
</section>