@extends('layouts.main')

@section('css')


        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Golden Insights : Explore All Things Gold in Pakistan with Our Blog Collection</title>
        <meta name="description" content="Delve into the world of gold in Pakistan through our ALL Blogs page. From timeless jewelry designs to investment tips tailored for the Pakistani market, our curated content covers it all. Stay informed, inspired, and connected to the golden trends shaping Pakistan's fascination with this precious metal."/>
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <meta property="og:description" content="Delve into the world of gold in Pakistan through our ALL Blogs page. From timeless jewelry designs to investment tips tailored for the Pakistani market, our curated content covers it all. Stay informed, inspired, and connected to the golden trends shaping Pakistan's fascination with this precious metal." />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="All Blogs - Silvergoldrate.pk" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="All Blogs - Silvergoldrate.pk" />
        <meta name="twitter:label1" content="Name" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Posts" />
        <meta name="twitter:data2" content="103" />


@endsection

@section('main')
  

 <div class="container mt-3 bg-white">
    <div class="row">
            
            <h6 class="col-12 text-center mt-5 mb-4"><strong>All Blogs</strong></h6>

          
             @foreach($Blogs as $result)
            <div class="col-3 mb-2">
            
            <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
            <a href="https://silvergoldrate.pk/{{ $result->slug }}">
                <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                <h2 class="mt-3 p-2">{{ $result->title }}</h2>
            </a>

            </div>
            
            </div>
            
            @endforeach
        </div>
        <div>
    </div>
</div>

@endsection

@section('js')

@endsection




