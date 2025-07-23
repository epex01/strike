@extends('Layouts.master')
@section('title')
    Change Password
@endsection
@section('content')
<div class="page-body">

    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Password</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Password</li>
              <li class="breadcrumb-item">Change Password</li>
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

                      <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                          <h5>Change Password</h5>
                      </div>

                                @if(session()->has('errors'))
                          <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-down"></i>
                              <ul>
                                  <li> {{ session()->get('errors') }} </li>
                              </ul>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>

                          @endif

                                  @if(session()->has('success'))
                                  <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                                    <p> {{ session()->get('success') }} </p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>


                          @endif
                </div>


            <div class="card-body">
                <form action="{{route('admin.save.password')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="current_password" class="form-label"> Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password" required>
                        @error('current_password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="new_password" class="form-label"> New Password</label>
                        <input type="password" class="form-control" name="password" id="new_password" required>
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="repeat_password" class="form-label"> Repeat Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="repeat_password" required>
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
          </div>
        </div>
        <!-- Zero Configuration  Ends-->
      </div>

    <!-- Container-fluid Ends-->

</div>
@endsection
