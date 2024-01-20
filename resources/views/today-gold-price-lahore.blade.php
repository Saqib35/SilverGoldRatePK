@extends('layouts.main')

@section('css')

   
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gold Rate in Lahore Today – {{ now()->format('d F Y') }}</title>
        <meta name="description" content="1 tola gold rate in Lahore today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Gold Rate in Lahore Today – {{ now()->format('d F Y') }}" />
        <meta property="og:description" content="1 tola gold rate in Lahore today, {{ now()->format('d F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Lahore" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta property="og:image" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:secure_url" content="{{  asset($HomePageGoldRate->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate in Lahore today" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{  $HomePageGoldRate->created_at }}" />
        <meta property="article:modified_time" content="{{  $HomePageGoldRate->updated_at }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gold Rate in Lahore Today – {{ now()->format('j F Y') }}" />
        <meta name="twitter:description" content="1 tola gold rate in Lahore today, {{ now()->format('j F Y') }}, stands at Rs. {{ $rates['ratePerTola'] }} per tola for 24-karat gold, and Rs. {{ $rates['ratePer10Grams'] }} for 10 grams." />
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
                <h1 class="h1-size">Gold Rate in Lahore Today – {{ now()->format('j F Y') }}</h1>
            </div>
            <hr class="first" />
            <div>
            <div class="updatSetting">
            <hr />
              By Staff ⏰ Updated <strong> {{ now()->format('j F Y') }}</strong>
            <hr />

            

            <div>
                <p class="mb-0">
                    Today, {{ now()->format('jS F Y') }}, the price of  <strong class="gold-rate">24 karat is Rs {{  $rates['ratePerTola'] }}</strong>, and for 10 grams, the price is <strong class="gold-rate">Rs {{  $rates['ratePer10Grams'] }}</strong>, and for 1 gram, the price is <strong class="gold-rate">Rs {{  $rates['ratePerGram'] }}</strong>. 
                </p>
            </div>
             <br>
          
            <div class="bg-bf9109 text-white p-2">
              <h2 class="text-center">Current Gold Price In Lahore Today ({{ now()->format('j F Y') }})</h2>
            </div>

            <div id="gold_all_detail_table" class="mt-2"></div>


            
            <div class="alert alert-warning">
                <p class="mb-0">
                    Please Note: All these Rates Mentioned Here are Just to Get an Idea of what could be the Price in Bullion Markets. Please Visit Your City's Gold Market for the Actual Gold Rate.
                </p>
            </div>

            <h2>Price difference today and yesterday.</h2>
              <p>There is no major fluctuation in the price of today and yesterday. If we consider the last 30 days, then we find an increase in price.</p>

            <div class="text-center text-white p-2 bg-bf9109"><h2>Gold Rate In Lahore For the Last 30 Days<h2></div>

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
                                    <td  class="text-center"><a  href="https://silvergoldrate.pk/{{ $GoldRateByDay->slug }}">{{ \Carbon\Carbon::parse($GoldRateByDay->created_at)->subDay()->format('j M Y') }}</a></td>
                                    <td  class="text-center">{{  $GoldRateByDay->First_rate }}</td>
                                    <td  class="text-center">{{  $GoldRateByDay->Second_rate }}</td>
                                </tr>
                                
                            @endif

                        @endforeach
                    </tbody>
                </table>
                <div class="bg-bf9109 text-white p-2">
                   <h2 class="text-center">Price Difference In Other Cities</h2>
                </div>
                <div id="table_Second_Table_24k_And_22k" class="mt-2"></div>
                <p>The price of gold is set by the Sarafa Market Pakistan. The slight difference in price (of few hundred) is due to distance from main market.</p>
            <h2>Brief information about Lahore.</h2>
            <p>Lahore is located in north eastern region of Punjab.It is Pakistan s major industrial hub. It has historical background too.people off different regions come here to reside and to work.thats why it has healthy culture and tradition.it has major bazar like Anaarkali market Ichhra Bazar Kashmiri bazar etc .Gold Palace Al Raheem Jewellarsand Sharif Jewellers are Lahore s major gold merchants.</p>
            <h2>Conclusion.</h2>
            <p>To get latest price of gold you should visit your nearby sarafa market before making any deal or purchase so you may not find any lose.The rates mentioned above are according to Pakistan sarafa market .there is up and down of price after every few minutes so we update prices continuously.User can get fresh 
                updates by visiting our website <a  href="https://silvergoldrate.pk/gold-rate-in-pakistan">link</a></p>
                <h2>
                   <strong><u>FAQs:</u></strong>
                </h2>

                <h3>
                   <strong>1.What is the price of 1 tola gold in Lahore?</strong>
                </h3>

                <p>
                    The current gold rate in Lahore today stands at  <strong>PKR {{ $rates['ratePerTola'] }}</strong> for 24 karat per tola, as per the updated Lahore gold market on {{ now()->format('j F Y') }}.
                </p>

                <h3>
                    <strong>2. What is 22 carat gold rate in Lahore today?</strong>
                </h3>   

                <p>
                    The current 22-carat gold rate in Lahore stands at   <strong>PKR {{ $rates22k['ratePerGram'] }}</strong>  per 10 grams as of {{ now()->format('j F Y') }}.
                </p>
       
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




