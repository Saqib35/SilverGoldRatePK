@extends('layouts.main')

@section('css')
    <meta charset="UTF-8" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>  
        <title>{{  $home_content->meta_title }}</title>
        <meta name="description" content="{{  $home_content->meta_description }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{  $home_content->meta_title }}" />
        <meta property="og:description" content="{{  $home_content->meta_description }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="og:updated_time" content="{{  $home_content->updated_at }}" />
        <meta property="og:image" content="{{  asset($home_content->img)  }}" />
        <meta property="og:image:secure_url" content="{{  asset($home_content->img)  }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="Today silver rate in pakistan" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $home_content->created_at }}" />
        <meta property="article:modified_time" content="{{  $home_content->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{  $home_content->meta_title }}" />
        <meta name="twitter:description" content="{{  $home_content->meta_description }}" />
        <meta name="twitter:image" content="{{  asset($home_content->img)  }}" />
        <meta name="twitter:label1" content="Written by" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Time to read" />
        <meta name="twitter:data2" content="2 minutes" />


        <!-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                { "@type": ["Person", "Organization"], "@id": "{{ url('/#person') }}", "name": "Staff" },
                {
                    "@type": "WebSite",
                    "@id": "{{ url('/#website')}}",
                    "url": "{{ url('/')}}",
                    "name": "Gold and Silver Rate in Pakistan",
                    "alternateName": "Gold Price in Pakistan",
                    "publisher": { "@id": "{{ url('/#person')}}" },
                    "inLanguage": "en-US",
                    "potentialAction": { "@type": "SearchAction", "target": "https://silvergoldrate.pk/?s={search_term_string}", "query-input": "required name=search_term_string" }
                },
                {
                    "@type": "ImageObject",
                    "@id": "{{ asset('images/today-silver-rate-in-pakistan.webp') }}",
                    "url": "{{ asset('images/today-silver-rate-in-pakistan.webp') }}",
                    "width": "1280",
                    "height": "720",
                    "caption": "Today silver rate in pakistan",
                    "inLanguage": "en-US"
                },
                {
                    "@type": "Person",
                    "@id": "{{ url('/author/staff/') }}",
                    "name": "Staff",
                    "url": "{{ url('/author/staff/') }}",
                    "image": {
                        "@type": "ImageObject",
                        "@id": "{{ asset('assets/staff.webp') }}",
                        "url": "{{ asset('assets/staff.webp') }}",
                        "caption": "Staff",
                        "inLanguage": "en-US"
                    },
                    "sameAs": ["{{ url('/')}}", "#", "https://twitter.com/#"]
                },
                {
                    "@type": "NewsArticle",
                    "headline": "{{ $home_content->meta_title }}",
                    "keywords": "Silver rate in pakistan",
                    "datePublished": "{{ $home_content->created_at }}",
                    "dateModified": "{{ $home_content->updated_at }}",
                    "author": { "@id": "{{ url('/author/staff/') }}", "name": "Staff" },
                    "publisher": { "@id": "{{ url('/#person') }}" },
                    "description": "{{ $home_content->meta_description }}",
                    "name": "{{ $home_content->meta_title }}",
                    "@id": "{{ url('/#richSnippet') }}",
                    "isPartOf": { "@id": "{{ url('/#webpage') }}" },
                    "image": { "@id": "{{ asset('images/today-silver-rate-in-pakistan.webp') }}" },
                    "inLanguage": "en-US",
                    "mainEntityOfPage": { "@id": "{{ url('/#webpage') }}" }
                }
            ]
        }
    </script> -->

    <!-- {!! $home_content->home_schema !!} -->





@endsection

@section('main')
  
    <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            <div class="text-center mt-5">
                <h1 class="h1-size text-capitalize">52 Tola Chandi Price In Pakistan- Silver Rate In Pakistan</h1>
            </div>
            <hr class="first" />
            <div>
                @if($home_content)
                {!! $home_content->content !!}
                @else
                    <p>No content available</p>
                @endif
            </div>
            <div class="mb-5"></div>
        </div>

        <div class="col-md-3" style="border-left: 5px solid #e7ecef;">
            <div class="container">
                <div class="row">
                    <h6 class="col-12 text-center mt-5 mb-4"><strong>Latest Posts</strong></h6>
                    @php
                        $results = DB::table('gold_rates_by_day')->orderBy('created_at', 'desc')->take(7)->get();
                    @endphp

                    <div class="col-12 mb-2">
                        @foreach($results as $result)

                           @if(\Carbon\Carbon::parse($result->created_at)->subDay()->dayOfWeek == Carbon\Carbon::SUNDAY)
                            @else
                            <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
                               <a href="{{ url($result->slug) }}"> 
                                 <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                                 <h6 class="mt-3 p-2">{{ $result->title }}</h6>
                               </a>
                            </div>
                            @endif
                           
                        @endforeach
                    </div>

                </div>
                <div></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection




