@extends('layout')
@section('title', 'People')
@section('content')
    <x-search title="People" />
    <div class="table-responsive bg-white border rounded mb-4">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Contact Status</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr data-search="{{ implode(' ', $person->getAttributes()) }}">
                        <td>{{ $person->first_name }} {{ $person->last_name }}</td>
                        <td>{{ $person->date_of_birth?->format('M j, Y') }}</td>
                        <td>{{ $person->contact_status }}</td>
                        <td>{{ $person->email_address }}</td>
                        <td class="actions">
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('people.show', $person) }}">Details</a>
                            <a class="btn btn-sm btn-outline-primary" href="{{ route('people.register', $person) }}">Register</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('people.donate', $person) }}">Donate</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($people->isEmpty())
        <p class="text-secondary">No records.</p>
    @endif
@endsection
