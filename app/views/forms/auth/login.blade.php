{{ Form::open(['route' => 'doLogin']) }}
    <div>
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email') }}
        {{ $errors->first('email', '<span class="error alert alert-danger">:message</span>') }}
    </div>
    <div>
        {{ Form::label('password', 'Mot de passe') }}
        {{ Form::password('password') }}
        {{ $errors->first('password', '<span class="error alert alert-danger">:message</span>') }}
    </div>
    <div>
        {{ Form::submit('Connexion') }}
    </div>
{{ Form::close() }}
