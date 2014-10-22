{{ Form::open(['route' => 'storeTask']) }}
    <tr>
        <td>
            {{ Form::text('title', null, ['placeholder' => 'Titre']) }}
            {{ $errors->first('title', '<span class="error alert alert-danger">:message</span>') }}
        </td>
        <td>
            {{ Form::text('body', null, ['placeholder' => 'Description']) }}
        </td>
        <td>
            {{ Form::submit('Envoyer') }}
        </td>
    </tr>
{{ Form::close() }}
