@extends('layouts.new') @section('content')
<style type="text/css">
    .image-upload > input {
        display: none;
    }
</style>
<div class="container">
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Deposit</h3>
                </div>

                <div style="padding: 10px;">
                    <a href="#" class="btn btn-primary">Crypto</a>
                    <a href="{{url('card')}}" class="btn btn-info">visa/master</a>
                    <a href="#" class="btn btn-warning">Poli</a>
                    <a href="#" class="btn btn-danger">western</a>
                    <a href="#" class="btn btn-success">union</a>
                    <a href="#" class="btn btn-primary">bank deposit</a>
                </div>
            </div>
        </div>

    </div>
</section></div>
        @endsection
