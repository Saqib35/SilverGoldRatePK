@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}</title>
        <meta name="description" content="1 tola gold rate in Pakistan today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}" />
        <meta property="og:description" content="1 tola gold rate in Pakistan today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
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
        <meta name="twitter:title" content="Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}" />
        <meta name="twitter:description" content="1 tola gold rate in Pakistan today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="twitter:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta name="twitter:label1" content="Time to read" />
        <meta name="twitter:data1" content="5 minutes" />

        
        <script type="application/ld+json" >
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
                        "@id": "https://silvergoldrate.pk/images/today-gold-rate-in-pakistan.webp",
                        "url": "https://silvergoldrate.pk/images/today-gold-rate-in-pakistan.webp",
                        "width": "1280",
                        "height": "720",
                        "caption": "gold rate in Pakistan today",
                        "inLanguage": "en-US"
                    },
                    {
                    "@type": "Person",
                    "@id": "https://silvergoldrate.pk/author/staff#person",
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
                        "headline": "Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}",
                        "keywords": "gold rate in pakistan",
                        "datePublished": "{{ $HomePageGoldRate->created_at }}",
                        "dateModified": "{{ $HomePageGoldRate->updated_at }}",
                        "author": { "@id": "https://silvergoldrate.pk/author/staff#person", "name": "Staff" },
                        "publisher": { "@id": "https://silvergoldrate.pk#person" },
                        "description": "1 tola gold rate in Pakistan today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams.",
                        "name": "Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}",
                        "@id": "https://silvergoldrate.pk/gold-rate-in-pakistan#richSnippet",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/gold-rate-in-pakistan#webpage" },
                        "image": { "@id": "https://silvergoldrate.pk/assets/images/today-gold-rate-in-pakistan.webp" },
                        "inLanguage": "en-US",
                        "mainEntityOfPage": { "@id": "https://silvergoldrate.pk/gold-rate-in-pakistan#webpage" }
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
                        "@id": "{{ url('/gold-rate-in-pakistan#webpage') }}",
                        "url": "{{ url('/gold-rate-in-pakistan') }}",
                        "name": "Gold Rate in Pakistan Today \u2013 {{ now()->format('j F Y') }}",
                        "datePublished": "{{  $HomePageGoldRate->created_at }}",
                        "dateModified": "{{  $HomePageGoldRate->updated_at }}",
                        "isPartOf": { "@id": "https://silvergoldrate.pk/#website" },
                        "primaryImageOfPage": { "@id": "https://silvergoldrate.pk/images/today-gold-rate-in-pakistan.webp" },
                        "inLanguage": "en-US",
                    
                        "mainEntity": [
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-64a661358faf9') }}",
                                "name": "What is the recent gold rate in Pakistan for 1 tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "About today, {{ now()->format('j F Y') }}, the rate of 1 Tola 24-carat gold in Pakistan is PKR {{ $rates['ratePerTola'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-64a661358faff') }}",
                                "name": "What is the rate of 1 Tola 22-carat gold in Pakistan today?",
                                "acceptedAnswer": { "@type": "Answer", "text": "As of today, {{ now()->format('j F Y') }}, the rate of 1 Tola 22-carat gold in Pakistan is PKR {{ $rates22k['ratePerTola'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-64a661358fb01') }}",
                                "name": "How many grams are in one Tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "there are \"<strong>11.664</strong>\" grams  in 1 Tola." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-64a661358fb04') }}",
                                "name": "How many carats are in a tola?",
                                "acceptedAnswer": { "@type": "Answer", "text": "carats are used to measure the weight of gemstones (Nagina), not gold. Gold is typically measured in grams or ounces." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-64a661358fb05') }}",
                                "name": "How many Ratti are in one Masha?",
                                "acceptedAnswer": { "@type": "Answer", "text": "One Masha is equal to 8 <a rel='nofollow' href=\"https://en.wikipedia.org/wiki/Ratti\">Ratti</a>." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-1688801939426') }}",
                                "name": "How much does 1 gram of gold cost in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "As of today, {{ now()->format('j F Y') }}, 1 gram of gold in Pakistan costs PKR {{ $rates['ratePerGram'] }}." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-1688801999749') }}",
                                "name": "How often does the gold rate change in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "The gold rate in Pakistan can change anytime, and it may fluctuate multiple times per day." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-1688802038099') }}",
                                "name": "What factors influence the gold rate in Pakistan?",
                                "acceptedAnswer": { "@type": "Answer", "text": "The gold rate in Pakistan is greatly influenced by variations in the dollar rate and the economic instability of Pakistan." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-1688802060484') }}",
                                "name": "What is the difference between 24-carat and 22-carat gold?",
                                "acceptedAnswer": { "@type": "Answer", "text": "24-carat gold is the purest form of gold, containing 99.5% of the precious metal, while 22-carat gold contains 91.6% gold and 8.4% of other metals." }
                            },
                            {
                                "@type": "Question",
                                "url": "{{ url('/gold-rate-in-pakistan#faq-question-1688802238499') }}",
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

        <style>
             .gold-rate {
               color: #ff0000;
             }
             
             .bg-bf9109{
               background-color: #bf9109 !important;
             }
             
        </style>
@endsection

@section('main')
  
    <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            <div class="text-center mt-5">
                <h1 class="h1-size">Gold Rate in Pakistan Today – {{ now()->format('j F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr />
              By Staff ⏰ Updated <strong> {{ now()->format('j F Y') }}</strong>
            <hr />

            <div class="alert alert-info">
                <p class="mb-0">
                    1 Tola Gold rate in Pakistan today, {{ now()->format('jS F Y') }} announced for
                    <strong class="gold-rate">24 karat Rs {{  $rates['ratePerTola'] }}</strong> tola for 22k <strong>Rs. {{  $rates22k['ratePerTola'] }}</strong> for 21 karat <strong>Rs. {{  $rates21k['ratePerTola'] }}</strong> and for 18 karat gold <strong>Rs {{  $rates18k['ratePerTola'] }}.</strong>
                 </p>
            </div>

            <p>These variations are nearly tied to changes in the value of the US dollar, showing the link between currency values and gold rates.</p>

            <p class="text-justify">
                The gold price is increasing globally at <span class="gold-rate"><strong>${{ $updatedPrice->gold_per_ounce_dollar }} per ounce</strong></span>. It is noticeable that gold rates in Pakistan can have some ups and downs a second time due to the global gold market.
            </p>

            <p>For the recent and most accurate gold rates, you can visit the live markets of your cities.</p>

            <p>If you have an interest in gold, then it is necessary for you to keep yourself up to date. Regularly check the market trends to be aware of the market, i.e., it is up or down.</p>
            
            
            <h2><strong>Today's 24K Gold Prices in Pakistan ({{ now()->format('j F Y') }}):</strong></h2>

            <ul>
                <li class="text-justify"><strong>1 gram:<span class="gold-rate">{{  $rates['ratePerGram'] }}</span></strong></li>
                <li class="text-justify"><strong>10 grams:<span class="gold-rate">{{  $rates['ratePer10Grams'] }}</span></strong></li>
                <li class="text-justify"><strong>1 tola:<span class="gold-rate">{{  $rates['ratePerTola'] }}</span></strong></li>
                <li class="text-justify"><strong>1 ounce:<span class="gold-rate">{{  $rates['ratePerTroyOunce'] }}</span></strong></li>
                <li class="text-justify"><strong>1 kilogram:<span class="gold-rate">{{  $rates['ratePerKilogram'] }}</span></strong></li>
            </ul>

            <div class="alert alert-warning">
                <p class="mb-0">
                    Please Note: All these Rates Mentioned Here are Just to Get an Idea of what could be the Price in Bullion Markets. Please Visit Your City's Gold Market for the Actual Gold Rate.
                </p>
            </div>

            @if($HomePageGoldRate)
                {!! $HomePageGoldRate->content !!}
            @else
                <p>No content available</p>
            @endif
  
            <div class="bg-bf9109 text-white p-2">
                <h2 class="text-center">Gold Rate in Pakistan today <strong>{{ now()->format('j F Y') }}</strong></h2>
            </div>


            <p class="text-justify mt-3">
                 As of today, <strong class="gold-rate">{{ now()->format('j F Y') }}</strong>, the 1 tola gold price in Pakistan is
                 <strong class="gold-rate">Rs. {{  $rates['ratePerTola'] }}</strong>. The Gold Prices in Pakistan are usually sourced from the Karachi Gold Market.
            </p>

            <p class="text-justify">
               In Pakistan, gold rates change due to the two big reasons. One major reason is the fluctuations in the dollar rate, and the second reason is the economic instability of Pakistan.
            </p>
            
            <p>
                These two external factors influence the local gold prices and because of these factors, a gold rate may change multiple times per day.
            </p>

            <p>In Pakistan gold is measured in different units but most commonly used widely ,Tola,..</p>

            <p>Gold is found in multiple weightages and karats: for example, 24 karat, 22 karat, 21 karat gold 18 karat gold. Gold price is fixed accordingly.</p>

            <p>In Pakistan gold/Sona price is offered in such quantities:</p>

            <ul>
                <li>Gold price per tola</li>
                <li>Gold price per 10 grams</li>
                <li>Gold price per 1 gram</li>
                <li>Gold price per ounce</li>
            </ul>

            <p>This category is for the convenience of customer or investor.</p>

            <p>
                In the below table, you can check the latest 1 tola Gold Price in Pakistan on <span class="gold-rate"><strong>{{ now()->format('j F Y') }}</strong></span> for different karats.
            </p>


           
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">1 Tola Gold Price Today ({{ now()->format('j F Y') }})</h2>
            </div>

            <div id="gold_all_detail_table" class="mt-2"></div>

         
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Gold Price Today In Major Cities Of Pakistan</h2>
            </div>


            <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>


             <h2>
                    <strong class="gold-rate">Disclaimer:</strong>
            </h2>

            <p>
                <span class="gold-rate">
                    The gold rates mentioned above are for information only are not guaranteed to be 100% accurate. We are not taking any responsibility
                    if there is any change in above values later.
                </span>
            </p>


            <div class="text-center text-white p-2 bg-bf9109"><h2>Gold Rate In Pakistan For the Last 30 Days<h2></div>

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
                                    <td  class="text-center"><a>{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('j M Y') }}</a></td>
                                    <td  class="text-center">Market Closed</td>
                                    <td  class="text-center">Market Closed</td>
                                </tr>
                                
                            @else
                                 <tr>
                                    <td  class="text-center"><a href="{{  url($GoldRateByDay->slug); }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('j M Y') }}</a></td>
                                    <td  class="text-center">{{  $GoldRateByDay->First_rate }}</td>
                                    <td  class="text-center">{{  $GoldRateByDay->Second_rate }}</td>
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
                            <td  class="text-center">24</td>
                            <td  class="text-center">(24/24)*100</td>
                            <td  class="text-center">99%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">22</td>
                            <td  class="text-center">(22/24)*100</td>
                            <td  class="text-center">91.6%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">20</td>
                            <td  class="text-center">(20/24)*100</td>
                            <td  class="text-center">83.3%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">18</td>
                            <td  class="text-center">(18/24)*100</td>
                            <td  class="text-center">75%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">16</td>
                            <td  class="text-center">(16/24)*100</td>
                            <td  class="text-center">66.6%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">14</td>
                            <td  class="text-center">(14/24)*100</td>
                            <td  class="text-center">58.3%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">12</td>
                            <td  class="text-center">(12/24)*100</td>
                            <td  class="text-center">50%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">10</td>
                            <td  class="text-center">(10/24)*100</td>
                            <td  class="text-center">41.7%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">8</td>
                            <td  class="text-center">(8/24)*100</td>
                            <td  class="text-center">33.3%</td>
                        </tr>
                        <tr>
                            <td  class="text-center">6</td>
                            <td  class="text-center">(6/24)*100</td>
                            <td  class="text-center">25%</td>
                        </tr>
                    </tbody>
                </table>

                <h2>
                   <strong><u>FAQs:</u></strong>
                </h2>

                <h3>
                   <strong>1. What is the recent gold rate in Pakistan for 1 tola?</strong>
                </h3>

                <p>
                    About today, {{ now()->format('j F Y') }}, the rate of 1 Tola 24-carat gold in Pakistan is
                    <strong>PKR {{ $rates['ratePerTola'] }}</strong>.
                </p>

                <h3>
                    <strong>2. What is the rate of 1 Tola 22-carat gold in Pakistan today?</strong>
                </h3>

                <p>
                    As of today, {{ now()->format('j F Y') }}, the rate of 1 Tola 22-carat gold in Pakistan is
                    <strong>PKR {{ $rates22k['ratePerTola'] }}</strong>.
                </p>

                <h3>
                    <strong>3. How many grams are in one Tola?</strong>
                </h3>

                <p>
                    There are “11.664” grams in 1 Tola.
                </p>

                <h3>
                   4. How many carats are in a tola?
                </h3>

                <p>
                   1 Pakistan Tola is 12.5g or 11/25 of a t/oz (0.44 t/oz)
                </p>

                <h3>
                    <strong>5. How many Ratti are in one Masha?</strong>
                </h3>

                <p>
                   One Masha is equal to 8 <a  rel='nofollow' href="https://en.wikipedia.org/wiki/Ratti" target="_blank"><span style="color: blue;">Ratti</span></a>.
                </p>

                <h3>
                   <strong>6. How much does 1 gram of gold cost in Pakistan?</strong>
                </h3>

                <p>
                    As of today, {{ now()->format('j F Y') }}, 1 gram of gold in Pakistan costs 
                    <strong>PKR {{ $rates['ratePerGram'] }}</strong>.
                </p>

                <h3>
                    <span>
                        <span ><strong>7. How often does the gold rate change in Pakistan?</strong></span>
                    </span>
                </h3>

                <p>
                    The gold rate in Pakistan can change anytime, and it may fluctuate multiple times per day.
                </p>

                <h3>
                    <strong>8. What factors influence the gold rate in Pakistan?</strong>
                </h3>

                <p>
                    The gold rate in Pakistan is greatly influenced by variations in the dollar rate and the economic instability of Pakistan.
                </p>

                <h3>
                   <strong>9. What is the difference between 24-carat and 22-carat gold?</strong>
                </h3>

                <p>
                   24-carat gold is the purest form of gold, containing 99.5% of the precious metal, while 22-carat gold contains 91.6% gold and 8.4% of other metals.
                </p>

                <h3>
                   <strong>10. Where to sell gold in Pakistan?</strong>
                </h3>

                <p>
                   Don't sell gold to local jewelers they won't give you a good price. It is advisable to sell gold in Pakistan at Sarafa Bazar to wholesalers, as they usually offer better prices compared to local jewelers.
                </p>


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




