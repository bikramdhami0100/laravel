<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document- @yield('title',"website")</title>
    <link rel="stylesheet" href="../index.css">
    @stack("examplecss")
</head>
<body>
    <nav>
        <ul>
           <a href="">home</a>
           <a href="{{route('mypost')}}">about</a>
           <a href="">contact</a>
    
        </ul>
    </nav>
    <div class="divone">
        <section>
            @hasSection ('contents')
            @yield('contents')
            @else
             <h1>No content found</h1>
            @endif
          
        </section>
        <aside>
            @section('sidebar')
            <ul>
                <a href="">home</a>
                <a href="">about</a>
                <a href="">contact</a>
     
             </ul>
            @show
        </aside>
       </div>

    <footer>
        this is a footer part of all
    </footer>
</body>
@stack('scripts')
</html>