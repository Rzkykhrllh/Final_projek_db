<h1>Edit Customer</h1>
<h2>{{$data}}</h2>

<form action="/edit" method="POST">
    @csrf
    {{-- @method("PUT") --}}

    <input type="hidden" name="customer_id" value="{{$data["customer_id"]}}"> </br>
    <input type="text" name="country" value="{{$data["country"]}}"> </br>

    <button type="submit">Tambah Customer</button>
</form>