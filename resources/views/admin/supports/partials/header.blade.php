<div class="sm:flex sm:items-center sm:justify-between" >
<div>
    <div class="flex items-center gap-x-3">
        <h1 class="text-lg text-black-500">Fórum</h1>

        <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $total }}duvidas</span>
    </div>
</div>

<div class="flex items-center mt-4 gap-x-3">

    <a href="{{route('supports.create')}}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-100 transtion-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" >
            <path stroke-linecap="round" stroke-linejoin="roubd" d="M12 9v6m3-3h9m12 0a9 90 11-18 0 9 9 0 0118 0z"></path>
        </svg>

        <span>Nova Dúvida</span>
    </a>

</div>