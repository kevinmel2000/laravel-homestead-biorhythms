@extends('layouts.master')

@section('titlePage', 'Resultat del càlcul')

@section('header')

<div style="margin: 3%">
    <h4>Usuari: {{$userName}}</h4>
    <h4>Data de naixement: {{$birthDate}}</h4>
</div>

@endsection

@section('content')
<div style="margin: 3%">
    <p>FÍSIC: {{$physicalPercentage}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$physical}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
<div style="margin: 3%">
    <p>EMOTIU: {{$emotionalPercentage}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$emotional}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
<div style="margin: 3%">
    <p>INTELECTUAL: {{$intellectualPercentage}}%</p>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {{$intellectual}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>

@endsection

@section('footer')

@endsection