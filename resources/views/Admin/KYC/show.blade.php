@extends('Layouts.master')
@section('title')
    View KYC Application
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
                <h5>View KYC</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        Document Type: {{$user->id_type}}
                    </div>
                    <div class="col-12">
                        Name on Document: {{$user->name}}
                    </div>
                    <div class="col-sm-12 col-md-6">
                        Front <br>
                        <a href="{{asset('uploads/kyc/'.$user->front)}}" target="_blank" rel="noopener noreferrer">
                        <img src="{{asset('uploads/kyc/'.$user->front)}}" alt="front" width="200px" height="200px">
                        </a>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        Back <br>
                        <a href="{{asset('uploads/kyc/'.$user->back)}}" target="_blank" rel="noopener noreferrer">
                        <img src="{{asset('uploads/kyc/'.$user->back)}}" alt="back" width="200px" height="200px">
                        </a>

                    </div>
                    <div class="col-12">
                        <form action="{{route('admin.process.kyc', ['id' => $user->id])}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="action"> Action</label>
                                <select name="action" id="action" class="form-control" required>
                                    <option value="">Select Action </option>
                                    <option value="accept"> Accept </option>
                                    <option value="reject"> Reject </option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    </div>
@endsection
