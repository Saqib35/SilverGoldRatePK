@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate in faisalabad Today – {{ now()->format('d F Y') }}</title>
        <meta name="description" content="1 tola gold rate in faisalabad today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Rate in faisalabad Today – {{ now()->format('d F Y') }}" />
        <meta property="og:description" content="1 tola gold rate in faisalabad today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in faisalabad" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in faisalabad today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Rate in faisalabad Today – {{ now()->format('j F Y') }}" />
        <meta name="twitter:description" content="1 tola gold rate in faisalabad today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="twitter:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta name="twitter:label1" content="Time to read" />
        <meta name="twitter:data1" content="5 minutes" />

      
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
                <h1 class="h1-size">Gold Rate in faisalabad Today – {{ now()->format('j F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr />
              By Staff ⏰ Updated <strong> {{ now()->format('j F Y') }}</strong>
            <hr />

            

            <div>
                <p class="mb-0">
                    As of {{  $formattedTime = \Carbon\Carbon::parse($HomePageGoldRate->updated_at)->format('g:i A'); }} on {{ now()->format('jS F Y') }}, the gold rate in faisalabad for 24k gold is  <strong class="gold-rate">Rs {{  $rates['ratePerTola'] }}</strong> per tola. The price for 10 grams is <strong> Rs {{  $rates['ratePer10Grams'] }} </strong>, and for 1 gram, it is <strong> Rs {{  $rates['ratePerGram'] }} </strong>.
                </p>
            </div>

             <br>
             <h2><strong>Today's 24K Gold Prices in faisalabad  ({{ now()->format('j F Y') }}):</strong></h2>

            <ul>
                <li class="text-justify"><strong>1 gram:<span class="gold-rate">{{  $rates['ratePerGram'] }}</span></strong></li>
                <li class="text-justify"><strong>10 grams:<span class="gold-rate">{{  $rates['ratePer10Grams'] }}</span></strong></li>
                <li class="text-justify"><strong>1 tola:<span class="gold-rate">{{  $rates['ratePerTola'] }}</span></strong></li>
                <li class="text-justify"><strong>1 ounce:<span class="gold-rate">{{  $rates['ratePerTroyOunce'] }}</span></strong></li>
                <li class="text-justify"><strong>1 kilogram:<span class="gold-rate">{{  $rates['ratePerKilogram'] }}</span></strong></li>
            </ul>
          
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Price According to purity ({{ now()->format('j F Y') }})</h2>
            </div>

            <div id="gold_all_detail_table" class="mt-2"></div>


            <p>Investing in gold has been a trend since ancient times. It is important to gain an understanding of the gold rate in Faisalabad for the people who are going to make important decisions regarding gold prices.</p>
            
          
          
            <div class="text-center text-white p-2 bg-bf9109"><h2>Gold Rate faisalabad For the Last 30 Days<h2></div>

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
                                    <td  class="text-center"><a href="https://silvergoldrate.pk/{{ $GoldRateByDay->slug }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('j M Y') }}</a></td>
                                    <td  class="text-center">{{  $GoldRateByDay->First_rate }}</td>
                                    <td  class="text-center">{{  $GoldRateByDay->Second_rate }}</td>
                                </tr>
                                
                            @endif

                        @endforeach
                    </tbody>
                </table>
            </div>

           <p>
           Stay active for the basic concepts behind the gold rate in Faisalabad. The basic concepts will cover the terms that are important in making the gold market.
           </p>

            
            <h2>Factors affecting the gold rate</h2>
              <p>Many factors affect the gold prices in Faisalabad or any other city. The economics, gold demands, geopolitical events, central banks, and market dynamics are the key factors that are the reason behind fluctuations in gold rates.</p>
            
            



            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Price Difference in 1 Tola In Other Big Cities</h2>
            </div>

              <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>

            </div>
            <div class="alert alert-warning">
                <p class="mb-0">
                    To get a more updated price of gold visit nearby Sarafa Market so that you may not find any loss in buying or purchasing Gold. These rates mentioned above are according to Pakistan Bullion Market also known as Sarafa Bazar of Pakistan. We update the price every few hours so users get fresh information from <a  href="https://silvergoldrate.pk/gold-rate-in-pakistan" >(Website Link)</a>.
                </p>
            </div>

            <p class="p-2">The price of gold is set by the Sarafa Market Pakistan. The slight difference in price (of few hundred) is due to distance from main market.</p>
            <h2>Gold Price in Faisalabad- General Discussion</h2>
            <p>People in Faisalabad love to buy gold for various purposes. When discussing gold, is a precious metal and is always considered as expensive as compared to silver. </p>
            <p>In Faisalabad, the gold rate has been increasing in the past few years. The increment in gold rates was due to financial and economic conditions. </p>
            <h2>Main Markets of Gold in Faisalabad</h2>
            <ul>
                <li>One of the main markets of Gold in Faisalabad is Ghanta Ghar Market. It is a well-known market for gold and other jewelry.</li>
                <li>Another famous market for gold in Faisalabad is Rail Bazar where you can see several gold traders and gold shops.</li>
                <li>D Ground Market is a major area in Faisalabad containing many markets and shops having gold jewelry.</li>
                    
            </ul>
            <h2>Rates do change in Faisalabad often</h2>
            <p>Gold rates are well known for their changing and fluctuations. They change many times within 24 hours depending on specific conditions. Gold traders and investors must be informed about such variations in the gold market. They can change or confirm their decisions after knowing the actual rates.</p>
    
            <h2>What are the things to check while buying Gold?</h2>
            <ul>
                <li>The purity level needs to be checked when buying gold. 24K Gold is pure gold but contains a small number of other metals too.</li>
                <li>The gold rates are changing throughout the whole day and across locations. Like, you need to check the rate/gram of gold in Faisalabad before buying.</li>
                <li>Buy-back terms should also be considered when buying gold. </li>
                <li>Certification of metal is also an important step to check before investing in Gold.</li>
                <li>Quality and color of gold that it is yellow, white, or rose-colored.</li>
                    
            </ul>


                <h2>
                   <strong><u>FAQs:</u></strong>
                </h2>

                <h3>
                   <strong>1. What is the perfect time to invest in gold?</strong>
                </h3>

                <p>
                   The best time for investment in gold is when prices decrease as compared to regular rates.
                </p>

                <h3>
                    <strong>2. List down the important checklist while buying gold in Faisalabad.</strong>
                </h3>   
                 <ul>
                    <li>Confirm the gold price per gram.</li>
                    <li>Check the various purity levels.</li>
                    <li>Consider buy-back terms.</li>
                    <li>Check certification.</li>
                    <li>Sum up the bill</li>
                </ul>
                <h2>How do you test the gold?</h2>
                <p>By applying the float method, you can test the gold easily. Put your gold in pure water. If the gold sinks, it is real but if it floats above the water, it is not real.</p>
                <h2>Does gold go down in rate ever?</h2>
                <p>Yes, lack of demand is the reason when the gold rate comes down and it is the best time to invest in gold. </p>
                <h2>What is the most trending gold in Faisalabad nowadays?</h2>
                <p>There is no specific kind of gold that is mostly used but people in jewelry or investment use all kinds of gold.</p>
                <h2>Does Faisalabad have high rates of gold as compared to other cities in Pakistan?</h2>
                <p>The rates for gold are almost the same across cities but sometimes there occur minor differences in gold rate values. It is due to some specific conditions.</p>
       
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
                            <a href="https://silvergoldrate.pk/{{ $result->slug }}">
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




