<div class="table-responsive">
    <table class="table" id="locationScopes-table">
        <thead>
            <tr>
                <th>Coords</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locationScopes as $locationScope)
            <tr>
                <td>{{ $locationScope->coords }}</td>
                <td>
                    {!! Form::open(['route' => ['locationScopes.destroy', $locationScope->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('locationScopes.show', [$locationScope->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('locationScopes.edit', [$locationScope->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
