<section id="intro">
  <div class="intro-container wow fadeIn">
    <div class="crossfade">

      <figure>1</figure>

      <figure>2</figure>

      <figure>3</figure>

      <figure>4</figure>

      <figure>5</figure>

      <figure>6</figure>

      <figure>7</figure>

      <figure>8</figure>

      <figure>9</figure>

      <figure>10</figure>

      <figure>11</figure>

      <figure>12</figure>

      <figure>13</figure>


    <div class="overlay-image col-md-12">
        <div class="text">
          44th Indo-Pacific Armies Management Seminar (IPAMS)<br>
          & 6th Senior Enlisted Leaders Forum (SELF) CY 2020<br>
          @if(Auth::check())
          <p class="b">{{ $settings['subtitle'] ?? '' }}</p>
            @if(Auth::check())
            @include('sections.countdown')
            @endif
          @endif
        </div>
    </div>
  </div>
  </div>
</section>

<style>

  /********* Simple or original overlay *******/
  /* Main container */
  .overlay-image {
    position: absolute;
    margin-top: 25px;

  }
   /*Extra large devices (large desktops, 1200px and up)*/
  @media (min-width: 1200px) {
    .overlay-image .text {
      color: #fff;
      font-size: 50px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;


    }
  }
  @media (min-width: 768px) and (max-width: 1024px) {
    .overlay-image .text {
      color: #fff;
      font-size: 50px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;
    }
  }
  @media (min-width: 320px)  and (max-width: 640px) {
    .overlay-image .text {
      color: #fff;
      font-size: 25px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;


    }
  }
  @media (min-width: 320px)  and (max-width: 568px) {
    .overlay-image .text {
      color: #fff;
      font-size: 12px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;

    }
  }
  @media (min-width: 360px)  and (max-width: 640px) {
    .overlay-image .text {
      color: #fff;
      font-size: 25px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;


    }
  }
  /*// Small devices (landscape phones, 576px and up)*/
  @media (min-width: 576px) and (max-width: 767.98px)  {
    .overlay-image .text {
      color: #fff;
      font-size: 30px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;

    }
  }
  /*// Medium devices (tablets, 768px and up)*/
  @media (min-width: 768px) and (max-width: 991.98px)  {
    .overlay-image .text {
      color: #fff;
      font-size: 30px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;

    }
  }
  /*// Large devices (desktops, 992px and up)*/
  @media (min-width: 992px) and (max-width: 1199.98px)  {
    .overlay-image .text {
      color: #fff;
      font-size: 30px;
      text-shadow: 2px 2px 2px #000;
      text-align: center;
      left: 0;
      transform: translate(-50%, -50%);
      width: 100%;
      font-family: "Times New Roman", Georgia, serif;
    }
  }
  p.b {
    font-family: Arial, Helvetica, sans-serif;
  }

  .crossfade > figure {

    animation: imageAnimation 40s linear infinite 0s;
    backface-visibility: hidden;
    background-size: cover;
    background-position: center center;

    color: transparent;

    height: 100%;

    left: 0;

    opacity: 0;

    position: absolute;

    top: 0;

    width: 100%;

    z-index: 0;

  }
  .crossfade > figure:nth-child(1) { background-image: url('../img/background/home/2.jpg'); }


  .crossfade > figure:nth-child(2) {

    animation-delay: 5s;

    background-image: url('../img/background/armor/2.JPG');

  }
  .crossfade > figure:nth-child(3) {
    animation-delay: 15s;
    background-image: url('../img/background/home/3.jpg');
  }


  .crossfade > figure:nth-child(4) {

    animation-delay: 22s;

    background-image: url('../img/background/infantry/4.JPG');

  }

  .crossfade > figure:nth-child(5) {

    animation-delay: 28s;

    background-image: url('../img/background/home/4.jpeg');

  }

  .crossfade > figure:nth-child(6) {

    animation-delay: 32s;

    background-image: url('../img/background/lrr/4.JPG');

  }

  .crossfade > figure:nth-child(7) {

    animation-delay: 38s;

    background-image: url('../img/background/home/4.jpg');

  }

  .crossfade > figure:nth-child(8) {

    animation-delay: 42s;

    background-image: url('../img/background/signal/4.JPG');

  }

  .crossfade > figure:nth-child(8) {

    animation-delay: 38s;

    background-image: url('../img/background/home/5.jpg');

  }
  .crossfade > figure:nth-child(8) {

    animation-delay: 42s;

    background-image: url('../img/background/armor/3.JPG');

  }

  .crossfade > figure:nth-child(9) {

    animation-delay: 38s;

    background-image: url('../img/background/home/6.jpg');

  }
  .crossfade > figure:nth-child(10) {

      animation-delay: 42s;

      background-image: url('../img/background/infantry/2.JPG');

    }

  .crossfade > figure:nth-child(11) {

    animation-delay: 48s;

    background-image: url('../img/background/home/7.jpg');

  }
  .crossfade > figure:nth-child(12) {

    animation-delay: 52s;

    background-image: url('../img/background/lrr/1.JPG');

  }

  .crossfade > figure:nth-child(13) {

    animation-delay: 58s;

    background-image: url('../img/background/home/9.jpg');

  }
  @keyframes

  imageAnimation {  0% {

    animation-timing-function: ease-in;

    opacity: 0;

  }

  8% {

    animation-timing-function: ease-out;

    opacity: 1;

  }

  17% {

    opacity: 1

  }

  25% {

    opacity: 0

  }

  100% {

    opacity: 0

  }

  }
</style>
