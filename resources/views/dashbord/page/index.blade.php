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
      <div class="card-title p-4"><h4 class="badge badge-primary">Boite de reception </h4>  </div>
        <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>    
                                <th>Email</th>
                                <th>Téléphone<th>
                                <th>Subjet</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $row)
                             <tr>
                                 <td>{{ $row->id }}</td>
                                 <td>{{ $row->name }}</td>
                                 <td>{{ $row->email }}</td>
                                 <td>{{ $row->phone }}</td>
                                 <td>{{ $row->subject }}</td>
                                 <td>{{ $row->message }}</td>
                             </tr>
                         @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>
                            <!-- /# card -->
 
    </div>
   </div>

</div>
@endsection