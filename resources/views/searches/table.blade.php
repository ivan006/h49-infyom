<div class="table-responsive">
    <table class="table" id="searches-table">
        <thead>
            <tr>
                <th>Status Flag</th>
        <th>Status Note</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($searches as $search)
            <tr>
                <td>{{ $search->status_flag }}</td>
            <td>{{ $search->status_note }}</td>
                <td>
                    {!! Form::open(['route' => ['searches.destroy', $search->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('searches.show', [$search->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('searches.edit', [$search->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
