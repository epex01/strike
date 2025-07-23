@extends('Layouts.user')
@section('title', 'My Trades')
@section('content')
    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">



            @if (session()->has('success'))
                <div class="alert alert-primary mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <strong>{{ session()->get('success') }}</strong>
                </div>
            @endif

            @if (session()->has('errors'))
                <div class="alert alert-danger mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <strong>{{ session()->get('errors') }}</strong>
                </div>
            @endif




            <div class="widget-content widget-content-area br-6">
                <table id="zero-config" class="table dt-table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Trader Name</th>
                            <th>Amount</th>
                            <th>Profit</th>
                            <th>Trade Status</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trades as $data)
                            <tr>
                                <td><span class="text-info" style="text-transform: uppercase;">
                                        {{ $data->trader->name }}</span></td>


                                <td class="col">$ {{ $data->amount }} </td>

                                <td class="col">$ {{ number_format($data->amount, 2) }} </td>
                                
                                <td class="col">
                                    @if ($data->status == 'active')
                                        @if ($data->profit > 0)
                                            <span
                                                class="text-success">+${{ number_format($data->amount * ($data->profit_margin / 100), 2) }}</span>
                                        @else
                                            <span
                                                class="text-danger">-${{ number_format(abs($data->amount * ($data->profit_margin / 100)), 2) }}</span>
                                        @endif
                                    @else
                                        @if ($data->profit > 0)
                                            <span class="text-success">+${{ number_format($data->profit, 2) }}</span>
                                        @else
                                            <span class="text-danger">-${{ number_format(abs($data->profit), 2) }}</span>
                                        @endif
                                    @endif
                                </td>
                                <td class="col">
                                    @if ($data->profit > 0)
                                        <span class="badge badge-success">wining</span>
                                    @else
                                        <span class="badge badge-danger">losing</span>
                                    @endif
                                </td>
                                
                                <td>
                                    @if ($data->status == 'active')
                                        <span class="badge badge-primary">Running</span>
                                    @elseif ($data->status == 'win')
                                        <span class="badge badge-success">Won</span>
                                    @elseif ($data->status == 'loss')
                                        <span class="badge badge-warning">Lost</span>
                                    @else
                                        <span class="badge badge-danger">Canceled</span>
                                    @endif
                                </td>
                                <td class="col">
                                    @if ($data->status == 'active')
                                        <a href="{{ route('close.trade', ['id' => encrypt($data->id)]) }}"
                                            class="btn btn-danger btn-sm" style="white-space: nowrap;">Close
                                            Trade</a>
                                    @else
                                        <div class="text-center">-</div>
                                    @endif
                                </td>




                            </tr>

                        @empty
                            <td class="col" colspan="7"> You are not copying any traders </td>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
