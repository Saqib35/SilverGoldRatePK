@extends('layouts.main')

@section('css')


        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Staff | Silvergoldrate.pk</title>
        <meta name="robots" content="follow, noindex" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="Staff - Silvergoldrate.pk" />
        <meta property="og:url" content="https://silvergoldrate.pk/author/staff/" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Staff - Silvergoldrate.pk" />
        <meta name="twitter:label1" content="Name" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Posts" />
        <meta name="twitter:data2" content="103" />


@endsection

@section('main')
<div class="container mt-3 bg-white">
    <div class="row">
        <h1 class="col-12 text-center mt-5 mb-4"><strong>Web stories Gold Rate In Pakistan</strong></h1>
         @foreach($webStory as $webStory)
        <div class="col-md-4">
        <iframe
        width="100%"
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
                    <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_one)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                    <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_two)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                    <amp-story-page id='page1' auto-advance-after='4s'>
                        <amp-img src='{{asset($webStory->image_path_three)}}' width='720' height='1280' layout='responsive' alt='Gold Rate In Pakistan'></amp-img>
                        <amp-story-cta-layer>
                            <a href='{{ url('gold-rate-in-pakistan') }}'>Continue to Next Section</a>
                        </amp-story-cta-layer>
                    </amp-story-page>
                </amp-story>
            </body>
            </html>"
        ></iframe>
          <div class="text-center">
            <h2>{{ $webStory->title }}</h2>
            <a href="{{ url('web-stories/'.$webStory->slug) }}" class="text-black font-bold" style="font-weight:bold">View Story</a>
        </div>
       
        </div>
        @endforeach

    </div>
</div>

@endsection

@section('js')
@endsection




