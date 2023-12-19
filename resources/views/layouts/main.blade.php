<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('includes.cssLinks')
        @yield('css')



        <meta name="google-site-verification" content="rXNpjPFtZBL_yr43w2b2bSLBPG-C44nLkoFcdI_fuAU" />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-P2KJQMJ6GT"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-P2KJQMJ6GT');
        </script>

    
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
