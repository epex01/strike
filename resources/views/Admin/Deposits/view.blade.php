@extends('Layouts.master')

@section('title')
    View Deposit
@endsection

@section('content')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Deposit Details</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item">Deposits</li>
                    <li class="breadcrumb-item active">Preview</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
            <div class="container-fluid">
              <div class="user-profile">
               <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="profile-img-style">
                      <div class="row">
                        <div class="col-sm-8">
                            @foreach ($user as $data)
                               <div class="media"><img class="img-thumbnail rounded-circle me-3" src="{{asset('storage/public/images/'.$data->image)}}" alt="Generic placeholder image">  
                            
                            <div class="media-body align-self-center">
                              <h5 class="mt-0 user-name">{{$data->firstname}} {{$data->lastname}}</h5>
                            </div>
                          </div>
                          @endforeach
                        </div>
                        @foreach ($deposit as $data)
                            
                        
                        <div class="col-sm-4 align-self-center">
                          <div class="float-sm-end"><small>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-12 col-xl-6">
                          <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                              
                            <figure itemprop="associatedMedia" itemscope=""><a href="{{asset('storage/public/images/'.$data->image)}}" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="{{asset('storage/public/images/'.$data->image)}}" itemprop="thumbnail" alt="gallery"></a>
                              <figcaption itemprop="caption description">Prof of Payment</figcaption>
                            </figure>
                          </div>
                          <div class="like-comment mt-4 like-comment-sm-mb">
                            <ul class="list-inline">
                              
                            </ul>
                          </div>
                        </div>
                        <div class="col-xl-6">
                        <div class="table-responsive col-12" >
                        <table class="table table-lg" >
                        <thead>
                            <tr>
                            
                            <th scope="col">Amount</th>
                            <td scope="col">{{$data->amount}}</td>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="col">Charge</th>
                            <td scope="col">{{$data->charge}}%</td>
                            
                            </tr>
                            <tr>
                            <th scope="col">Total</th>
                            <td scope="col">{{$data->total}}</td>
                            
                            </tr>
                            <tr>
                            <th scope="col">Trasnsaction ID</th>
                            <td scope="col">{{$data->trx_id}}</td>
                            
                            </tr>
                            
                        </tbody>
                    </table>
                    
                    </div>
                    &nbsp;
                    <br>
                    <div class="btn-group text-center">
                        <a href="{{url('/admin/approvedeposit/'.$data->id)}}" class="btn btn-pill btn-sm btn-info" title="Approve"><i class="fa fa-check"></i></a>
                        &nbsp;
                        <a href="{{url('/admin/rejectdeposit/'.$data->id)}}" class="btn btn-pill btn-sm btn-danger" title="Reject"><i class="fa fa-ban"></i></a>
                        </div>
                        </div>
                        
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="pswp__bg"></div>
                  <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              


              </div>
            </div>
          </div>
</div>
@endsection