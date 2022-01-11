@extends('dashbord.dasbordHome')
@section('admin_content')
 

<div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
           <h4>Salut, welcome back!</h4>
            <span class="ml-1">Email</span>
          </div>
       </div>
       <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Boite de reception</a></li>
            </ol>
        </div>
    </div>

<!-- row -->
   <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-header bg-primary text-white">
               Boite de méssage <i class="ti-book"></i>
             </div>

             <div class="container">
            @if(Session::has('success'))

               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{Session::get('success')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
               </div>
          

            @endif
       </div>

        <!-- Message de succes en cas d'envois  -->
        <form action="{{ url('repondre/{id}') }}"  class="p-4" method="post">
           @csrf

           <div class="row">
             <div class="col-md-5 form-group mt-3 mt-md-0">
               <input type="email" class="form-control bg-light" name="email" value="{{ $contact->email }}" disabled> 
             </div>
             <div class="col-md-7 form-group mt-3 mt-md-0">
               <input type="text" class="form-control bg-light" name="subject" value="{{ $contact->subject }}" disabled> 
             </div>

           </div>

          <div class="form-group mt-3">
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="5" placeholder="Votre message complet"></textarea>
            @if ($errors->has('message'))
                <div class="text-danger">
                    {{ $errors->first('message') }}
                </div>
              @endif
          </div>

          <div class="text-center"><button type="submit" name="send" class="btn btn-primary fw-bold mt-2"> <i class="ti-check"></i> Envoyer le massage</button></div>
        </form>
           </div>
      </div>
   </div>

</div>
@endsection