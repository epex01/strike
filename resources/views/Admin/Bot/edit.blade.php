@extends('Layouts.master')
@section('title')
    Edit Bot
@endsection
@section('content')
<div class="page-body">

    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Edit Bot</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Bots</li>
              <li class="breadcrumb-item">Edit</li>
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
                          <h5>{{$bot->name}}</h5>
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

                          </div>
                          @endif
                </div>
            </div>

            <div class="card-body">
                <form class="form theme-form" enctype="multipart/form-data" action="{{route('admin.bot.update', ['id' => encrypt($bot->id)])}}" method="POST">
                    @method('put')
                      @csrf
                           <div class="mb-3">
                             <label class="form-label">Bot Name</label>
                             <div class="input-group">
                               <input class="form-control" type="text" placeholder="Enter Plan Name" id="name" name="name" value="{{ $bot->name }}" required>
                             </div>
                           </div>

                           <div class="mb-3">
                             <label class="form-label">Amount</label>
                             <div class="input-group">
                               <input class="form-control" id="min" type="text" value="{{ $bot->amount }}" name="amount" required><span class="input-group-text">USD</span>
                             </div>
                           </div>


                           <div class="mb-3">
                             <label class="form-label" for="duration">Duration</label>
                             <select class="form-control" id="duration" name="duration" required>
                                 <option selected > {{ $bot->duration }} </option>
                                 <option> -- Select Duration -- </option>
                                 <option value="1"> Daily </option>
                                 <option value="7"> Weekly </option>
                                 <option value="30"> 1 Month </option>
                                 <option value="90"> 3 Months </option>
                                 <option value="180"> 6 Months </option>
                                 <option value="360"> 1 Year </option>
                             </select>
                           </div>

                           <div class="mb-3">
                             <label class="form-label">profit</label>
                             <div class="input-group">
                               <input class="form-control" value="{{ $bot->profit }}" id="roi" type="text" name="profit" required><span class="input-group-text">%</span>
                             </div>
                           </div>

                           <div class="mb-3">
                            <label class="form-label" for="duration">Status</label>
                            <select class="form-control" id="duration" name="status" required>
                                <option selected > {{ $bot->status }} </option>
                                <option> -- Select Duration -- </option>
                                <option value="active"> Active </option>
                                <option value="inactive"> Inactive </option>

                            </select>
                          </div>


                       <div class="modal-footer">
                         <a class="btn btn-danger" href="#deleteModalCenter" data-bs-toggle="modal" data-bs-target="#deleteModalCenter">Delete</a>
                         <button class="btn btn-primary" type="submit">Update</button>
                       </div>

                     </form>
            </div>
          </div>
        </div>
        <!-- Zero Configuration  Ends-->
      </div>

    <!-- Container-fluid Ends-->

    <!-- Plan Delete modal-->
   <div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete {{ $bot->name }}  </h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="form theme-form" enctype="multipart/form-data" action="{{route('admin.bot.delete', ['id' => encrypt($bot->id)])}}" method="POST">
           @csrf

            <div class="modal-body">

             <h6> Are you sure you want to delete ,<span class="text-warning">  {{$bot->name }} </span> </h6>

            </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Delete</button>
            </div>

          </form>


      </div>
    </div>
  </div>
<!-- Plan Delete modal end-->


</div>
@endsection
