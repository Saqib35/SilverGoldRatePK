@extends('layouts.main')

@section('css')

  
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $GoldRateByDay->meta_title;  }}</title>
        <meta name="description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="{{  Request::fullUrl() }}"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $GoldRateByDay->meta_title;  }}" />
        <meta property="og:description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta property="og:url" content="{{  Request::fullUrl() }}" />
        <meta property="og:site_name" content="Gold and Silver Rate in Pakistan" />
        <meta property="article:author" content="#" />
        <meta property="article:section" content="Gold and Silver Rates" />
        <meta property="og:updated_time" content="{{ $GoldRateByDay->updated_at;  }}" />
        <meta property="og:image" content="{{ asset($GoldRateByDay->img) }}" />
        <meta property="og:image:secure_url" content="{{ asset($GoldRateByDay->img) }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:alt" content="gold rate In Pakistan" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="article:published_time" content="{{ $GoldRateByDay->created_at;  }}" />
        <meta property="article:modified_time" content="{{ $GoldRateByDay->updated_at;  }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $GoldRateByDay->meta_title;  }}" />
        <meta name="twitter:description" content="{{ $GoldRateByDay->meta_description;  }}" />
        <meta name="twitter:image" content="{{ asset($GoldRateByDay->img) }}" />
        <meta name="twitter:label1" content="Written by" />
        <meta name="twitter:data1" content="Staff" />
        <meta name="twitter:label2" content="Time to read" />
        <meta name="twitter:data2" content="1 minute" />


@endsection

@section('main')
  


 <!-- Main Content -->
<div class="container mt-3 bg-white">
    <div class="row">
        <div class="col-md-9" style="border-right: 5px solid #e7ecef;">
            
            <div style="border-bottom: 10px solid #e7ecef;" class="mt-5">
                <div class="text-center mt-5">
                    <h1 class="h1-size">{{ $GoldRateByDay->title;  }}</h1>
                </div>
                <hr class="first" />

                <div class="updatSetting">
                    <hr />
                    By Staff ⏰ Updated <strong>{{ \Carbon\Carbon::parse($GoldRateByDay->updated_at)->format('F j, Y') }}</strong>
                    <hr />
                </div>

                <div class="updateSetting pt-3">
                    <div>
                        <img src="{{ asset($GoldRateByDay->img) }}" alt="{{ $GoldRateByDay->alt_tag }}" class="img-fluid" />
                        <p class="mt-4">{!! $GoldRateByDay->details;  !!} </p>
                       
                    </div>
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
    var contentSet = false;

    function setTableContent() {
        if (contentSet) {
           
            return;
        }

        var table_Second_Table_24k_And_22k = {!! json_encode($table_Second_Table_24k_And_22k) !!};
        var goldDetailContainer = document.getElementById('table_Second_Table_24k_And_22k1');

        if (goldDetailContainer) {
            goldDetailContainer.innerHTML = table_Second_Table_24k_And_22k;
            contentSet = true; 
        } else {
            setTimeout(setTableContent, 1000); 
        }
    }

    document.addEventListener('DOMContentLoaded', setTableContent);
</script>


@endsection




