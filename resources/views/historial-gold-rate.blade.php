@extends('layouts.main')

@section('css')


        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate In Pakistan | SilverGoldRate.PK</title>
        <meta name="description" content="We provide you historical Gold Rates,  gold Charts & timely gold Graphs. Here you can find Daily, historical and monthly average gold price in Pakistan." />
        <meta name="robots" content="follow, index" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>  
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Gold Rate In Pakistan - SilverGoldRate.PK" />
        <meta property="og:description" content="We provide you historical Gold Rates,  gold Charts & timely gold Graphs. Here you can find Daily, historical and monthly average gold price in Pakistan. - SilverGoldRate.PK" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="SilverGoldRate.pk" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Rate In Pakistan - SilverGoldRate.PK" />
        <meta name="twitter:description" content="We provide you historical Gold Rates,  gold Charts & timely gold Graphs. Here you can find Daily, historical and monthly average gold price in Pakistan. - SilverGoldRate.PK" />

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    { "@type": "Organization", "@id": "https://silvergoldrate.pk#organization", "name": "SilverGoldRate" },
                    {
                        "@type": "WebSite",
                        "@id": "https://silvergoldrate.pk#website",
                        "url": "https://silvergoldrate.pk",
                        "name": "SilverGoldRate.pk",
                        "alternateName": "Gold and Silver Rate in Pakistan",
                        "publisher": { "@id": "https://silvergoldrate.pk#organization" },
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "CollectionPage",
                        "@id": "https://silvergoldrate.pk/historial-gold-rate#webpage",
                        "url": "https://silvergoldrate.pk/historial-gold-rate",
                        "name": "Gold Rate Calculator  - SilverGoldRate.PK",
                        "isPartOf": { "@id": "https://silvergoldrate.pk#website" },
                        "inLanguage": "en-US"
                    }
                ]
            }
        </script>

        
@endsection

@section('main')
  

 <div class="container mt-3 bg-white">
    <div class="row">
            
            <h1 class="col-12 text-center mt-5 mb-4"><strong>Gold Rate In Pakistan</strong></h1>

             @foreach($posts as $result)
             @if($result->slug!='')
                <div class="col-md-3 mb-2">
                    <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
                        <a href="https://silvergoldrate.pk/{{ $result->slug }}">
                            <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" loading="lazy" class="img-fluid" />
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




