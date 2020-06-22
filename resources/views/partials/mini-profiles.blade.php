{{-- Filter options --}}

@include('partials.species-select')

@if($search && empty($fisheries))
<div>
Your search returned 0 fisheries, please try another search term.
</div>
@endif

{{-- Fishery results cards --}}
@foreach ($fisheries as $fishery)
<div class="py-6">
    <div class="flex flex-wrap md:flex-no-wrap w-full bg-white shadow-lg rounded-lg overflow-hidden relative">
        <div class="w-full md:w-1/4 bg-cover h-36 md:h-auto" style="background-image: url('https://source.unsplash.com/random/400x400?pond')">
        </div>
        <div class="w-full md:w-2/3 p-4 space-y-2">
            <h1 class="text-teal-900 hover:text-teal-700 font-bold text-xl md:text-2xl"><a href="{{$fishery->path()}}">{{$fishery->name}}</a></h1>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Address:</h2>
                <span class="text-teal-700">{{$fishery->address->line_one}}, {{$fishery->address->town}}, {{$fishery->address->county}}</span>
            </div>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Post Code:</h2>
                <span class="text-teal-700">{{$fishery->address->post_code}}</span>
            </div>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Opening Hours:</h2>
                <span class="text-teal-700">Mon - Fri: {{$fishery->opening_times['week']}} / Sat - Sun: {{$fishery->opening_times['weekend']}}</span>
            </div>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Waters:</h2>
                <span class="text-teal-700">{{ $fishery->countType('Still Water')}} {{$fishery->countType('River') }}</span>
            </div>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Species:</h2>
                <span class="text-teal-700">@foreach($fishery->waters as $water) {{ $water->fish.', ' }} @endforeach</span>
            </div>
            <div class="flex item-center justify-start">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Facilities:</h2>
                <span class="text-teal-700">{{implode(', ', $fishery->facilities)}}</span>
            </div>

            <div class="flex item-center justify-start mb-10 md:mb-0">
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Prices:</h2>
                <span class="text-teal-700">Day ticket: £{{$fishery->prices['day']}} / Night ticket: £{{$fishery->prices['night']}}</span>
            </div>

        </div>

        <a href="{{$fishery->path()}}" class="hidden md:block button absolute right-0 bottom-0 m-4 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">More Info </a>

    </div>
</div>
@endforeach