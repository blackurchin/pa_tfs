<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp" style="height: 1500px;">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>

    <ul class="nav nav-tabs" role="tablist">
      @foreach($schedules as $key => $day)
        <li class="nav-item">
            @if($key === 0)
            <a class="nav-link{{ $key === 1 ? ' active' : '' }}" href="#day-{{ $key }}" role="tab" data-toggle="tab">Before the Event</a>
             @else
            <a class="nav-link{{ $key === 1 ? ' active' : '' }}" href="#day-{{ $key }}" role="tab" data-toggle="tab">Day {{ $key }}</a>
            @endif
        </li>
      @endforeach
    </ul>

    <h3 class="sub-heading">The 44th IPAMS and 6th SELF 2020 will be a three (3) days event, excluding the arrival and departure of delegates, starting from 24 to 26 August 2020
        with the following general activities.</h3>

    <div class="tab-content row justify-content-center">
      @foreach($schedules as $key => $day)
          @if($key === 0)
                <div role="tabpanel" class="col-lg-9 tab-pane fade{{ $key === 0 ? ' show active' : '' }}" id="day-{{ $key }}">
                    @foreach($day as $schedule)
                        <div class="row schedule-item">
                            <div class="col-md-2"><time>{{ \Carbon\Carbon::parse($schedule->start_time)->format("h:i A") }}</time></div>
                            @if(!$schedule->subtitle)
                                <div class="col-md-4"><time>{{$schedule->subtitle}}</time></div>
                             @else
                             <div class="col-md-4"><time>{{\Carbon\Carbon::parse($schedule->subtitle)->format('j F, Y') ?? ''}}</time></div>
                            @endif
                            <div class="col-md-6">
                                @if($schedule->speaker)
                                    <div class="speaker">
                                        <img src="{{$schedule->speaker->photo? $schedule->speaker->photo->getUrl()  : '/img/speakers/empty.png'}}" alt="{{ $schedule->speaker->name }}">
                                    </div>
                                @endif
                                <h4>{{ $schedule->title }} @if($schedule->speaker)<span>{{ $schedule->speaker->name }}</span>@endif</h4>
                                {{--<p>{{ $schedule->subtitle }}</p>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
            <div role="tabpanel" class="col-lg-9 tab-pane fade{{ $key === 1 ? ' show active' : '' }}" id="day-{{ $key }}">
          @foreach($day as $schedule)
            <div class="row schedule-item">
              <div class="col-md-2"><time>{{ \Carbon\Carbon::parse($schedule->start_time)->format("h:i A") }}</time></div>
                @if(!$schedule->subtitle)
                    <div class="col-md-4"><time>{{$schedule->subtitle}}</time></div>
                @else
                    <div class="col-md-4"><time>{{\Carbon\Carbon::parse($schedule->subtitle)->format('j F, Y') ?? ''}}</time></div>
                @endif
                <div class="col-md-6">
                @if($schedule->speaker)
                  <div class="speaker">
                    <img src="{{$schedule->speaker->photo? $schedule->speaker->photo->getUrl()  : '/img/speakers/empty.png'}} " alt="{{ $schedule->speaker->name }}">
                  </div>
                @endif
                <h4>{{ $schedule->title }} @if($schedule->speaker)<span>{{ $schedule->speaker->name }}</span>@endif</h4>
                {{--<p>{{ $schedule->subtitle }}</p>--}}
              </div>
            </div>
          @endforeach
        </div>
      @endif
      @endforeach
    </div>
  </div>
</section>
