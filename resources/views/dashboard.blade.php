@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Welcome to the Room Reservation System</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-bed"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Avalaible Rooms</span>
            <span class="info-box-number text-right">
             
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-bed"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Rooms not Avalaibles</span>
            <span class="info-box-number text-right">
              
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-suitcase"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Actives Trips</span>
            <span class="info-box-number text-right">
               
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-suitcase"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Inactives Trips</span>
            <span class="info-box-number text-right">
                
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-secondary elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Pending Reservations</span>
            <span class="info-box-number text-right">
               
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Confirmed Reservations</span>
            <span class="info-box-number text-right">
               
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Canceled Reservations </span>
            <span class="info-box-number text-right">
               
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>       
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
