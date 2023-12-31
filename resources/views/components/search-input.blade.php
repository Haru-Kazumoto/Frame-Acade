@props(['disabled' => false])

<div class="relative text-gray-600 focus-within:text-gray-400 ">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
      </span>
    <input type="search" name="search" class="py-2 text-sm text-white bg-white rounded-xl pl-10 focus:outline-none focus:bg-white focus:text-gray-900 w-[250px] sm:w-[400px]" placeholder="Search..." autocomplete="off">    
</div>
