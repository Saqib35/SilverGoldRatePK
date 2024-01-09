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
              <h2 class="text-center">Price According to purity ({{ now()->format('j F Y') }})</h2>
            </div>

            <div id="gold_all_detail_table" class="mt-2"></div>

            
            <div class="alert alert-warning">
                <p class="mb-0">
                Keep in touch with the website for fundamental concepts behind the gold rate in Karachi. From karats to purity, this portion mentions the important terms that shape the gold market.Keep in touch with the website for fundamental concepts behind the gold rate in Karachi. From karats to purity, this portion mentions the important terms that shape the gold market. <a  href="https://silvergoldrate.pk/gold-rate-in-pakistan">(Website Link)</a>.
                </p>
            </div>

           
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
            
             <p>Demand, interest rates, state taxes, gold traders, bullion associations, transportation costs, manufacturing costs, and other factors can all influence the price of gold in Karachi.</p>
            

            
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Price Difference in 1 Tola In Other Big Cities</h2>
            </div>

              <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>

            </div>
            
            <p>The price of gold is set by the Sarafa Market Pakistan. The slight difference in price (of few hundred) is due to distance from main market.</p>

            <h2>Main Markets of Gold in Karachi</h2>
            <p>The main gold market in Karachi, Pakistan, is often referred to as "Sarafa Bazaar" or "Sarafa Market." It is a prominent area where numerous jewelry shops and goldsmiths are located. One well-known location within Sarafa Bazaar is "Zainab Market," which is recognized for its concentration of gold and jewelry shops.</p> 
            <p>Gold Queen Jewelers, is also the main market for gold in Karachi. Boat Basin, This area is known for its concentration of jewelry shops, providing a range of options for those looking for gold jewelry.</p>           
            <p>Note: The price of gold is not fixed in Karachi, it is changing daily, time to time. The change is because of various reasons like festivals. Because Pakistani rupees are the cheapest currency ever as compared to other currencies, the gold rate in Karachi is always higher.</p> 
            <h2>Best Time to Sell or Buy Gold in Karachi</h2>
            <p>If you are planning to buy low and sell high, the annual lowest price of gold mostly occurs around the second week of January. From there, the price often makes a constant rise through to the end of the year, with a summer break in price between April and June.</p>
            <h2>Is it better to Invest in Gold or Gold Stocks in Karachi?</h2>
            <p>Investing in physical gold and gold stocks each has its merits. Gold offers a tangible asset, while gold stocks provide a showing to the industry without the need for physical ownership. Consider your tolerance and investment goals before deciding.</p>
           
    
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




