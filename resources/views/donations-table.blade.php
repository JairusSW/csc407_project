<div class="table-responsive bg-white border rounded mb-4">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Donor ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($donations as $donation)
                <tr data-search="{{ implode(' ', $donation->getAttributes()) }}">
                    <td>{{ $donation->donation_id }}</td>
                    <td>{{ $donation->donor_id }}</td>
                    <td>${{ number_format((float) $donation->donation_amount, 2) }}</td>
                    <td>{{ $donation->donation_date?->format('M j, Y g:i A') }}</td>
                </tr>
            @empty
                <tr><td colspan="4">No donations.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
