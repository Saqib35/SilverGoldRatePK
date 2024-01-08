@extends('layouts.main')

@section('css')

   
        <title>Gold Price History by Week | Silvergoldrate.pk </title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Price History by Week | Silvergoldrate.pk" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Price History by Week | Silvergoldrate.pk" />
        <meta name="twitter:label1" content="Posts" />
        <meta name="twitter:data1" content="8" />
        <script type="application/ld+json" >
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Person",
                        "@id": "https://silvergoldrate.pk#person",
                        "name": "Staff"
                    },
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
                        "@type": "CollectionPage",
                        "@id": "https://silvergoldrate.pk/category/gold-price-history-by-week#webpage",
                        "url": "https://silvergoldrate.pk/category/gold-price-history-by-week",
                        "name": "Gold Price History by Week - SilverGoldRate.PK",
                        "isPartOf": { "@id": "https://silvergoldrate.pk#website" },
                        "inLanguage": "en-US"
                    }
                ]
            }
        </script>
@endsection

@section('main')
  


 <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            <div class="p-4" style="border-bottom: 10px solid #e7ecef;">
                <h1 class="h1-size">Gold Price History by Week</h1>
            </div>



           @foreach($GoldRateByWeek as $GoldRateByWeek)

            <div style="border-bottom: 10px solid #e7ecef;" class="mt-5">
                <div class="text-center mt-5">
                    <h2 class="h2-size">{{ $GoldRateByWeek->title;  }}</h2>
                </div>
                <hr class="first" />

                <div class="updatSetting">
                    <hr />
                    By Staff ⏰ Updated <strong>{{ \Carbon\Carbon::parse($GoldRateByWeek->updated_at)->format('F j, Y') }}</strong>
                    <hr />
                </div>

                <div class="updateSetting pt-3">
                    <div>
                        <img src="{{ asset($GoldRateByWeek->img) }}" class="img-fluid" />
                        <p class="mt-4">{{ $GoldRateByWeek->description_short;  }} </p>
                        <a href="https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}" class="btn btn-success">Read More</a>
                        <p class="mt-3">
                        <a  href="https://silvergoldrate.pk/category/gold-price-history-by-week">Gold Price History by Week</a>
                        </p>
                    </div>
                </div>
            </div>

           @endforeach

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
                            <a href="https://silvergoldrate.pk/{{ $result->slug }}">
                                <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                                <h2 class="mt-3 p-2">{{ $result->title }}</h2>
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




