<section id="register" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Register Now</h2>
      <p>Registration Requirements.</p>
    </div>
    <div class="form">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Middle Name"  data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Rank" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>

          <div class="form-group col-md-6">
            <select name="speaker_id" id="speaker" class="form-control select2">
            <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.selectCountry') }}</option>
              @foreach($countries as $country)
            <option value="">{{$country->description}}</option>
              @endforeach

          </select>
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Duty Position" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Department" data-rule="minlen:4"  data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Organization" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="number" name="name" class="form-control" id="name" placeholder="Age" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <select name="speaker_id" id="speaker" class="form-control select2">
              <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.selectGender') }}</option>
              <option value="">Male</option>
              <option value="">Female</option>
            </select>
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
          <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="number" name="name" class="form-control" id="name" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
        </div>

        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Passport Information"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="IPAMS or SELF attendance"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Flight Information"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Hotel Registration"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Dietary Restrictions"></textarea>
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Provide Access to US Planners"></textarea>
          <div class="validation"></div>
        </div>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
          </div>
        </div>
        <br>
        <div class="text-center"><button type="submit">Register</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
