@extends('layouts.main')

@section('css')


        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Staff | Silvergoldrate.pk</title>
        <meta name="robots" content="follow, noindex" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="Staff - Silvergoldrate.pk" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Staff - Silvergoldrate.pk" />
        <meta name="twitter:label1" content="Name" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Posts" />
        <meta name="twitter:data2" content="103" />


        <script type="application/ld+json">
       {
        "@context": "https://schema.org",
        "@graph": [
            { "@type": "Person", "@id": "https://silvergoldrate.pk#person", "name": "Staff" },
            {
                "@type": "WebSite",
                "@id": "https://silvergoldrate.pk#website",
                "url": "https://silvergoldrate.pk",
                "name": "Gold and Silver Rate in Pakistan",
                "alternateName": "Gold Price in Pakistan",
                "publisher": { "@id": "https://silvergoldrate.pk#person" },
                "inLanguage": "en-US"
            },
            {
                "@type": "ProfilePage",
                "@id": "https://silvergoldrate.pk/author/staff#webpage",
                "url": "https://silvergoldrate.pk/author/staff",
                "name": "Staff - Silvergoldrate PK",
                "isPartOf": { "@id": "https://silvergoldrate.pk#website" },
                "inLanguage": "en-US"
            },
            {
                "@type": "Person",
                "@id": "https://silvergoldrate.pk/author/staff",
                "name": "Staff",
                "url": "https://silvergoldrate.pk/author/staff",
                "image": {
                    "@type": "ImageObject",
                    "@id": "https://silvergoldrate.pk/assets/staff.webp",
                    "url": "https://silvergoldrate.pk/assets/staff.webp",
                    "caption": "Staff",
                    "inLanguage": "en-US"
                },
                "sameAs": ["https://silvergoldrate.pk", "#", "https://twitter.com"],
                "mainEntityOfPage": { "@id": "https://silvergoldrate.pk/author/staff#webpage" }
            }
          ]
        }
    </script>
        
@endsection

@section('main')
  
<div class="container mt-3 bg-white">
    <div class="row">
            
        <div class="col-12 mb-2 p-3">
              <h1 class="staff-icon text-center mb-3 mt-3">&#x1F464; Staff</h1>

               <p class="lead">
                We keep you updated on the latest gold rates in Pakistan. Stay informed with our real-time updates on gold prices, market trends, and more. Your trusted source for all things gold in Pakistan.
              </p>
            </div>
        </div>
        <div>
    </div>
</div>

 <div class="container mt-3 bg-white">
    <div class="row">
            
            <h6 class="col-12 text-center mt-5 mb-4"><strong>Latest Posts</strong></h6>

          
             @foreach($posts as $result)
           
            @if(\Carbon\Carbon::parse($result->created_at)->subDay()->dayOfWeek == Carbon\Carbon::SUNDAY)
            @else
            <div class="col-3 mb-2">
            <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
            <a href="https://silvergoldrate.pk/{{ $result->slug }}">
                <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                <h2 class="mt-3 p-2">{{ $result->title }}</h2>
            </a>

            </div>
            </div>
            @endif
            
            
            
            @endforeach
        </div>
        <div>
    </div>
</div>

@endsection

@section('js')

@endsection




