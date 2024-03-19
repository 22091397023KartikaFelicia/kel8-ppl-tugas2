@extends('pegawai.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Pegawai</div>
    
    <div class="card-body">
    <form action="{{ url('pegawai/' .$pegawai->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pegawai->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$pegawai->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$pegawai->address}}" class="form-control"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" value="{{$pegawai->contact}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </div>
</div>

@stop