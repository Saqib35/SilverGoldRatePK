@extends('layouts.main')

@section('css')
<title>{{ $webStory->title }}</title>
<meta name="amp-story-generator-name" content="Web Stories for Silver Gold Rate In Pakistan" />
<meta name="amp-story-generator-version" content="1.35.0" />
<meta name="description" content="{{  $webStory->description }}" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $webStory->title }} - SilverGoldRate.PK" />
<meta property="og:description" content="{{ $webStory->description }}"/>
<meta property="og:url" content="{{  Request::fullUrl() }}" />
<meta property="og:site_name" content="SilverGoldRate.pk" />
<meta property="article:author" content="#" />
<meta property="og:updated_time" content="{{ $webStory->updated_at }}" />
<meta property="og:image" content="{{ asset('images/today-gold-rate-in-pakistan.webp') }}" />
<meta property="og:image:secure_url" content="{{ asset('images/today-gold-rate-in-pakistan.webp') }}" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="853" />
<meta property="og:image:alt" content="gold rate in pakistan today story cover" />
<meta property="og:image:type" content="image/webp" />
<meta property="article:published_time" content="{{ $webStory->created_at }}" />
<meta property="article:modified_time" content="{{ $webStory->updated_at }}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $webStory->title }} - SilverGoldRate.PK" />
<meta name="twitter:description" content="{{ $webStory->description }}"/>
<meta name="twitter:image" content="{{ asset('images/today-gold-rate-in-pakistan.webp') }}" />
<meta name="msapplication-TileImage" content="{{ asset('assets/favicon.png') }}" />


     <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }
  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
      }
    </style>
  </noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>


@endsection

@section('main')
<div class="container mt-3 bg-white">
    <div class="row">
        <h1 class="col-12 text-center mt-5 mb-4"><strong>{{ $webStory->title }}</strong></h1>
        <amp-story standalone
                    title="{{ $webStory->title }}"
                    publisher="Staff"
                    publisher-logo-src="{{ asset('assets/logo.png')}}"
                    poster-portrait-src="{{ asset('assets/logo.png') }}">
            <amp-story-page id="page1" auto-advance-after="4s">
                <amp-img src="{{ asset($webStory->image_path_one) }}" width="720" height="1280" layout="responsive" alt="Gold Rate In Pakistan"></amp-img>
                <amp-story-cta-layer>
                    <a href="{{ url('gold-rate-in-pakistan/') }}">Continue to Next Section</a>
                </amp-story-cta-layer>
            </amp-story-page>
            <amp-story-page id="page2" auto-advance-after="4s">
                <amp-img src="{{ asset($webStory->image_path_two) }}" width="720" height="1280" layout="responsive" alt="Gold Rate In Pakistan"></amp-img>
                <amp-story-cta-layer>
                    <a href="{{ url('gold-rate-in-pakistan/') }}">Continue to Next Section</a>
                </amp-story-cta-layer>
            </amp-story-page>
            <amp-story-page id="page3" auto-advance-after="4s">
                <amp-img src="{{ asset($webStory->image_path_three) }}" width="720" height="1280" layout="responsive" alt="Gold Rate In Pakistan"></amp-img>
                <amp-story-cta-layer>
                    <a href="{{ url('gold-rate-in-pakistan/') }}">Continue to Next Section</a>
                </amp-story-cta-layer>
            </amp-story-page>
        </amp-story>
    </div>
</div>

@endsection

@section('js')


@endsection




