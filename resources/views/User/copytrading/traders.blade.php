@extends('Layouts.user')
@section('title', 'Copy Traders')
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

    <div class="row layout-top-spacing">

        <div class="col-12 layout-spacing">
            <section class="pricing-section bg-7 mt-5">
                <div class="pricing pricing--norbu">
                    @forelse ($traders as $data)
                        <div class="pricing__item">
                            <h3 class="pricing__title">{{ $data->name }}

                            </h3>
                            <div class="mx-auto mt-2 mb-2">
                                <img src="{{ asset('storage/' . $data->image) }}" width="100px" height="100px"
                                    alt="bot">
                            </div>

                            <div style="font-size:14px;">{{ $data->description }} </div>
                            <ul class="pricing__feature-list text-center">
                                <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg> {{ $data->response_rate }} % response rate</li>
                                <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg> {{ $data->profit_percentage }}% Profit</li>
                                <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg> ${{ $data->minumum }} Minumnum</li>
                            </ul>
                            <div class="mb-4">
                                <a href="{{ route('previous.trader', ['id' => encrypt($data->id)]) }}"
                                    class="pricing__action mx-auto mb-4 btn-sm">Copy Trader</a>
                            </div>
                        </div>
                    @empty
                        <div id="card_9" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="text-center text-info">No Traders Available</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
            </section>
        </div>

    </div>
@endsection
