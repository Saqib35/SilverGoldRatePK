@extends('layouts.main')

@section('css')

  
   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{  $GoldRateByWeek->meta_title; }}</title>
        <meta name="description" content="{{  $GoldRateByWeek->meta_description; }}" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{  $GoldRateByWeek->meta_title; }}" />
        <meta property="og:description" content="{{  $GoldRateByWeek->meta_description; }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold Price History by Week" />
        <meta property="og:updated_time" content="{{  $GoldRateByWeek->updated_at; }}" />
        <meta property="og:image" content="{{  asset($GoldRateByWeek->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($GoldRateByWeek->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="weekly gold rate update by Silvergoldrate.pk" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $GoldRateByWeek->created_at; }}" />
        <meta property="article:modified_time" content="{{  $GoldRateByWeek->updated_at; }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{  $GoldRateByWeek->meta_title; }}" />
        <meta name="twitter:description" content="{{  $GoldRateByWeek->meta_description; }}" />
        <meta name="twitter:image" content="{{  asset($GoldRateByWeek->img) }}" />
        <meta name="twitter:label1" content="Written by" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Time to read" />
        <meta name="twitter:data2" content="1 minute" />

        
        
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": ["Person", "Organization"],
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
                        "@type": "ImageObject",
                        "@id": "{{ asset('weekly-gold-rate-in-pakistan.webp') }}",
                        "url": "{{ asset('images/today-silver-rate-in-pakistan.webp') }}",
                        "width": "1280",
                        "height": "720",
                        "caption": "weekly gold rate update by silvergoldsrate.pk",
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}#webpage",
                        "url": "https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}",
                        "name": "{{ $GoldRateByWeek->title }}",
                        "datePublished": "{{ $GoldRateByWeek->created_at }}",
                        "dateModified": "{{ $GoldRateByWeek->updated_at }}",
                        "isPartOf": { "@id": "https://silvergoldrate.pk#website" },
                        "primaryImageOfPage": { "@id": "https://silvergoldrate.pk/weekly-gold-rate-in-pakistan.webp" },
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
                        "sameAs": ["https://silvergoldrate.pk", "#", "https://twitter.com"]
                    },
                    {
                        "@type": "NewsArticle",
                        "headline": "{{ $GoldRateByWeek->title  }}",
                        "datePublished": "{{ $GoldRateByWeek->created_at  }}",
                        "dateModified": "{{ $GoldRateByWeek->updated_at  }}",
                        "articleSection": "Gold Price History by Week",
                        "author": { "@id": "https://silvergoldrate.pk/author/staff", "name": "Staff" },
                        "publisher": { "@id": "https://silvergoldrate.pk#person" },
                        "description": "{{  $GoldRateByWeek->meta_description  }}",             
                        "name": "{{ $GoldRateByWeek->title  }}",
                        "@id": "https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}richSnippet",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}webpage" },
                        "image": { "@id": "https://silvergoldrate.pk/images/weekly-gold-rate-in-pakistan.webp" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "https://silvergoldrate.pk/{{ $GoldRateByWeek->slug }}webpage" }
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
                        <img src="{{ asset($GoldRateByWeek->img) }}"  loading="lazy" alt="{{ $GoldRateByWeek->alt_tag }}"   class="img-fluid" />
                        <p class="mt-4">{!! $GoldRateByWeek->details;  !!} </p>
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
                                        <td style="text-align:center"><a href="https://silvergoldrate.pk/{{ $GoldRateByDay->slug }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->format('d M Y') }}</a></td>
                                        <td style="text-align:center">{{  $GoldRateByDay->First_rate }}</td>
                                        <td style="text-align:center">{{  $GoldRateByDay->Second_rate }}</td>
                                    </tr>
                                    @endforeach
                                
                                
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>


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
                                <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" loading="lazy" class="img-fluid" />
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




