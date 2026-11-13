@extends('layout')
@section('title', 'Donation for ' . $person->first_name . ' ' . $person->last_name)
@section('content')
    <form class="card card-body border form-panel" method="post" action="{{ route('people.donate', $person) }}">
        @csrf
        <label class="form-label mb-3">Amount ($)
            <input class="form-control mt-2" name="donation_amount" type="number" min="0.01" step="0.01" value="{{ old('donation_amount') }}" required>
        </label>
        <label class="form-label mb-3">Date
            <input class="form-control mt-2" name="donation_date" type="date" value="{{ old('donation_date', date('Y-m-d')) }}" required>
        </label>
        <div class="d-flex gap-2 mt-2">
            <button class="btn btn-primary">Save donation</button>
            <a class="btn btn-outline-secondary" href="{{ route('people') }}">Cancel</a>
        </div>
    </form>
@endsection
