<!-- component -->

<div class="relative group">
    <button id="dropdown-{{ $id }}"
        class="inline-flex justify-between w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
        <span class="mr-2">{{ $lable }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"
            aria-hidden="true">
            <path fill-rule="evenodd"
                d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <div id="dropdown-menu-{{ $id }}"
        class="z-50 hidden absolute right-0 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1 w-full">
        <!-- Search input -->
        <input id="search-input-{{ $id }}"
            class="block w-full px-4 py-2 text-gray-800 border rounded-md  border-gray-300 focus:outline-none"
            type="text" placeholder="Cari {{ $lable }}" autocomplete="off">
        <!-- Dropdown content goes here -->
        {{ $slot }}

    </div>
</div>
<script>
    // JavaScript to toggle the dropdown

    const dropdownButton{{ $id }} = document.getElementById('dropdown-{{ $id }}');
    const dropdownMenu{{ $id }} = document.getElementById('dropdown-menu-{{ $id }}');
    const searchInput{{ $id }} = document.getElementById('search-input-{{ $id }}');

    let isOpen{{ $id }} = false; // Set to true to open the dropdown by default

    // Function to toggle the dropdown state
    function toggleDropdown{{ $id }}() {
        isOpen{{ $id }} = !isOpen{{ $id }};
        dropdownMenu{{ $id }}.classList.toggle('hidden', !isOpen{{ $id }});
    }



    dropdownButton{{ $id }}.addEventListener('click', () => {
        toggleDropdown{{ $id }}();
    });

    // Add event listener to filter items based on input
    searchInput{{ $id }}.addEventListener('input', () => {
        const searchTerm = searchInput{{ $id }}.value.toLowerCase();
        const items = dropdownMenu{{ $id }}.querySelectorAll('a');

        items.forEach((item) => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
