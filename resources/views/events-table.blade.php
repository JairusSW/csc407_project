<div class="table-responsive bg-white border rounded mb-4">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
                <tr data-search="{{ implode(' ', $event->getAttributes()) }}">
                    <td>{{ $event->event_id }}</td>
                    <td>{{ $event->event_title }}</td>
                    <td>{{ $event->event_description }}</td>
                    <td>{{ $event->event_start_date?->format('M j, Y g:i A') }}</td>
                    <td>{{ $event->event_end_date?->format('M j, Y g:i A') }}</td>
                </tr>
            @empty
                <tr><td colspan="5">No events.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
