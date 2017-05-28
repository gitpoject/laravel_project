@extends('formulaireTemplate')

@section('contenu')
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}

    <!-- <form method="POST" action="http://localhost/laravel5/public/users" accept-charset="UTF-8">
		<label for="nom">Entrez votre nom : </label>
		<input name="nom" type="text" id="nom">
		<input type="submit" value="Envoyer !">
	</form> -->
@endsection
