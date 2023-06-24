<!DOCTYPE html>

<html lang="en">

<!-- Begin Head -->

<head>
    <meta charset="utf-8" />
    @yield('title')
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <meta name="MobileOptimized" content="320" />
    
    <!--srart theme style -->
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/default-style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}">
    <!-- favicon links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/header/tab_logo.png') }}" />
</head>
<body>

@include('master.header')

@if(Session('success'))
<div class=" p-2 d-flex justify-content-between  " >
		<div class="align-self-center"></div>
        <div class=" alert alert-success m-0 p-2 align-self-center fadeIn "> {{Session::get('success')}}</div>
        
    </div>
@endif
@yield('content')

@include('master.footer')

    
</body>

</html>