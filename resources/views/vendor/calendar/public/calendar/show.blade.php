<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-dark  header-title m-t-0"> {!! $calendar['name'] !!} </h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ trans_url('calendars') }}" class="btn btn-default pull-right"> Back</a>
                    </div>
                </div>
                <hr/>

                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="category_id">
                    {!! trans('calendar::calendar.label.category_id') !!}
                </label><br />
                    {!! $calendar['category_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('calendar::calendar.label.status') !!}
                </label><br />
                    {!! $calendar['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="start">
                    {!! trans('calendar::calendar.label.start') !!}
                </label><br />
                    {!! $calendar['start'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="end">
                    {!! trans('calendar::calendar.label.end') !!}
                </label><br />
                    {!! $calendar['end'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="location">
                    {!! trans('calendar::calendar.label.location') !!}
                </label><br />
                    {!! $calendar['location'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="color">
                    {!! trans('calendar::calendar.label.color') !!}
                </label><br />
                    {!! $calendar['color'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="title">
                    {!! trans('calendar::calendar.label.title') !!}
                </label><br />
                    {!! $calendar['title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="details">
                    {!! trans('calendar::calendar.label.details') !!}
                </label><br />
                    {!! $calendar['details'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_by">
                    {!! trans('calendar::calendar.label.created_by') !!}
                </label><br />
                    {!! $calendar['created_by'] !!}
            </div>
        </div>
    </div>
            </div>  
        </div>  
        <div class="col-md-4">
            @include('calendar::public.calendar.aside')
        </div>

    </div>
</div>