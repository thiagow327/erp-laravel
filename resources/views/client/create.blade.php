<h1>Create Client</h1>

<form action="{{ route('client.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    <br>
    <button type="submit">Create</button>
