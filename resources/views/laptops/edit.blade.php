@extends('laptops.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Laptop</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('laptop.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('laptop.update',$laptop->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merk</strong>
                <input type="text" name="merk" class="form-control" id="merk" value="{{ $laptop->merk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Processor</strong>
                <input type="text" name="processor" class="form-control" id="processor" value="{{ $laptop->processor }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penyimpanan</strong>
                <input type="text" name="penyimpanan" class="form-control" id="penyimpanan" value="{{ $laptop->penyimpanan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ram</strong>
                <input type="text" name="ram" class="form-control" id="ram" value="{{ $laptop->ram }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
@endsection