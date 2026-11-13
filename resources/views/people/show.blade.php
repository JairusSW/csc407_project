@extends('layout')
@section('title', $person->first_name . ' ' . $person->last_name)
@section('content')
    <div class="d-flex flex-wrap gap-2 mb-4">
        <a class="btn btn-outline-secondary" href="{{ route('people') }}">Back to people</a>
        <a class="btn btn-outline-primary" href="{{ route('people.register', $person) }}">Register for event</a>
        <a class="btn btn-primary" href="{{ route('people.donate', $person) }}">Make donation</a>
    </div>
    <dl class="row">
        <dt class="col-sm-3">Contact ID</dt>
        <dd class="col-sm-9">{{ $person->contact_id }}</dd>
        <dt class="col-sm-3">First name</dt>
        <dd class="col-sm-9">{{ $person->first_name }}</dd>
        <dt class="col-sm-3">Last name</dt>
        <dd class="col-sm-9">{{ $person->last_name }}</dd>
        <dt class="col-sm-3">Date of birth</dt>
        <dd class="col-sm-9">{{ $person->date_of_birth?->format('M j, Y') }}</dd>
        <dt class="col-sm-3">gender</dt>
        <dd class="col-sm-9">{{ $person->gender }}</dd>
        <dt class="col-sm-3">Marital status</dt>
        <dd class="col-sm-9">{{ $person->marital_status }}</dd>
        <dt class="col-sm-3">Contact status</dt>
        <dd class="col-sm-9">{{ $person->contact_status }}</dd>
        <dt class="col-sm-3">Household ID</dt>
        <dd class="col-sm-9">{{ $person->household_id }}</dd>
        <dt class="col-sm-3">Household position</dt>
        <dd class="col-sm-9">{{ $person->household_position }}</dd>
        <dt class="col-sm-3">Donor ID</dt>
        <dd class="col-sm-9">{{ $person->donor_id }}</dd>
        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $person->email_address }}</dd>
        <dt class="col-sm-3">Mobile phone</dt>
        <dd class="col-sm-9">{{ $person->mobile_phone }}</dd>
    </dl>
    <h2 class="h5 mt-4 mb-3">Event history</h2>
    @include('events-table')
    <h2 class="h5 mt-4 mb-3">Donation history</h2>
    @include('donations-table')
@endsection
