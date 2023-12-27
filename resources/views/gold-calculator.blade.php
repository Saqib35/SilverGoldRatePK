@extends('layouts.main') @section('css')

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Gold Rate Calculator | SilverGoldRate.PK</title>
<meta name="description" content="Gold Rate Calculator - SilverGoldRate.PK" />
<meta name="robots" content="follow, index" />
<link rel="canonical" href="{{  Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Gold Rate Calculator - SilverGoldRate.PK" />
<meta property="og:description" content="Gold Rate Calculator - SilverGoldRate.PK" />
<meta property="og:url" content="{{ url('/gold-calcultor/') }}" />
<meta property="og:site_name" content="SilverGoldRate.pk" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Gold Rate Calculator - SilverGoldRate.PK" />
<meta name="twitter:description" content="Gold Rate Calculator - SilverGoldRate.PK" />

<!-- <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            { "@type": "Organization", "@id": "{{ url('/#organization') }}", "name": "SilverGoldRate" },
            {
                "@type": "WebSite",
                "@id": "{{ url('/#website') }}",
                "url": "{{ url('/') }}",
                "name": "SilverGoldRate.pk",
                "alternateName": "Gold and Silver Rate in Pakistan",
                "publisher": { "@id": "{{ url('/#organization') }}" },
                "inLanguage": "en-US"
            },
            {
                "@type": "CollectionPage",
                "@id": "{{ url('/gold-calcultor/#webpage') }}",
                "url": "{{ url('/gold-calcultor/') }}",
                "name": "Gold Rate Calculator  - SilverGoldRate.PK",
                "isPartOf": { "@id": "{{ url('/#website') }}" },
                "inLanguage": "en-US"
            }
        ]
    }
</script> -->

@endsection @section('main')
<div class="container mt-3 bg-white p-5">
    <div class="row mb-3">
        <div class="col-12">
            <h1 class="text-center"><strong class="colr">Gold Calculator In Pakistan</strong></h1>
            <p class="mt-3">
                A gold calculator is a valuable asset for those who are looking for gold sales and purchases in various purities and weights. People can check the weigh of their gold in grams, ounces, and other units too. The calculator is
                also used to check the purity of gold in karats. This calculator is also used to check the value of used gold in recent markets. You can use the gold calculator online for your buying and selling at fair rates. It is an
                important tool as people need something actual to check the rates regularly.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="title_color colr">Calculate Gold Rate in Gram</h2>
            <span style="font-weight: normal;">{{ now()->format('d F Y') }} ({{ now()->formatLocalized('%A') }})</span><br />
            <br />
            Type the number of Tola in the text box to calculate today's gold rates in different purity standards. You can easily calculate gold rates by using our Gold conversion tool.
            <p align="center" class="goldratehome">
                <input type="text" id="C_AMOUNT" value="1" size="4" class="inputcalc" title="Quick Converter: Enter amount to convert." onKeyUp="calc();" />
                <span style="color: #2c2c2c; font-weight: bold;"> Gram Gold Rate</span>
            </p>

            <p align="center" style="font-weight: normal; color: #2c2c2c; font-weight: bold;">in different purity</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                        <p class="goldratehome">
                            <b>Rs. <span id="RATE24">18639</span></b>
                        </p>
                        <p>24 Karat Gold Rate</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                        <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="RATE22">17085</span></p>
                        <p>22 Karat Gold Rate</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                        <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="RATE21">16309</span></p>
                        <p>21 Karat Gold Rate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                        <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">
                            <b>Rs. <span id="RATE18">13979</span></b>
                        </p>
                        <p>18 Karat Gold Rate</p>
                    </div>
                </div>
              
            </div>
        </div>
        <!-- second calucltor -->
        <div class="col-12 mt-5">
            <div class="section-top-border">
                <h2 class="title_color">Calculate Gold Rate in Tola</h2>
                <span style="font-weight: normal;">{{ now()->format('d F Y') }} ({{ now()->formatLocalized('%A') }})</span><br />
                <br />

                Type the number of Tola in the text box to calculate today's gold rates in different purity standards. You can easily calculate gold rates using our Gold conversion tool.

                <p align="center" class="goldratehome">
                    <input type="text" id="C_AMOUNT2" value="1" size="4" class="inputcalc" title="Quick Converter: Enter amount to convert." onKeyUp="calc();" />
                    <span style="color: #2c2c2c; font-weight: bold;"> Tola Gold Rate</span>
                </p>
                <p align="center" style="font-weight: normal; color: #2c2c2c; font-weight: bold;">in different purity</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                            <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">
                                <b>Rs. <span id="TOLA24">217400</span></b>
                            </p>
                            <p>24 Karat Gold Rate</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                            <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="TOLA22">199269</span></p>
                            <p>22 Karat Gold Rate</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                            <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="TOLA21">190225</span></p>
                            <p>21 Karat Gold Rate</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                            <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">
                                <b>Rs. <span id="TOLA18">163050</span></b>
                            </p>
                            <p>18 Karat Gold Rate</p>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="section-top-border">
                    <h2 class="title_color">Calculate Gold Rate in Ounce</h2>
                    <span style="font-weight: normal;">{{ now()->format('d F Y') }} ({{ now()->formatLocalized('%A') }})</span><br />
                    <br />
                    Type the number of Ounce in the text box to calculate today's gold rates in different purity standards. You can easily calculate gold rates by using our Gold conversion tool.

                    <p align="center" class="goldratehome">
                        <input type="text" id="C_AMOUNT3" value="1" size="4" class="inputcalc" title="Quick Converter: Enter amount to convert." onKeyUp="calc();" />
                        <span style="color: #2c2c2c; font-weight: bold;"> Ounce Gold Rate</span>
                    </p>
                    <p align="center" style="font-weight: normal; color: #2c2c2c; font-weight: bold;">in different purity</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                                <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">
                                    <b>Rs. <span id="OUNCE24">528410</span></b>
                                </p>
                                <p>24 Karat Gold Rate</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                                <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="OUNCE22">484341</span></p>
                                <p>22 Karat Gold Rate</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                                <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">Rs. <span id="OUNCE21">462359</span></p>
                                <p>21 Karat Gold Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination section-leftright-border text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 2px dashed #2c2c2c; padding: 15px;">
                                <p class="goldratehome" style="color:#2c2c2c; !important;font-weight:bold">
                                    <b>Rs. <span id="OUNCE18">396308</span></b>
                                </p>
                                <p>18 Karat Gold Rate</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('js')

<script>
    function calc() {
        amount = Number(document.getElementById("C_AMOUNT").value);

        rate24 = document.getElementById("RATE24");
        rate22 = document.getElementById("RATE22");
        rate21 = document.getElementById("RATE21");
        rate18 = document.getElementById("RATE18");
        rate16 = document.getElementById("RATE16");
        rate12 = document.getElementById("RATE12");

        rateSpan2 = document.getElementById("RATESPAN2");

        original24 = amount * 18639;
        original22 = amount * 17085;
        original21 = amount * 16309;
        original18 = amount * 13979;
        original16 = amount * 12432;
        original12 = amount * 9320;

        rate24.innerHTML = Math.round(original24 * 10000) / 10000; // round it to 4 digits
        rate22.innerHTML = Math.round(original22 * 10000) / 10000; // round it to 4 digits
        rate21.innerHTML = Math.round(original21 * 10000) / 10000; // round it to 4 digits
        rate18.innerHTML = Math.round(original18 * 10000) / 10000; // round it to 4 digits
        rate16.innerHTML = Math.round(original16 * 10000) / 10000; // round it to 4 digits
        rate12.innerHTML = Math.round(original12 * 10000) / 10000; // round it to 4 digits

        amount2 = Number(document.getElementById("C_AMOUNT2").value);

        tola24 = document.getElementById("TOLA24");
        tola22 = document.getElementById("TOLA22");
        tola21 = document.getElementById("TOLA21");
        tola18 = document.getElementById("TOLA18");
        tola16 = document.getElementById("TOLA16");
        tola12 = document.getElementById("TOLA12");

        t24 = amount2 * 217400;
        t22 = amount2 * 199269;
        t21 = amount2 * 190225;
        t18 = amount2 * 163050;
        t16 = amount2 * 145006;
        t12 = amount2 * 108700;

        tola24.innerHTML = Math.round(t24 * 10000) / 10000; // round it to 4 digits
        tola22.innerHTML = Math.round(t22 * 10000) / 10000; // round it to 4 digits
        tola21.innerHTML = Math.round(t21 * 10000) / 10000; // round it to 4 digits
        tola18.innerHTML = Math.round(t18 * 10000) / 10000; // round it to 4 digits
        tola16.innerHTML = Math.round(t16 * 10000) / 10000; // round it to 4 digits
        tola12.innerHTML = Math.round(t12 * 10000) / 10000; // round it to 4 digits

        amount3 = Number(document.getElementById("C_AMOUNT3").value);

        ounce24 = document.getElementById("OUNCE24");
        ounce22 = document.getElementById("OUNCE22");
        ounce21 = document.getElementById("OUNCE21");
        ounce18 = document.getElementById("OUNCE18");
        ounce16 = document.getElementById("OUNCE16");
        ounce12 = document.getElementById("OUNCE12");

        o24 = amount3 * 528410;
        o22 = amount3 * 484341;
        o21 = amount3 * 462359;
        o18 = amount3 * 396308;
        o16 = amount3 * 352449;
        o12 = amount3 * 264205;

        ounce24.innerHTML = Math.round(o24 * 10000) / 10000; // round it to 4 digits
        ounce22.innerHTML = Math.round(o22 * 10000) / 10000; // round it to 4 digits
        ounce21.innerHTML = Math.round(o21 * 10000) / 10000; // round it to 4 digits
        ounce18.innerHTML = Math.round(o18 * 10000) / 10000; // round it to 4 digits
        ounce16.innerHTML = Math.round(o16 * 10000) / 10000; // round it to 4 digits
        ounce12.innerHTML = Math.round(o12 * 10000) / 10000; // round it to 4 digits
    }
</script>

@endsection
