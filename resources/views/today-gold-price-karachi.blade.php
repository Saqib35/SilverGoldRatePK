@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate in Karachi Today – {{ now()->format('d F Y') }}</title>
        <meta name="description" content="1 tola gold rate in Karachi today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Rate in Karachi Today – {{ now()->format('d F Y') }}" />
        <meta property="og:description" content="1 tola gold rate in Karachi today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Karachi" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in Karachi today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Rate in Karachi Today – {{ now()->format('j F Y') }}" />
        <meta name="twitter:description" content="1 tola gold rate in Karachi today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
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
                <h1 class="h1-size">Gold Rate in Karachi Today – {{ now()->format('j F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr />
              By Staff ⏰ Updated <strong> {{ now()->format('j F Y') }}</strong>
            <hr />

            

            <div>
                <p class="mb-0">
                    As of {{  $formattedTime = \Carbon\Carbon::parse($HomePageGoldRate->updated_at)->format('g:i A'); }} on {{ now()->format('jS F Y') }}, the gold rate in Karachi for 24k gold is  <strong class="gold-rate">Rs {{  $rates['ratePerTola'] }}</strong> per tola. The price for 10 grams is <strong> Rs {{  $rates['ratePer10Grams'] }} </strong>, and for 1 gram, it is <strong> Rs {{  $rates['ratePerGram'] }} </strong>.
                </p>
            </div>

             <br>
          
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Current Rates In karachi ({{ now()->format('j F Y') }})</h2>
            </div>
 

            <div id="gold_all_detail_table" class="mt-2"></div>

            <p>As you know the value of Gold for all the people around, gold is always the best and most precious metal to invest and to buy. So, it is necessary to know the accurate rates for gold before investing in gold or buying any gold items.</p>

          
            <div class="text-center text-white p-2 bg-bf9109"><h2>Gold Rate Karachi For the Last 30 Days<h2></div>

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
            
             <p class="p-2">Stay active to know the actual gold rates if you are going to buy gold items in Karachi or want to invest in Gold here. Before taking any decision, knowing the gold rate is your right.</p>
            
             <div class="alert alert-warning">
                <p class="mb-0">
                Keep in touch with the website for fundamental concepts behind the gold rate in Karachi. From karats to purity, this portion mentions the important terms that shape the gold market.Keep in touch with the website for fundamental concepts behind the gold rate in Karachi. From karats to purity, this portion mentions the important terms that shape the gold market. <a  href="https://silvergoldrate.pk/gold-rate-in-pakistan">(Website Link)</a>.
                </p>
            </div>
            <h2>Factors Affecting the Gold Rate</h2>
            <p>Several factors such as gold demand, central banks, seasonal changes, economics, market trends and many others can affect the gold rate at any time. Gold rates can change within 24 hours or after several days. You just need to check the rates regularly if you are a gold trader or investor.</p>
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Price Difference in 1 Tola In Other Big Cities</h2>
            </div>

              <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>

            </div>
            
            <p>The price of gold is set by the Sarafa Market Pakistan. The slight difference in price (of few hundred) is due to distance from main market.</p>

            <h2>Main Markets of Gold in Karachi</h2>
            <p>One of the main markets of gold in Karachi is Sarafa Bazaar, also known as Sarafa Market. It is a popular area where there are many gold shops around. You can find many jewelry shops here and you can buy any gold items from here.</p>
            <p>Gold Queen Jewelers, another famous market for gold in Karachi. This place is also best for investing in Gold. </p>
            <p>One more place for jewellery in Karachi is Boat Basin. This place is well known because of the best jewellery here. You can find many jewelry items here or you can invest in gold here.</p>
            <p><strong>Note:</strong> The price of gold is not fixed in Karachi, it is changing daily, time to time. The change is because of various reasons like festivals. Because Pakistani rupees are the cheapest currency ever as compared to other currencies, the gold rate in Karachi is always higher.</p>
            
            <h2>Best Time to Sell or Buy Gold in Karachi</h2>
            <p>If you are planning to buy low and sell high, the annual lowest price of gold mostly occurs around the second week of January. From there, the price often makes a constant rise through to the end of the year, with a summer break in price between April and June.</p>
            <h2>The best time to Invest in Gold or Gold Stocks in Karachi</h2>
            <p>The investment for Gold or Gold stocks depends on the timing. If you are looking that there is decrement in gold rates, then it is the best time to invest in gold or gold stocks. On the other hand, if you feel that there is a constant increase in gold rates, then you should wait for the right time to invest in gold.</p>           
            <h2>What are the things to check while buying Gold?</h2>
            <ul>
                <li>The purity level needs to be checked when buying gold. 24K Gold is pure gold but contains a small number of other metals too.</li>
                <li>The gold rates are changing throughout the whole day and across locations. Like, you need to check the rate/gram of gold in Karachi before buying.</li>
                <li>Buy-back terms should also be considered when buying gold.</li>
                <li>Certification of metal is also an important step to check before investing in Gold.</li>
                <li>Quality and colour of gold that it is yellow, white, or rose-coloured.</li>
            </ul>
            <h2>FAQs</h2>
            <h3>What is today’s gold rate in Karachi? </h3>
            <p>
                    The current gold rate in Karachi today stands at  <strong>PKR {{ $rates['ratePerTola'] }}</strong> for 24 karat per tola, as per the updated Karachi gold market on {{ now()->format('j F Y') }}.
            </p>
            <h3>What is the best time to invest in gold?</h3>
            <p>When the prices go down from average rates, this is the best time for investment.</p>
            <h3>How do you test the gold?</h3>
            <p>By applying the float method, you can test the gold easily. Put your gold in pure water. If the gold sinks, it is real but if it floats above the water, it is not real.</p>
            <h3>Does gold go down in rate ever?</h3>
            <p>Due to some factors like lack of demand, gold can go down. And this is the best time to invest in gold or buy gold items.</p>
            <h3>What is the most trending gold in Karachi nowadays?</h3>
            <p>There is no specific kind of gold that is mostly used but people in jewellery or investment use all kinds of gold.</p>
            <h3>Does Karachi have high rates of gold as compared to other cities in Pakistan?</h3>
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




