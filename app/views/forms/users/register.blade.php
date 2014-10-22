{{ Form::open(['route' => 'store']) }}
    <div>
        {{ Form::label('fullname', 'Nom complet') }}
        {{ Form::text('fullname') }}
        {{ $errors->first('fullname', '<span class="error alert alert-danger">:message</span>') }}
    </div>
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
        {{ Form::label('password_confirmation', 'Confirmation du mot de passe') }}
        {{ Form::password('password_confirmation') }}
    </div>
    <div>
        {{ Form::submit('S\'enregistrer') }}
    </div>
{{ Form::close() }}
