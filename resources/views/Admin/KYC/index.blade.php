@extends('Layouts.master')
@section('title')
    KYC
@endsection
@section('content')
    <div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-8">
                    @if (session()->has('success'))
                        <div class="alert alert-primary dark alert-dismissible fade show outline" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('errors'))
                        <div class="alert alert-secondary dark alert-dismissible fade show outline" role="alert">
                            <strong>{{ session()->get('errors') }}</strong>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="col-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">KYC</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>KYC Submitions</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="display" id="basic-2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Document Type</th>
                                <th>Date Submited</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $userdata)
                                <tr>
                                    <td>{{ $userdata->name }}</td>
                                    <td>{{ $userdata->id_type }}</td>
                                    <td>{{ \Carbon\Carbon::parse($userdata->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ $userdata->status }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.view.kyc', ['id' => $userdata->id])}}" class="btn btn-primary btn-block btn-sm text-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="View user"><i
                                                    class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






    </div>
@endsection
