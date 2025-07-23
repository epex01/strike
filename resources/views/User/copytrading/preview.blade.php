@extends('Layouts.user')
@section('title', 'Preview')
@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12">

            @if (session()->has('errors'))
                <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4" role="alert"
                    style="border-color: transparent;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg data-dismiss="alert"> ...
                        </svg> </button>
                    <i class="fas fa-warning"> </i>
                    <strong>Warning! {{ session()->get('errors') }} </strong>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert"
                    style="border-color: transparent; background-color:#ffffff;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg
                            data-dismiss="alert"> ... </svg></button>
                    <i class="fas fa-activity"> </i>
                    <strong>Success! {{ session()->get('success') }} </strong>
                </div>
            @endif

        </div>

    </div>

    <div class="row layout-top-spacing justify-content-center">

        <div class="col-sm-12 col-md-8">

            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalCenterTitle">Order Preview </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <br>
            <small class="text-danger">* Your are about to copy {{ $trader->name }}</small>
            <form method="post" enctype="multipart/form-data"
                action="{{ route('purchase.traders', ['id' => encrypt($trader->id)]) }}">
                @csrf

                <div class="modal-body text-left">

                    <input type="hidden" class="form-control" value="{{ __($trx_id) }}" id="trx_id" name="trx_id">

                    <div class="form-group hidden">
                        <div class="input-group mb-5">

                            <input type="hidden" class="form-control" name="roi" id="roi"
                                value="{{ $trader->profit_percentage }}">
                            {{-- <input type="hidden" class="form-control"  name="time_left" id="time_left" value="{{$invest->time_left}}"> --}}
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <label for="amount">Plan: </label>
                        <input type="hidden" class="form-control" placeholder="" name="plan_id" id="Plan_id"
                            value="{{ $trader->id }}">
                    </div>
                    <div class="text-center">
                        <h5>{{ $trader->name }}</span></h5>
                        <h6>Minimum Price: <span class="text-info">${{ $trader->minumum }}</span></h6>
                    </div>
                    <label for="payment_proof"> Amount* </label>
                    <input type="number" class="form-control" min="{{ $trader->minumum }}" name="amount" id="amount"
                        required>

                    <br>


                    <br>

                    <label for="payment_proof"> Method of Payment* </label>
                    <select id="method" name="method" class="form-control" required>
                        <option selected> --Mode of Payment--</option>
                        <option value="bonus"> Bonus Balance - ${{ Auth::user()->bonus }}</option>
                        <option value="balance"> Deposit Balance - ${{ Auth::user()->rbalance }}
                        <option value="profit"> Profit Balance - ${{ Auth::user()->profit }}
                        </option>
                    </select>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                        Cancel </button>
                    <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
