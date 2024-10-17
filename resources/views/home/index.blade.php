{{-- <div>
<h1>Hello from Index</h1>
 alo 
alo 

@if (true)
    This is the return from if statement
    
@endif

@foreach ( $hobbies as $hobby )
    {{$loop->iteration}}
    {{$hobby}}
@endforeach
<hr>
<div @class(['my-css-class','great-britain' => $country === 'gb'])
    @style(['color: green',
    'background-color:cyan' => $country === 'gb'])>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aspernatur voluptatem, itaque atque soluta nulla molestiae suscipit impedit dicta voluptatibus illum accusantium dolores corporis aliquam magni voluptates. Rerum, ad ut.
</div>
</div> --}}
{{-- @php
    $cars = [1,2,3,4,5];

@endphp
<div>
    @include('shared.button', ['color'=>'grey', 'text'=>'submit'])
    @each('car.view',$cars ,'car', 'car.empty')
</div> --}}

@php
    $city='Oradea';
@endphp
<div>
    @includeIf('shared.alert', ['color'=>'purple', 'message'=>'ciupapi muniano'])
</div>