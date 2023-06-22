<h1>{{$heading}}</h1> {{-- basic template insertion --}}

@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing) {{-- foreach directive --}}
    {{-- looks like laravel will just ignore this if array is empty --}}
   <h2>
        {{$listing['title']}}
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach