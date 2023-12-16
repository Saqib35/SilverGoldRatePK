@extends('layouts.main')

@section('css')

  
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $GoldRateByDay->meta_title;  }}</title>
        <meta name="description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $GoldRateByDay->meta_title;  }}" />
        <meta property="og:description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{ $GoldRateByDay->updated_at;  }}" />
        <meta property="og:image" content="{{ asset($GoldRateByDay->img) }}" />
        <meta property="og:image:secure_url" content="{{ asset($GoldRateByDay->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate Pakistan" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{ $GoldRateByDay->created_at;  }}" />
        <meta property="article:modified_time" content="{{ $GoldRateByDay->updated_at;  }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $GoldRateByDay->meta_title;  }}" />
        <meta name="twitter:description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta name="twitter:image" content="{{ asset($GoldRateByDay->img) }}" />
        <meta name="twitter:label1" content="Written by" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Time to read" />
        <meta name="twitter:data2" content="1 minute" />
        

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
                        "caption": "gold rate Pakistan Today",
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "{{ url($GoldRateByDay->slug)}}#webpage",
                        "url": "{{ url($GoldRateByDay->slug)}}",
                        "name": "{{ $GoldRateByDay->title  }}",
                        "datePublished": "{{ $GoldRateByDay->created_at }}",
                        "dateModified": "{{ $GoldRateByDay->updated_at }}",
                        "isPartOf": { "@id": "{{ url('/#website') }}" },
                        "primaryImageOfPage": { "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}" },
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
                        "headline": "{{ $GoldRateByDay->title  }}",
                        "datePublished": "{{ $GoldRateByDay->created_at  }}",
                        "dateModified": "{{ $GoldRateByDay->updated_at  }}",
                        "articleSection": "Gold and Silver Rates",
                        "author": { "@id": "{{ url('/author/staff/') }}", "name": "Staff" },
                        "publisher": { "@id": "{{ url('/#person') }}" },
                        "description": "{{  $GoldRateByDay->meta_description  }}",
                        "name": "{{ $GoldRateByDay->title  }}",
                        "@id": "{{ url($GoldRateByDay->slug.'/#richSnippet') }}",
                        "isPartOf": { "@id": "{{ url($GoldRateByDay->slug.'/#webpage') }}" },
                        "image": { "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "{{ url($GoldRateByDay->slug.'/#webpage') }}" }
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
                    <h2 class="h2-size">{{ $GoldRateByDay->title;  }}</h2>
                </div>
                <hr class="first" />

                <div class="updatSetting">
                    <hr />
                    By Staff ⏰ Updated <strong>{{ \Carbon\Carbon::parse($GoldRateByDay->updated_at)->format('F j, Y') }}</strong>
                    <hr />
                </div>

                <div class="updateSetting pt-3">
                    <div>
                        <img src="{{ asset($GoldRateByDay->img) }}" class="img-fluid" />
                        <p class="mt-4">{!! $GoldRateByDay->details;  !!} </p>
                       
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




