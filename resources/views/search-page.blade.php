@extends('layouts.main')

@section('css')


        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>gold rate in pakistan - SilverGoldRate.PK</title>
        <meta name="robots" content="follow, noindex" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="gold rate in Pakistan - SilverGoldRate.PK" />
        <meta property="og:url" content="https://silvergoldrate.pk/search/gold+rate+in+pakistan/" />
        <meta property="og:site_name" content="SilverGoldRate.pk" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="gold rate in pakistan - SilverGoldRate.PK" />
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    { "@type": "Organization", "@id": "https://silvergoldrate.pk/#organization", "name": "SilverGoldRate" },
                    {
                        "@type": "WebSite",
                        "@id": "https://silvergoldrate.pk/#website",
                        "url": "https://silvergoldrate.pk",
                        "name": "SilverGoldRate.pk",
                        "alternateName": "Gold and Silver Rate in Pakistan",
                        "publisher": { "@id": "https://silvergoldrate.pk/#organization" },
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "SearchResultsPage",
                        "@id": "https://silvergoldrate.pk/search/gold+rate+in+pakistan/#webpage",
                        "url": "https://silvergoldrate.pk/search/gold+rate+in+pakistan/",
                        "name": "gold rate in Pakistan- SilverGoldRate.PK",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/#website" },
                        "inLanguage": "en-US"
                    }
                ]
            }
        </script>

        
@endsection

@section('main')
  

 <div class="container mt-3 bg-white">
    <div class="row">
            <h6 class="col-12 text-center mt-5 mb-4"><strong>Latest Posts</strong></h6>
             @foreach($posts as $result)
            <div class="col-3 mb-2">
                <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                    <a href="{{ url($result->slug) }}">
                        <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                        <h6 class="mt-3 p-2">{{ $result->title }}</h6>
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




