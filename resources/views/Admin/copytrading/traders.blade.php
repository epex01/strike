@extends('Layouts.master')
@section('title', 'Traders')
@section('content')
    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Traders</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Traders</li>
                            <li class="breadcrumb-item">All</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12 col-md-12 col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                                    <h5>Traders</h5>
                                </div>
                                <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                                    <a href="#exampleModalCenter" class="btn btn-pill btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter">Add New</a>
                                </div>

                                @if (session()->has('errors'))
                                    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i
                                            data-feather="thumbs-down"></i>
                                        <ul>
                                            <li> {{ session()->get('errors') }} </li>
                                        </ul>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i
                                            data-feather="thumbs-up"></i>
                                        <p> {{ session()->get('success') }} </p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Profit Percentage</th>
                                        <th>Response Rate</th>
                                        <th>Trailer</th>
                                        <th>Trade Status</th>
                                        <th>Created At </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($traders as $logs)
                                        <tr>
                                            <td>{{ $logs->name }}</td>
                                            <td>{{ $logs->description }}</td>
                                            <td><img src="{{ asset('storage/' . $logs->image) }}" alt="image"
                                                    style="width: 50px; height: 50px;"></td>
                                            <td>{{ $logs->profit_percentage }}%</td>
                                            <td>{{ $logs->response_rate }}%</td>
                                            <td>{{ $logs->trailer }}</td>
                                            <td>
                                                {{ $logs->status }}
                                            </td>
                                            <td>{{ $logs->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="btn-group gap-1">
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#profit{{ $logs->id }}">Update Profit
                                                    </button>
                                                    @if ($logs->status == 'active')
                                                         <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter{{ $logs->id }}">Deactivate
                                                            Trade</button>
                                                    @else
                                                        <a href="{{ route('admin.activateTrade', ['id' => encrypt($logs->id)]) }}"
                                                            class="btn btn-primary btn-sm">Activate Trade</a>
                                                    @endif
                                                </div>

                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModalCenter{{ $logs->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenter{{ $logs->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Close Trade </h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form class="form theme-form" enctype="multipart/form-data"
                                                        action="{{ route('admin.deactivateTrade', ['id' => encrypt($logs->id)]) }}"
                                                        method="GET">
                                                        @csrf

                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" id="trade_outcome">Close trade
                                                                        as:</label>
                                                                    <select name="trade_outcome" id="trade_outcome"
                                                                        class="form-select">
                                                                        <option value="win">Win</option>
                                                                        <option value="loss">Loss</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal fade" id="profit{{ $logs->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenter{{ $logs->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Profit Percentage </h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form class="form theme-form" enctype="multipart/form-data"
                                                        action="{{ route('admin.updateTrade', ['id' => encrypt($logs->id)]) }}"
                                                        method="GET">
                                                        @csrf

                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label text-start"
                                                                        id="profit_percentage">Profit
                                                                        Percentage</label>
                                                                    <input type="number" name="profit_percentage"
                                                                        id="profit_percentage"
                                                                        value="{{ $logs->profit_percentage }}"
                                                                        class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label text-start"
                                                                        id="minimum">Minimum</label>
                                                                    <input type="number" name="minimum" id="minimum"
                                                                        value="{{ $logs->minumum }}" class="form-control"
                                                                        required>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <td class="col" colspan="9"> Sorry You Have No Traders </td>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>

        <!-- Container-fluid Ends-->

    </div>

    <!-- Plan Settings modal-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Trader </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form theme-form" enctype="multipart/form-data" action="{{ route('admin.save.trader') }}"
                    method="POST">
                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Trader Name</label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter Trader Name" id="name"
                                    name="name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <div class="input-group">
                                <textarea name="description" class="form-control" id="description" placeholder="Enter Trader's Description"></textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Minimum Investment</label>
                            <div class="input-group">
                                <input class="form-control" type="number" placeholder="100" id="profit_percentage"
                                    name="minimum" min="1" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Response Rate</label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter Response Rate"
                                    id="response_rate" name="response_rate" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trailer</label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter Trailer" id="trailer"
                                    name="trailer">
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <div class="input-group">
                                <input class="form-control" id="min" type="text" placeholder="0.00"
                                    name="amount" required><span class="input-group-text">USD</span>
                            </div>
                        </div> --}}



                        {{-- <div class="mb-3">
                            <label class="form-label" for="duration">Duration</label>
                            <select class="form-control" id="duration" name="duration">
                                <option selected> --Select Duration-- </option>
                                <option value="1"> Daily </option>
                                <option value="7"> Weekly </option>
                                <option value="30"> 1 Month </option>
                                <option value="90"> 3 Months </option>
                                <option value="180"> 6 Months </option>
                                <option value="360"> 1 Year </option>
                            </select>
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label">Profit Percentage</label>
                            <div class="input-group">
                                <input class="form-control" id="roi" type="text" placeholder="0.00"
                                    name="profit_percentage" required><span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Traider's Image</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    <!-- Plan Settings modal end-->
@endsection
