@extends('laptops.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Laptop</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('laptop.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merk:</strong>
                {{ $laptop->merk }}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prosesor:</strong>
            {{ $laptop->processor }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Penyimpanan:</strong>
            {{ $laptop->penyimpanan }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ram:</strong>
            {{ $laptop->ram }}
        </div>
    </div>
</div>

@endsection