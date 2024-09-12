<h1>Edit Client</h1>

<form action="{{ route('client.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $client->name }}">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{ $client->phone }}">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{ $client->address }}">
    <br>
    <button type="submit">Update</button>
