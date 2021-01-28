<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

            

    <title>    @yield('title')    </title>
    <style>
        form{
            padding: 1em;
        }
    </style>
</head>
<body>
    <!-- Nav tabs -->
    <div class="container">
   <!-- Dropdown Structure -->
 <ul class="nav justify-content-center bg-dark">
     <li class="nav-item">
         <a class="nav-link active" href="#">Active link</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="#">Link</a>
     </li>
     <li class="nav-item">
         <a class="nav-link disabled" href="#">Disabled link</a>
     </li>
 </ul>

 <div class="col-lg-8 mx-auto my-4 ">

    @yield('content')
</div>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>