@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate in Islamabad Today – {{ now()->format('d F Y') }}</title>
        <meta name="description" content="1 tola gold rate in Islamabad today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Rate in Islamabad Today – {{ now()->format('d F Y') }}" />
        <meta property="og:description" content="1 tola gold rate in Islamabad today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Islamabad" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in Islamabad today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Rate in Islamabad Today – {{ now()->format('j F Y') }}" />
        <meta name="twitter:description" content="1 tola gold rate in v today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
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
                <h1 class="h1-size">Gold Rate in Islamabad Today – {{ now()->format('j F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr />
              By Staff ⏰ Updated <strong> {{ now()->format('j F Y') }}</strong>
            <hr />

            

            <div>
                <p class="mb-0">
                    As of {{  $formattedTime = \Carbon\Carbon::parse($HomePageGoldRate->updated_at)->format('g:i A'); }} on {{ now()->format('jS F Y') }}, the gold rate in Islamabad for 24k gold is  <strong class="gold-rate">Rs {{  $rates['ratePerTola'] }}</strong> per tola. The price for 10 grams is <strong> Rs {{  $rates['ratePer10Grams'] }} </strong>, and for 1 gram, it is <strong> Rs {{  $rates['ratePerGram'] }} </strong>.
                </p>
            </div>

             <br>

             <h2><strong>Today's 24K Gold Prices in Islamabad  ({{ now()->format('j F Y') }}):</strong></h2>

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

            <p>As you know the value of Gold for all the people around, gold is always the best and most precious metal to invest and to buy. So, it is necessary to know the accurate rates for gold before investing in gold or buying any gold items.</p>
        

           
            <div class="text-center text-white p-2 bg-bf9109"><h2>Gold Rate Islamabad For the Last 30 Days<h2></div>

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

                <p>
             Keep in touch with the Gold rate in Islamabad if you are going to buy gold in Islamabad or want to invest in Gold here. The basic concepts will cover the terms that are important in making the gold market.
             </p>            

             <h2>Factors affecting the gold rate</h2>
             <p>
             Several factors affect the gold prices in Islamabad or any other city. The economics, gold demands, geopolitical events, central banks, and market dynamics are the key factors that are the reason behind variations in gold rates. The gold rate can change suddenly or after days.
             </p>   
              <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Price Difference in 1 Tola In Other Big Cities</h2>
            </div>

              <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>

              <div class="alert alert-warning">
                <p class="mb-0">
                    To get a more updated price of gold visit nearby Sarafa Market so that you may not find any loss in buying or purchasing Gold. These rates mentioned above are according to Pakistan Bullion Market also known as Sarafa Bazar of Pakistan. We update the price every few hours so users get fresh information from <a  href="https://silvergoldrate.pk/gold-rate-in-pakistan">(Website Link)</a>.
                </p>
              </div> 
              <p>The price of gold is set by the Sarafa Market Pakistan. The slight difference in price (of few hundred) is due to distance from main market.</p>


              <img src="{{ asset('blogs/gold-rate-in-islamabad.webp') }}" alt="Gol rate in Islamabad" loading="lazy" class="img-fluid mb-4" />




<h2>Main Market of Gold in Islamabad</h2>
<ul>

    <li>A famous market for gold in Islamabad is the Jinnah Super Market. Its location in Islamabad is F-7 sector. It is a popular shopping place where you can buy the best gold items.</li>
    <li>One more popular place for jewellery is the Blue Area in Islamabad. Here, you can find many gold shops. You can buy any jewellery item from here.</li>
    <li>
    Another Bazar is well-known in Islamabad for gold shops. Sadda Bazar is one of the best markets in Islamabad for buying gold items. You can invest in gold here.
    </li>
    
</ul>

<h2>How often do Gold rates change in Islamabad?</h2>
<p>In Islamabad or any other city, the Gold rate can change multiple times within a day due to some conditions. Change in gold rate is also due to some global factors. There may be minor changes in Gold rates within cities.</p>
<h2>What are the things to check while buying Gold?</h2>  
 <ul>
 <li>The purity level needs to be checked when buying gold. 24K Gold is pure gold but contains a small number of other metals too.</li>
 <li>The gold rates are changing throughout the whole day and across locations. Like, you need to check the rate/gram of gold in Islamabad before buying.</li>
 <li>Buy-back terms should also be considered when buying gold.</li>
 <li>Certification of metal is also an important step to check before investing in Gold.</li>
 <li>Quality and colour of gold that it is yellow, white, or rose-coloured.</li>
 
    
 </ul>


    <h2>
       <strong><u>FAQs:</u></strong>
    </h2>

    <h3>
       <strong>What is today’s gold rate in Islamabad? </strong>
    </h3>

    <p>
        The current gold rate in Karachi today stands at  <strong>PKR {{ $rates['ratePerTola'] }}</strong> for 24 karat per tola, as per the updated Karachi gold market on {{ now()->format('j F Y') }}.
    </p>

    
    <h3>
       <strong>What is the best time to invest in gold? </strong>
    </h3>

    <p>
    When the prices go down from average rates, this is the best time for investment.               
   </p>


   <h3>
       <strong>List down the important checklist while buying gold in Islamabad. </strong>
    </h3>
    <ul>
        <li>Confirm the gold price per gram.</li>
        <li>Check the various purity levels.</li>
        <li>Consider buy-back terms.</li>
        <li>Check certification.</li>
        <li>Sum up the bill.</li>
        
            
    </ul>
    <h3>How do you test the gold?</h3>
    <p>By applying the float method, you can test the gold easily. Put your gold in pure water. If the gold sinks, it is real but if it floats above the water, it is not real.</p>
    <h3>Does gold go down in rate ever?</h3>
    <p>Due to some factors like lack of demand, gold can go down. And this is the best time to invest in gold or buy gold items.</p>
    <h3>What is the most trending gold in Islamabad nowadays?</h3>
    <p>There is no specific kind of gold that is mostly used but people in jewellery or investment use all kinds of gold.</p>
    <h3>Does Islamabad have high rates of gold as compared to other cities in Pakistan?</h3>
    <p>The rates for gold are almost the same across cities but sometimes there occur minor differences in gold rate values. It is due to some specific conditions.</p>



              </div>
                        


            </div>
            
           
           

         
            
                 
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
                                <img src="{{ asset($result->img) }}" alt="{{ $result->alt_tag }}" loading="lazy" class="img-fluid" />
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




