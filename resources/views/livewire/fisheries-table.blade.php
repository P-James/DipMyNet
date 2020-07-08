{{-- Search Bar --}}
<div class="flex flex-col items-center">

    <div class="relative w-full my-4">

        <input wire:model="search" type="text" class="w-full text-lg px-12 rounded-full h-12 focus:outline-none appearance-none border focus:border-teal-700 focus:shadow-outline-teal" placeholder="Search a Fishery name or location...">

        <div class="absolute top-0 px-4 h-12 flex items-center text-lg text-teal-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-6 fill-current">
                <path d="M508.875 493.792L353.089 338.005c32.358-35.927 52.245-83.296 52.245-135.339C405.333 90.917 314.417 0 202.667 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c52.043 0 99.411-19.887 135.339-52.245l155.786 155.786a10.634 10.634 0 007.542 3.125c2.729 0 5.458-1.042 7.542-3.125 4.166-4.167 4.166-10.917-.001-15.083zM202.667 384c-99.979 0-181.333-81.344-181.333-181.333S102.688 21.333 202.667 21.333 384 102.677 384 202.667 302.646 384 202.667 384z" /></svg>
        </div>

        <div class="absolute top-0 right-0 px-4 h-12 flex items-center text-lg text-teal-700">
            <svg wire:loading xmlns="http://www.w3.org/2000/svg" viewBox="0 0 429.354 429.354" class="h-6 fill-current loader">
                <path d="M372.53 82.843C336.673 30.958 277.621-.009 214.55 0 108.512.115 22.644 86.17 22.759 192.208c.107 98.751 75.105 181.317 173.392 190.888L163.638 415.6a8 8 0 00-.196 11.312 8 8 0 0011.508 0l45.248-45.248a7.911 7.911 0 001.736-2.608 8 8 0 000-6.112 7.911 7.911 0 00-1.736-2.608l-45.248-45.248a8 8 0 00-11.312 11.312l30.4 30.4C97.56 355.44 28.559 268.019 39.919 171.541S138.7 6.061 235.178 17.422s165.48 98.781 154.119 195.259A175.89 175.89 0 01314.63 336.8a8 8 0 109.104 13.152c87.235-60.286 109.081-179.874 48.796-267.109z" /></svg>
        </div>

        @include('partials.mini-profiles')
    </div>
    <div>
        @if($fisheries instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {{$fisheries->links()}}
        @endif
    </div>

</div>