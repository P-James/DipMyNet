{{-- Filter options --}}

<select name="asdf" id="adf">
    <option value="Fish">Fish</option>
    <option value="Facilities">Fac</option>
    <option value="Test">Test</option>
</select>

{{-- Fishery results cards --}}
@foreach ($fisheries as $fishery)
<div class="py-6">
    <div class="flex flex-wrap md:flex-no-wrap w-full bg-white shadow-lg rounded-lg overflow-hidden relative">
        <div class="w-full md:w-1/4 bg-cover h-36 md:h-auto" style="background-image: url('https://source.unsplash.com/random/400x400?pond')">
        </div>
        <div class="w-full md:w-2/3 p-4 space-y-2">
            <h1 class="text-teal-900 font-bold text-xl md:text-2xl"><a href="{{$fishery->path()}}">{{$fishery->name}}</a></h1>
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
                <h2 class="w-24 md:w-2/5 flex-shrink-0">Facilities:</h2>
                <span class="text-teal-700">{{implode(',', $fishery->facilities)}}</span>
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