<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.cssLinks')
    @yield('css')

  
    
    <style>

.pagination {
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-item {
    display: inline-block;
    margin: 0 2px;
}

.pagination .page-item.disabled .page-link {
    background-color: transparent;
    border-color: #ddd;
    color: #777;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    padding: 6px 12px;
    border: 1px solid #ddd;
    color: #333;
    background-color: #fff;
}

.pagination .page-link:hover {
    background-color: #eee;
}
.hidden{
    display:none;
}

</style>

 

</head>
<body>
    @include('includes.header')

    
    @yield('main')



    @include ('includes.footer')
    
    @include ('includes.jsLinks')

    @yield('js')
    

</body>


</html>
