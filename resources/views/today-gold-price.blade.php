@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{  $HomePageGoldRate->meta_title }}</title>
        <meta name="description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{  $HomePageGoldRate->meta_title }}" />
        <meta property="og:description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in Pakistan today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{  $HomePageGoldRate->meta_title }}" />
        <meta name="twitter:description" content="{{  $HomePageGoldRate->meta_description }}" />
        <meta name="twitter:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta name="twitter:label1" content="Time to read" />
        <meta name="twitter:data1" content="5 minutes" />

        
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
                        "caption": "gold rate in Pakistan today",
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
                        "headline": "{{ $HomePageGoldRate->meta_title }}",
                        "keywords": "gold rate in pakistan",
                        "datePublished": "{{ $HomePageGoldRate->created_at }}",
                        "dateModified": "{{ $HomePageGoldRate->updated_at }}",
                        "author": { "@id": "{{ url('/author/staff/') }}", "name": "Staff" },
                        "publisher": { "@id": "{{ url('/#person') }}" },
                        "description": "{{ $HomePageGoldRate->meta_description }}",
                        "name": "{{ $HomePageGoldRate->meta_title }}",
                        "@id": "{{ url('/gold-rate-in-pakistan/#richSnippet') }}",
                        "isPartOf": { "@id": "{{ url('/gold-rate-in-pakistan/#webpage') }}" },
                        "image": { "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "{{ url('/gold-rate-in-pakistan/#webpage') }}" }
                    }
                ]
            }
        </script>
        <script type="application/ld+json" >
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": ["WebPage", "FAQPage"],
                        "@id": "https://silvergoldrate.pk/gold-rate-in-pakistan/#webpage",
                        "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/",
                        "name": "Gold Rate in Pakistan Today \u2013 {{ now()->format('d F Y') }}",
                        "datePublished": "{{  $HomePageGoldRate->created_at }}",
                        "dateModified": "{{  $HomePageGoldRate->updated_at }}",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/#website" },
                        "primaryImageOfPage": { "@id": "{{ asset('images/today-gold-rate-in-pakistan.webp') }}" },
                        "inLanguage": "en-US",
                        "mainEntity": [
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-64a661358faf9",
                                "name": "What is the recent gold rate in Pakistan for 1 tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "About today, {{ now()->format('d F Y') }}, the rate of 1 Tola 24-carat gold in Pakistan is PKR {{ $rates['ratePerTola'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-64a661358faff",
                                "name": "What is the rate of 1 Tola 22-carat gold in Pakistan today?",
                                "acceptedAnswer": { "@type": "Answer", "text": "As of today, {{ now()->format('d F Y') }}, the rate of 1 Tola 22-carat gold in Pakistan is PKR {{ $rates22k['ratePerTola'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb01",
                                "name": "How many grams are in one Tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "there are \"<strong>11.664</strong>\" grams  in 1 Tola." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb04",
                                "name": "How many carats are in a tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "carats are used to measure the weight of gemstones (Nagina), not gold. Gold is typically measured in grams or ounces." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-64a661358fb05",
                                "name": "How many Ratti are in one Masha?",
                                "acceptedAnswer": { "@type": "Answer", "text": "One Masha is equal to 8 <a rel='nofollow' href=\"https://en.wikipedia.org/wiki/Ratti\">Ratti</a>." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-1688801939426",
                                "name": "How much does 1 gram of gold cost in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "As of today, {{ now()->format('d F Y') }}, 1 gram of gold in Pakistan costs PKR {{ $rates['ratePerGram'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-1688801999749",
                                "name": "How often does the gold rate change in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "The gold rate in Pakistan can change anytime, and it may fluctuate multiple times per day." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-1688802038099",
                                "name": "What factors influence the gold rate in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "The gold rate in Pakistan is greatly influenced by variations in the dollar rate and the economic instability of Pakistan." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-1688802060484",
                                "name": "What is the difference between 24-carat and 22-carat gold?",
                                "acceptedAnswer": { "@type": "Answer", "text": "24-carat gold is the purest form of gold, containing 99.5% of the precious metal, while 22-carat gold contains 91.6% gold and 8.4% of other metals." }
                            },
                            {
                                "@type": "Question",
                                "url": "https://silvergoldrate.pk/gold-rate-in-pakistan/#faq-question-1688802238499",
                                "name": "Where to sell gold in Pakistan?",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "Don't sell gold to local jewelers they won't give you a good price. It is advisable to sell gold in Pakistan at Sarafa Bazar to wholesalers, as they usually offer better prices compared to local jewelers."
                                }
                            }
                        ]
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
            <div class="text-center mt-5">
                <h1 class="h1-size">Gold Rate in Pakistan Today – {{ now()->format('d F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr>By Staff ⏰ Updated <strong> {{ now()->format('d F Y') }}</strong>
            <hr>
            @if($HomePageGoldRate)
                {!! $HomePageGoldRate->content !!}
            @else
                <p>No content available</p>
            @endif

            <div style="background-color:#bf9109; color:white; padding:10px 20px; text-align:center"><h2>Gold Rate In Pakistan For the Last 30 Days<h2></div>
                
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
                        
                            @if(\Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->dayOfWeek == Carbon\Carbon::SUNDAY)
                                  <tr>
                                    <td style="text-align:center"><a>{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('d M Y') }}</a></td>
                                    <td style="text-align:center">Market Closed</td>
                                    <td style="text-align:center">Market Closed</td>
                                </tr>
                                
                            @else
                                 <tr>
                                    <td style="text-align:center"><a href="{{  url($GoldRateByDay->slug); }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('d M Y') }}</a></td>
                                    <td style="text-align:center">{{  $GoldRateByDay->First_rate }}</td>
                                    <td style="text-align:center">{{  $GoldRateByDay->Second_rate }}</td>
                                </tr>
                                
                            @endif

                        @endforeach
                      
                    </tbody>
                </table>
                <h2>What is “Karat” or “Carat”</h2>
                <p>Karat is a measurement of metal purity, that how much pure metal is present in 1 “tola” or “Masha” or “Ratti”. For example, 24 karat gold means 99.9% of pure metal i-e gold is present.</p>
                <h2>How to check gold purity in details:</h2>
                <p>How much impurity is present in 22k, 20k, 18k etc., is presented in given table.</p>
                
                <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Karat</th>
                            <th scope="col">Formla</th>
                            <th scope="col">Gold %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center">24</td>
                            <td style="text-align:center">(24/24)*100</td>
                            <td style="text-align:center">99%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">22</td>
                            <td style="text-align:center">(22/24)*100</td>
                            <td style="text-align:center">91.6%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">(20/24)*100</td>
                            <td style="text-align:center">83.3%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">18</td>
                            <td style="text-align:center">(18/24)*100</td>
                            <td style="text-align:center">75%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">16</td>
                            <td style="text-align:center">(16/24)*100</td>
                            <td style="text-align:center">66.6%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">14</td>
                            <td style="text-align:center">(14/24)*100</td>
                            <td style="text-align:center">58.3%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">(12/24)*100</td>
                            <td style="text-align:center">50%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">(10/24)*100</td>
                            <td style="text-align:center">41.7%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">8</td>
                            <td style="text-align:center">(8/24)*100</td>
                            <td style="text-align:center">33.3%</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">6</td>
                            <td style="text-align:center">(6/24)*100</td>
                            <td style="text-align:center">25%</td>
                        </tr>
                    </tbody>
                </table>

                <h2>
                    <span >
                        <span>
                            <strong><u>FAQs:</u></strong>
                        </span>
                    </span>
                </h2>

                <h3>
                    <span>
                        <span><strong>1. What is the recent gold rate in Pakistan for 1 tola?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span >
                            <span>About today, {{ now()->format('d F Y') }}, the rate of 1 Tola 24-carat gold in Pakistan is <strong>PKR&nbsp;</strong></span>
                        </span>
                    </span>
                    <strong>{{ $rates['ratePerTola'] }}</strong>.
                </p>

                <h3>
                    <span>
                        <span ><strong>2. What is the rate of 1 Tola 22-carat gold in Pakistan today?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span >
                            <span>As of today, {{ now()->format('d F Y') }}, the rate of 1 Tola 22-carat gold in Pakistan is <strong>PKR </strong></span>
                        </span>
                    </span>
                    <strong>{{ $rates22k['ratePerTola'] }}</strong>.
                </p>

                <h3>
                    <span>
                        <span ><strong>3. How many grams are in one Tola?</strong></span>
                    </span>
                </h3>

                <p>
                    <span>
                        <span><span>There are &ldquo;11.664&rdquo; grams in 1 Tola.</span></span>
                    </span>
                </p>

                <h3>
                    <span >
                        <span ><strong>4. How many carats are in a tola?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span ><span>1 Pakistan Tola is 12.5g or 11/25 of a t/oz (0.44 t/oz)</span></span>
                    </span>
                </p>

                <h3>
                    <span >
                        <span style="font-family: Calibri, 'sans-serif';"><strong>5. How many Ratti are in one Masha?</strong></span>
                    </span>
                </h3>

                <p>
                    <span>
                        <span>
                            <span>
                                One Masha is equal to 8&nbsp;<a href="https://en.wikipedia.org/wiki/Ratti" target="_blank"><span style="color: blue;">Ratti</span></a>.
                            </span>
                        </span>
                    </span>
                </p>

                <h3>
                    <span>
                        <span><strong>6. How much does 1 gram of gold cost in Pakistan?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span >As of today, {{ now()->format('d F Y') }}, 1 gram of gold in Pakistan costs </span>
                    </span>
                    <strong>PKR {{ $rates['ratePerGram'] }}</strong>.
                </p>

                <h3>
                    <span>
                        <span ><strong>7. How often does the gold rate change in Pakistan?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span>The gold rate in Pakistan can change anytime, and it may fluctuate multiple times per day.</span>
                    </span>
                </p>

                <h3>
                    <span>
                        <span><strong>8. What factors influence the gold rate in Pakistan?</strong></span>
                    </span>
                </h3>

                <p>
                    <span >
                        <span>The gold rate in Pakistan is greatly influenced by variations in the dollar rate and the economic instability of Pakistan.</span>
                    </span>
                </p>

                <h3>
                    <span>
                        <span><strong>9. What is the difference between 24-carat and 22-carat gold?</strong></span>
                    </span>
                </h3>

                <p>
                    <span>
                        <span>
                            <span >24-carat gold is the purest form of gold, containing 99.5% of the precious metal, while 22-carat gold contains 91.6% gold and 8.4% of other metals.</span>
                        </span>
                    </span>
                </p>

                <h3>
                    <span>
                        <span><strong>10. Where to sell gold in Pakistan?</strong></span>
                    </span>
                </h3>

                <p>
                    <span>
                        <span>
                            <span>
                                Don&rsquo;t sell gold to local jewelers they won&rsquo;t give you a good price. It is advisable to sell gold in Pakistan at Sarafa Bazar to wholesalers, as they usually offer better prices compared to local jewelers.
                            </span>
                        </span>
                    </span>
                </p>

                <h2>&nbsp;</h2>


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
<script>
    var tableAllType = {!! json_encode($table_all_type) !!};
    var goldDetailContainer = document.getElementById('gold_all_detail_table');
    goldDetailContainer.innerHTML = tableAllType;


    var table_Second_Table_24k_And_22k = {!! json_encode($table_Second_Table_24k_And_22k) !!};
    var goldDetailContainer = document.getElementById('table_Second_Table_24k_And_22k');
    goldDetailContainer.innerHTML = table_Second_Table_24k_And_22k;


</script>

@endsection




