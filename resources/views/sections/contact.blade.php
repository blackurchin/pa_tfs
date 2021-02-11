<section id="contact" class="section-bg wow fadeInUp">

  <div class="container" style="height: 800px;">

    <div class="section-header">
      <h2>Contact Us</h2>
      {{--<p>Ac of S for Plans, OG5, PA.</p>--}}
    </div>

    <div class="row contact-info">

      <div class="col-md-5">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <address>{!! $settings['contact_address'] ?? '' !!}</address>
        </div>
      </div>

      <div class="col-md-3">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>LandLine</h3>
          <p><a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '') }}">{{ $settings['contact_phone'] ?? '' }}</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? '' }}</a></p>
        </div>
      </div>

    </div>

    <div class="form">
      {{--<div id="sendmessage">Your message has been sent. Thank you!</div>--}}
      {{--<div id="errormessage"></div>--}}
      {{--<form action="" method="post" role="form" class="contactForm">--}}
      {{--<div class="form-group col-md-6">--}}
      {{--<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
      {{--<div class="validation"></div>--}}
      {{--</div>--}}          {{--<div class="form-group col-md-6">--}}
            {{--<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />--}}
            {{--<div class="validation"></div>--}}
          {{--</div>--}}
          {{--<div class="form-group col-md-6">--}}
            {{--<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
            {{--<div class="validation"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />--}}
          {{--<div class="validation"></div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>--}}
          {{--<div class="validation"></div>--}}
        {{--</div>--}}
        <div class="text-center"><button type="submit"  data-toggle="modal" data-target="#exampleModal">Technical assistance</button></div>
      {{--</form>--}}
    </div>

  </div>
</section><!-- #contact -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Technical Assistance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form">
        <div class="form-group col-md-12">
          <input type="text" class="form-control" name="name" id="email" placeholder="Country" data-rule="email" hidden value="{{Auth::user()->country}}"  data-msg="Please enter a valid country" />

          {{--<select name="speaker_id" id="speaker" class="form-control select2">--}}
            {{--<option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.selectCountry') }}</option>--}}
            {{--@foreach($countries as $country)--}}
              {{--<option value="">{{$country->name}}</option>--}}
            {{--@endforeach--}}
          {{--</select>--}}
          <div class="validation"></div>
        </div>
        </div>
        <div class="form">
        <div class="form-group col-md-12">
        <input type="email" class="form-control" name="name" id="email" placeholder="Complete Name" data-rule="email" data-msg="Please enter a valid email" />
        <div class="validation"></div>
        </div>
      </div>
        <div class="form-group col-md-12">
          <textarea class="form-control" name="message" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Issue and Concern"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form">
          <div class="form-group col-md-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form">
          <div class="form-group col-md-12">
            <input type="email" class="form-control" name="number" id="email" placeholder="Phone Number" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-sm btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn-sm btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
