@foreach ($events as $event)
    <form action='/api/events/{{$event->event_id}}' method='post'>
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class='form-group'>
            <input type="submit" value='{{$event->event_id}}'>
        </div>