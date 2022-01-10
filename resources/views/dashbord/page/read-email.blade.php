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
               Boite de messagerie detaillée
             </div>
             <div class="card-body">
               <h5 class="card-title">{{ $contact->subject }}</h5>
               <p>
                   <strong>{{ $contact->name }}</strong> <br>
               </p>
               <p class="card-text">
                 {{ $contact->message }}
                 <br>
                 <strong>Tel:</strong> {{ $contact->phone }}
               </p>
              <p>
              {{ $contact->created_at }} 
              </p>
                 <a href="{{ url('repondre-mail/'.$contact->id) }}" class="btn btn-primary fw-bold px-5">Repondre</a>
             </div>
           </div>
      </div>
   </div>

</div>
@endsection