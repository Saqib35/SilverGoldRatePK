@extends('layouts.main')

@section('css')

        <title>Contact Us</title>
        <meta name="description" content="Thank you for visiting our website, dedicated to providing real-time updates on gold and silver rates in Pakistan. We at SilverGoldRate.pk understand how crucial" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Contact Us" />
        <meta property="og:description" content="Thank you for visiting our website, dedicated to providing real-time updates on gold and silver rates in Pakistan. We at SilverGoldRate.pk understand how crucial" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="SilverGoldRate.pk" />
        <meta property="article:author" content="#" />
        <meta property="og:updated_time" content="2023-12-18T11:59:31+05:00" />
        <meta property="article:published_time" content="2023-12-18T11:59:29+05:00" />
        <meta property="article:modified_time" content="2023-12-18T11:59:31+05:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contact Us" />
        <meta name="twitter:description" content="Thank you for visiting our website, dedicated to providing real-time updates on gold and silver rates in Pakistan. We at SilverGoldRate.pk understand how crucial" />
        <meta name="twitter:label1" content="Time to read" />
        <meta name="twitter:data1" content="1 minute" />
        
        <!-- <script type="application/ld+json">
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
                        "@type": "WebPage",
                        "@id": "https://silvergoldrate.pk/contact-us/#webpage",
                        "url": "https://silvergoldrate.pk/contact-us/",
                        "name": "Contact Us",
                        "datePublished": "2023-12-18T11:59:29+05:00",
                        "dateModified": "2023-12-18T11:59:31+05:00",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/#website" },
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "Person",
                        "@id": "https://silvergoldrate.pk/author/staff/",
                        "name": "Staff",
                        "url": "https://silvergoldrate.pk/author/staff/",
                        "image": {
                            "@type": "ImageObject",
                            "@id": "{{ asset('assets/staff.webp') }}",
                            "url": "{{ asset('assets/staff.webp') }}",
                            "caption": "Staff",
                            "inLanguage": "en-US"
                        },
                        "sameAs": ["https://silvergoldrate.pk", "#", "https://twitter.com/#"],
                        "worksFor": { "@id": "https://silvergoldrate.pk/#organization" }
                    },
                    {
                        "@type": "NewsArticle",
                        "headline": "Contact Us",
                        "datePublished": "2023-12-18T11:59:29+05:00",
                        "dateModified": "2023-12-18T11:59:31+05:00",
                        "author": { "@id": "https://silvergoldrate.pk/author/staff/", "name": "Staff" },
                        "publisher": { "@id": "https://silvergoldrate.pk/#organization" },
                        "description": "Thank you for visiting our website, dedicated to providing real-time updates on gold and silver rates in Pakistan. We at SilverGoldRate.pk understand how crucial",
                        "name": "Contact Us",
                        "@id": "https://silvergoldrate.pk/contact-us/#richSnippet",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/contact-us/#webpage" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "https://silvergoldrate.pk/contact-us/#webpage" }
                    }
                ]
            }
        </script> -->


@endsection

@section('main')
  
    <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            <div class="text-center mt-5">
                <h1 class="h1-size">Contact Us</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr>By Staff ⏰ Updated <strong> 19 December 2023</strong>
            <hr>
              <p>Thank you for coming to our website, we are here to give you the latest updates on gold and silver rates in Pakistan. We know how interesting it is for you to keep in touch with the variated rates of precious metals in Pakistan.</p>
              <p>Your interest in our platform is appreciated, and we need to hear from you. We will be more than happy to assist you with any questions, concerns, or suggestions concerning the price of gold and silver on our website. You will always be assisted by our expert team, making sure that you get a rapid and accurate response.</p>
              <p>We will be there to guide you through the complex world of gold and silver rates in Pakistan, whether you are a trader or an experienced investor looking for clues about metal prices. We are committed to making sure that your satisfaction is our main concern, and we will constantly improve the quality of our services to satisfy your needs.</p>
              <p>You can reach out to us through the contact form on our website or by emailing us at <a href="mailto:silvergoldrate@gmail.com">silvergoldrate@gmail.com</a>. We're grateful to you for choosing us as your trusted source of gold and silver prices in Pakistan. We're looking forward to serving you with dedication and excellence.</p>
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
                        @if(\Carbon\Carbon::parse($result->created_at)->subDay()->dayOfWeek == Carbon\Carbon::SUNDAY)
                            @else
                            <div class="lastestNews" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);border-radius:10px">
                               <a href="{{ url($result->slug) }}"> 
                                 <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" class="img-fluid" />
                                 <h6 class="mt-3 p-2">{{ $result->title }}</h6>
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




