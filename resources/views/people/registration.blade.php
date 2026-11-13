@extends('layout')
@section('title', 'Register ' . $person->first_name . ' ' . $person->last_name)
@section('content')
    <form class="card card-body border form-panel" method="post" action="{{ route('people.register', $person) }}">
        @csrf
        <label class="form-label mb-3">Event
            <select class="form-select mt-2" name="event_id" required>
                <option value="">Select an event</option>
                @foreach ($events as $event)
                    <option value="{{ $event->event_id }}" @selected(old('event_id') == $event->event_id)>
                        {{ $event->event_title }} — {{ $event->event_start_date?->format('M j, Y g:i A') }}
                    </option>
                @endforeach
            </select>
        </label>
        <div class="d-flex gap-2 mt-2">
            <button class="btn btn-primary">Save registration</button>
            <a class="btn btn-outline-secondary" href="{{ route('people') }}">Cancel</a>
        </div>
    </form>
@endsection
