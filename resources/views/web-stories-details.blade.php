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
        <h1 class="col-12 text-center mt-5 mb-4"><strong>Web stories Gold Rate In Pakistan</strong></h1>
            <amp-story standalone
                        title="Silver Gold Rate Pakistan"
                        publisher="Staff"
                        publisher-logo-src="{{ asset('assets/logo.png')}}"
                        poster-portrait-src="{{asset('assets/logo.png')}}">
                <amp-story-page id="page1" auto-advance-after="4s">
                    <amp-img src="{{asset('images/today-gold-rate-in-pakistan.webp')}}" width="720" height="1280" layout="responsive" alt="Gold Rate In Pakistan"></amp-img>
                    <amp-story-cta-layer>
                        <a href="{{ url('gold-rate-in-pakistan') }}">Continue to Next Section</a>
                    </amp-story-cta-layer>
                </amp-story-page>
            </amp-story>
    </div>
</div>
@endsection

@section('js')


@endsection




