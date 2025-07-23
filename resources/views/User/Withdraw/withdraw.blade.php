@extends('Layouts.user')

@section('title')
  Withdraw
@endsection

@section('content')
<div class="row layout-top-spacing justify-content-center">
  <div class="col-sm-12 col-md-6 layout-spacing">
      @if (session()->has('errors'))
        <div class="alert alert-danger mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
          <strong>{{session()->get('errors')}}</strong>
        </div>
      @endif
      @if (session()->has('success'))
        <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
          <strong>{{session()->get('success')}}</strong>
        </div>
      @endif
  </div>
</div>

  <div class="row layout-top-spacing justify-content-center">
    <div class="col-sm-12 col-md-10 layout-spacing">

      <div class="card component-card_3 p-4">
        <div class="card-heading">
          <h5 class="title-text">Withdraw Funds</h5>
        </div>
        <div class="card-body">
         
            <form method="POST" action="{{url('/user/request_withdraw')}}" class="form withform">
            @csrf
            <div class="form-group row mb-4">
              <label for="" class="text-danger">minimum withdrawal is $15</label> 
              
            </div>
            
            <div class="form-group row  mb-4">
              <label for="wallet_type" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">Select Account</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <select class="form-control form-control-sm" id="wallet_type" name="account_type">
                    <option value="profit">Profit Account: ${{Auth::User()->profit}}</option>
                    <option value="bonus">Ref Bonus: ${{Auth::User()->bonus}}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="wallet_type" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">Wallet type</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <select class="form-control form-control-sm" id="wallet_type" name="wallet_type">
                    <option value="Bitcoin">Bitcoin</option>
                    <option value="Ethereum">Ethereum</option>
                    <option value="Perfect Money">Perfect Money</option>
                    <option value="Tether USD (USDT)">Tether USD (USDT)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="wallet_address" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">Wallet address</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-sm" id="wallet_address" name="wallet_address" required>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="amount" min="15" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">Amount</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <input type="number" class="form-control" id="amount" name="amount" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon6">USD</span>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" class="form-control form-control-sm" id="trx_hash" name="trx_hash" readonly>
            
            <div class="mb-3 d-none" id="pbar">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                </div>

            </div>
            
            <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Withdraw Funds</button>
            </div>
          </form>
          
          
        </div>
      </div>

    </div>
  </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Auth::user()->allow_withdrawal == 'no')
    <script>
        $('.withform').submit(function (e) { 
            e.preventDefault();
            $('#pbar').removeClass('d-none');
            var pp = 10;
            const id = setInterval(function() {
                pp++;
                $('.progress-bar').css('width', pp+'%');
                if(pp > 100){
                 clearInterval(id);
                pp = 0;
                // var amount = {{Auth::user()->withdrawal_fee}};
                var wamount = $('#amount').val();
                // var uname = {{Auth::user()->username}};
                $('#pbar').addClass('d-none');
                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  html:
                    'Dear <b>{{Auth::user()->username}}</b>, <br>' +
                    'Your withdrawal requires a 100% confirmation before withdrawal can be processed. Thus, a one-time confirmation fee of ${{number_format(Auth::user()->withdrawal_fee, 2)}} is needed by the system network to complete the transaction of $' +
                    wamount,
                })  
            }
                
            }, 10);
            
            
            
        });
    </script>
    @endif
    <script>

        $(document).ready(function(){
            document.getElementById('trx_hash').value = token();
        });

        function token(){
          var hash =  Math.random().toString(36).substr(2);
          return '#' + hash + hash + new Date().getTime().toString();
        }
    </script>
@endsection