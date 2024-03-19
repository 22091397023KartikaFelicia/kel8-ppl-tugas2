@extends('pegawai.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Pegawai Page</div>
    
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $pegawai->name }}</h5>
            <p class="card-text">Address : {{ $pegawai->address }}</p>
            <p class="card-text">Contact : {{ $pegawai->contact }}</p>
        </div>
    </div>
</div>