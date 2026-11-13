@props(['title'])
<div class="mb-4 form-panel">
    <label for="search" class="form-label">Search all fields</label>
    <input class="form-control" type="search" id="search" placeholder="Type to filter {{ strtolower($title) }}…" autocomplete="off">
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.querySelector('#search');
        const rows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase();

            for (const row of rows) {
                let text = row.dataset.search || '';

                // chatgpt suggested i use this query selector. seems to work
                for (const cell of row.querySelectorAll('td:not(.actions)')) {
                    text += ' ' + cell.textContent;
                }

                row.hidden = !text.toLowerCase().includes(query);
            }
        });
    });
</script>
