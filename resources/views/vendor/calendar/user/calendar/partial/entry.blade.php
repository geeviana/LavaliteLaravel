
<div class='col-md-6 col-sm-12'>
       {!! Form::text('title')
       -> required()
       -> label(trans('calendar::calendar.label.title'))
       -> placeholder(trans('calendar::calendar.placeholder.title'))!!}
</div>
<div class='col-md-6 col-sm-12'>
       {!! Form::text('location')
       -> label(trans('calendar::calendar.label.location'))
       -> placeholder(trans('calendar::calendar.placeholder.location'))!!}
</div>
<div class='col-md-6 col-sm-12'>
  
        {!! Form::datetime('start')
        ->label('Start Date')
        -> placeholder(trans('calendar::calendar.placeholder.start')) !!}
      
</div>
<div class='col-md-6 col-sm-12'>  
   
        {!! Form::datetime('end')
        ->label('End Date')
        -> placeholder(trans('calendar::calendar.placeholder.end')) !!}  
</div>

<div class='col-md-12 col-sm-12'>
    {!! Form::textarea ('details')
    -> label(trans('calendar::calendar.label.details'))
    -> placeholder(trans('calendar::calendar.placeholder.details'))!!}
</div>
 <div class='col-md-12 col-sm-12'>
        {!! Form::hidden('color')->id('event-color')->value('#3c8dbc')!!}
    <div class="event-color-block">
        <ul class="fc-color-picker" id="color-chooser">
            <li>
                <a class="event-azure" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-purple" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-blue" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-green" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-orange" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-red" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-rose" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-pink" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-indigo" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
            <li>
                <a class="event-default" href="#">
                    <i class="ion ion-record">
                    </i>
                </a>
            </li>
        </ul>
    </div>
</div>
{!!Form::hidden('status')->forceValue('Calendar')!!}
<script type="text/javascript">
   
    $(function(){                    

        var currColor = "#3c8dbc";
        $(".fc-color-picker >li >a").click(function (e) {
          e.preventDefault();
          currColor = $(this).attr("class");
          $('#event-color').val(currColor);
        })
      
    })
</script>