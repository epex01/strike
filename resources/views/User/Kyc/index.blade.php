@extends('Layouts.user')
@section('title')
    KYC
@endsection
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12">

        @if(session()->has('errors'))

              <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4" role="alert" style="border-color: transparent;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg> </button>
                <i class="fas fa-warning"> </i>
                <strong>Warning!  {{ session()->get('errors') }} </strong>
              </div>

        @endif

        @if(session()->has('success'))

               <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert" style="border-color: transparent; background-color:#ffffff;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg></button>
                  <i class="fas fa-activity"> </i>
                  <strong>Success!  {{ session()->get('success') }} </strong>
              </div>

        @endif

      </div>

  </div>

  <div id="card_9" class="col-lg-8 col-xl-8 col-md-10 col-10 layout-spacing mx-auto">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 class="text-center" style="text-transform: uppercase;"> <span class="text-primary"> KYC Status : {{Auth::user()->kyc_status}} </span> </h4>
                    @if (Auth::user()->kyc_status == 'pending')
                      <small class="text-warning"> You submission is still under review </small>
                    @elseif (Auth::user()->kyc_status == 'rejected')
                    <small class="text-danger"> You submission was rejected </small>
                    @elseif (Auth::user()->kyc_status == 'approved')
                    <small class="text-success"> You submission has been approved </small>
                    @else
                    <small class="text-warning"> Please submit your KYC info for review </small>
                    @endif

                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">

            <hr style="background-color:#2196F3; height:1px; width:100%;"/>

            <div class="card component-card_9">
              <div class="text-center">

              </div>
                <div class="card-body">

                      <form method="post" enctype="multipart/form-data"  action="{{route('user.submit.kyc')}}">
                          @csrf

                                <div class="form-group mb-3">
                                    <label for="document_type">Document Type:</label>
                                    <select name="document_type" id="document_type" class="form-control" required @if (Auth::user()->kyc_status == 'pending' || Auth::user()->kyc_status == 'approved') disabled @endif>
                                        <option value="">Select Document Type</option>
                                        <option value="National ID"> National ID</option>
                                        <option value="Drivers License">Drivers License</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="name"> Name On Document:</label>
                                    <input type="text" name="name" id="name" class="form-control" required @if (Auth::user()->kyc_status == 'pending' || Auth::user()->kyc_status == 'approved') readonly @endif>
                                </div>

                                <div class="form-group mb-3">
                                  <label for="front">Front: </label>
                                  <input type="file" class="form-control custom-file" name="front" id="front" required @if (Auth::user()->kyc_status == 'pending' || Auth::user()->kyc_status == 'approved') disabled @endif>
                                </div>

                                <div class="form-group mb-3">
                                  <label for="back">Back: </label>
                                  <input type="file" class="form-control custom-file" name="back" id="back" required @if (Auth::user()->kyc_status == 'pending' || Auth::user()->kyc_status == 'approved') disabled @endif>
                                </div>

                             <br>

                              <div class="text-center">
                                  <button type="submit" class="btn btn-rounded btn-primary" @if (Auth::user()->kyc_status == 'pending' || Auth::user()->kyc_status == 'approved') disabled @endif>Submit </button>
                              </div>

                              <br>
                          </form>

                </div>
            </div>

        </div>
    </div>
  </div>
@endsection
