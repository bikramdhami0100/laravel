<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    {{-- comment statement --}}
    {{-- xss attacking from save --}}
    {{4+2}}
    <br/>
    {!!"<h1>hello bikram dhami this is php code</h1>"!!}
    {{-- {!!"<script>alert('bikram dhami')</script>"!!} --}}
    @php
        $names=["bikram","dhami","bajhang","ktm"];
        $user="bikram dhami from bajhang";

    @endphp
    {{$user}}
    <ul>
    @foreach ($names as $item)

        @if ($loop->odd)
        <li style="background: red">{{$item}}</li>
       
        @else
        <li style="background: green">{{$item}}</li>
       
        @endif
    @endforeach
    </ul>
    @php
        $user="hello";
    @endphp

    @includeunless(empty($user),'pages.Footer',["names"=>['bikram','dhami','bajhang','ktm']]);
   
</body>
</html>


{{--  footer part --}}
<h1>This is footer</h1>
{{-- {{$name}} --}}
@foreach ($names as $item)
    <ul>{{$item}}</ul>
@endforeach