<h1>Clients</h1>

<a href="{{ route('client.create') }}">Create Client</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>
                    <a href="{{ route('client.show', $client->id) }}">Show</a>
                    <a href="{{ route('client.edit', $client->id) }}">Edit</a>
                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
