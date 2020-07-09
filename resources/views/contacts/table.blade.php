<div class="table-responsive">
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th>Source Place Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Title</th>
        <th>Location</th>
        <th>Linkedin</th>
        <th>Company</th>
        <th>Company Website</th>
        <th>Company Industry</th>
        <th>Company Founded</th>
        <th>Company Size</th>
        <th>Company Linkedin</th>
        <th>Company Headquarters</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->source_place_id }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->title }}</td>
            <td>{{ $contact->location }}</td>
            <td>{{ $contact->linkedin }}</td>
            <td>{{ $contact->company }}</td>
            <td>{{ $contact->company_website }}</td>
            <td>{{ $contact->company_industry }}</td>
            <td>{{ $contact->company_founded }}</td>
            <td>{{ $contact->company_size }}</td>
            <td>{{ $contact->company_linkedin }}</td>
            <td>{{ $contact->company_headquarters }}</td>
                <td>
                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contacts.show', [$contact->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contacts.edit', [$contact->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
