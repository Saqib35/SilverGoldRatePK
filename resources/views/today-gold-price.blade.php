@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{  $HomePageGoldRate->meta_title }}</title>
        <meta name="description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{  $HomePageGoldRate->meta_title }}" />
        <meta property="og:description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in Pakistan today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{  $HomePageGoldRate->meta_title }}" />
        <meta name="twitter:description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta name="twitter:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta name="twitter:label1" content="Time to read" />
        <meta name="twitter:data1" content="5 minutes" />

        
        <script type="application/ld+json" >
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
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "ImageObject",
                        "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}",
                        "url": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}",
                        "width": "1280",
                        "height": "720",
                        "caption": "gold rate in Pakistan today",
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
                        "headline": "{{ $HomePageGoldRate->meta_title }}",
                        "keywords": "gold rate in pakistan",
                        "datePublished": "{{ $HomePageGoldRate->created_at }}",
                        "dateModified": "{{ $HomePageGoldRate->updated_at }}",
                        "author": { "@id": "{{ url('/author/staff/') }}", "name": "Staff" },
                        "publisher": { "@id": "{{ url('/#person') }}" },
                        "description": "{{ $HomePageGoldRate->meta_description }}",
                        "name": "{{ $HomePageGoldRate->meta_title }}",
                        "@id": "{{ url('/gold-rate-in-pakistan/#richSnippet') }}",
                        "isPartOf": { "@id": "{{ url('/gold-rate-in-pakistan/#webpage') }}" },
                        "image": { "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "{{ url('/gold-rate-in-pakistan/#webpage') }}" }
                    }
                ]
            }
        </script>

        {!! $HomePageGoldRate->schmea_today !!}

@endsection

@section('main')
  
    <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            <div class="text-center mt-5">
                <h1 class="h1-size">Gold Rate in Pakistan Today – {{ now()->format('d F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr>By Staff ⏰ Updated <strong> {{ now()->format('d F Y') }}</strong>
            <hr>
            @if($HomePageGoldRate)
                {!! $HomePageGoldRate->content !!}
            @else
                <p>No content available</p>
            @endif
            <div style="background-color:#bf9109; color:white; padding:10px 20px; text-align:center"><h2>Gold Rate In Pakistan For the Last 30 Days<h2></div>
                
                <table border="1" cellpadding="1" cellspacing="1" style="width:100%" class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr>
                            <th class="theadClor">DATE</th>
                            <th class="theadClor">GOLD 24K per Tola</th>
                            <th class="theadClor">GOLD 22K PER Tola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($GoldRateByDay as $GoldRateByDay)
                        <tr>
                            <td style="text-align:center"><a href="{{  url($GoldRateByDay->slug); }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->format('d M Y') }}</a></td>
                            <td style="text-align:center">{{  $GoldRateByDay->First_rate }}</td>
                            <td style="text-align:center">{{  $GoldRateByDay->Second_rate }}</td>
                        </tr>

                        @endforeach
                      
                    </tbody>
                </table>

            </div>            
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
                            <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
                              <a href="{{ url($result->slug) }}"> 
                                 <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                                 <h6 class="mt-3 p-2">{{ $result->title }}</h6>
                               </a>
                            </div>
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




