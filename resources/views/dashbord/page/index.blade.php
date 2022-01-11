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
     @if(session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>{{session('delete')}}</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>
    @endif
      <div class="card">
      <div class="card-title p-4 bg-primary text-white">Boite de reception <i class="ti-book"></i>  </div>
        <div class="card-body">

                <div class="table-responsive">
                    <table class="table striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>    
                                <th>Email</th>
                                <th>Téléphone<th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @php
                                 $i = 1;
                             @endphp
                        @foreach ($contacts as $row)
                             <tr class="@if($row->status== 1)
                                          bg-lu
                                        @endif">
                                 <td>{{ $i++ }}</td>
                                 <td>{{ $row->name }}</td>
                                 <td>{{ $row->email }}</td>
                                 <td>{{ $row->phone }}</td>
                                 <td>{{ $row->subject }}</td>
                                 <td> <a href="{{ url('email-details/'.$row->id) }}" class="btn btn-info"> <i class="ti-eye"></i> </a></td>
                                 <td><a href="{{ url('delete/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('Voulez-vous suprimer ?')"> <i class="ti-trash"></i> </a></td>
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