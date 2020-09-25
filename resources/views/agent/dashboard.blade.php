@extends('layouts.agent_dash')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
  @if(session()->get('success'))
   <div class="container-fluid" id="msg" style="margin: 10px;">
         <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                   {{ session()->get('success') }} 
                  </div>
    </div>
    
  @endif
<!-- Main content -->
    <label style="display: none;">{{$get = DB::table('agent')->where('agent_id', Auth::user()->id) ->get()}}</label>
<section class="content">

@if(date("Y-m-d")>$get[0]->membership_end)
    <!-- Small boxes (Stat box) -->
    <div class="callout callout-danger">
        <h4><i class="icon fa fa-ban"></i>  Warning!</h4>

        <p><b>Note:</b> Your Account Validity Has Expired Renew Membership.</p>
      </div>
      <a href="{{url('membershiprenew')}}" class="btn btn-danger">Membership Renew </a>
        <!-- ./col -->
    </div>

@endif
    <!-- /.row -->

</section>
<!-- /.content -->

@endsection