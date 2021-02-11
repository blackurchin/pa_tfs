<section id="gallery" class="wow fadeInUp">

  <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
    </div>
  </div>
  @foreach($galleries as  $gallery)
    <h2 style="text-align: center">{{ $gallery->name }}</h2>
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
        <a href="{{ $photo->getUrl() }}" class="image"  data-title="{{ $gallery->name }}" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
      @endforeach
    </div>
  @endforeach
</section>