@extends('layouts.master')

@section('titlePage', 'Calcula el teu biorritme')

@section('header')
<div>
    
    <blockquote class="blockquote text-center">
        <p>Que són els Biorritmes?</p>
        <p>Els biorritmes són cicles diaris i recurrents de fenòmens fisiològics que reflecteixen 
        les actituds de les persones, sentiments o estats d'ànim.</p>
        <p>Aquesta teoria la va iniciar el metge alemany Wilhem Fliess després de 
        recopilar dades de personals com el nombre de dies viscuts, cicles de malalties, 
        periodicitat d'accidents, etc. Posteriorment seus continuadors van destacar que 
        un nombre important de morts es produïen quan els tres cicles, de 23, 28 i 33 dies, 
        coincidien en un dia crític. D'aquesta manera van determinar que hi havia una propensió 
        als accidents o malalties major en alguns dies determinats.</p>
        <footer class="blockquote-footer">biorritmes.norden</cite></footer>
    </blockquote>
</div>

<br/>

@endsection

@section('content')

<form action="store" method="get">
    <div class="form-group">
        <label for="userName">Nom d'usuari</label>
        <input type="text" class="form-control" id="userName" name="userName">
    </div>
    <div class="form-group">
        <label for="birthDate">Data de naixement</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate">
    </div>
    <button type="submit" class="btn btn-outline-primary">Calcula el teu biorritme</button>
</form>

@endsection

@section('footer')

@endsection