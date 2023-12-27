@extends('admin.layouts.master')


@section('css')

@endsection


@section('main')

<div id="layout-wrapper">    
    @include ('admin.layouts.sidebar');
    @include ('admin.layouts.topbar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <?php
                $maintitle = "Dashboard ";
                $title = "Welcome !";
                ?>
                @include ('admin.layouts.breadcrumb')
               
              
                <div class="row">
                    <div class="col-12">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Upload Gold Rate</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('panel/admin/edit/home') }}" enctype='multipart/form-data' method="post" id="myForm" class="drozone">
                                 @csrf
                                    
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="kerat24k">24k Rate</label>
                                                <input id="kerat24k" value="{{ $updatedPrice->kerat24k }}" required="" name="kerat24k" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="kerat22k">22k Rate</label>
                                                <input id="kerat22k" value="{{ $updatedPrice->kerat22k }}" required="" name="kerat22k" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="kerat21k">21k Rate</label>
                                                <input id="kerat21k" value="{{ $updatedPrice->kerat21k }}" required="" name="kerat21k" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="kerat20k">20k Rate</label>
                                                <input id="kerat20k" value="{{ $updatedPrice->kerat20k }}" required="" name="kerat20k" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="kerat18k">18k Rate</label>
                                                <input id="kerat18k" value="{{ $updatedPrice->kerat18k }}" required="" name="kerat18k" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="gold_per_ounce_dollar">Gold Per ounce Dollar</label>
                                                <input id="gold_per_ounce_dollar" value="{{ $updatedPrice->gold_per_ounce_dollar }}" required="" name="gold_per_ounce_dollar" type="text" class="form-control">
                                            </div>
                                            
                                        </div>
                                    <br>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="add-category" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end card-->
                    </div>
                </div>




                </div><!-- end row-->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
        @include ('admin.layouts.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
@endsection

@section('js')

@endsection


