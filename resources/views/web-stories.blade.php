@extends('layouts.main')

@section('css')


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Stories | SilverGoldRate.PK</title>
    <meta name="description" content="Web Stories Archive - SilverGoldRate.PK" />
    <meta name="robots" content="follow, index" />
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>  
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Web Stories - SilverGoldRate.PK" />
    <meta property="og:description" content="Stories Archive - SilverGoldRate.PK" />
    <meta property="og:url" content="{{ url('/web-storie/') }}" />
    <meta property="og:site_name" content="SilverGoldRate.pk" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Web Stories - SilverGoldRate.PK" />
    <meta name="twitter:description" content="Web Stories Archive - SilverGoldRate.PK" />

      <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://silvergoldrate.pk#organization",
                    "name": "SilverGoldRate"
                },
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
                    "@id": "https://silvergoldrate.pk/web-storie#webpage",
                    "url": "https://silvergoldrate.pk/web-storie",
                    "name": "Web Stories - SilverGoldRate.PK",
                    "isPartOf": { "@id": "https://silvergoldrate.pk#website" },
                    "inLanguage": "en-US"
                }

            ]
        }
       </script>

       
            <style>
                .col-md-4 {
                    transition: box-shadow 0.3s ease-in-out;
                    margin:20px;
                    border-radius:10px;
                    box-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
                 }
         </style>
@endsection

@section('main')
<div class="container mt-3 bg-white">
   <h1 class="col-12 text-center mt-5 mb-4"><strong>Web stories Gold Rate In Pakistan</strong></h1>        
   <div class="row">
         @foreach($webStory as $webStory)
        <div class="col-md-3">
        <iframe
        width="90%"
        height="300"
        sandbox="allow-top-navigation-by-user-activation allow-popups-to-escape-sandbox allow-forms allow-modals allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-top-navigation"
        allow="autoplay; web-share"
        frameborder="0"
        srcdoc="
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <script async src='https://cdn.ampproject.org/v0.js'></script>
                <script async custom-element='amp-story' src='https://cdn.ampproject.org/v0/amp-story-1.0.js'></script>
            </head>
            <body>
                <amp-story standalone
                            title='Silver Gold Rate Pakistan'
                            publisher='Staff'
                            publisher-logo-src='{{ asset('assets/logo.png') }}'
                            poster-portrait-src='{{ asset('assets/logo.png') }}'>
                    @if(!empty($webStory->image_path_one)  && file_exists(public_path($webStory->image_path_one)))
                            <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_one)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                    @endif
                    @if(!empty($webStory->image_path_two)  && file_exists(public_path($webStory->image_path_two)))
                    
                    <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_two)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                    @endif
                    @if(!empty($webStory->image_path_three)  && file_exists(public_path($webStory->image_path_three)))
                    
                    <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_three)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                    @endif
                </amp-story>
            </body>
            </html>"
        ></iframe>
          <div class="text-center">
            <a href="{{ url('web-storie/'.$webStory->slug) }}" class="text-black font-bold" style="font-weight:bold">
            <h2>{{ $webStory->title }}</h2></a>
        </div>
       
        </div>
        @endforeach

    </div>
</div>

@endsection

@section('js')
@endsection




