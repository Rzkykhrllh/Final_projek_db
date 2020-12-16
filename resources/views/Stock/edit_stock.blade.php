<h1>Edit Customer</h1>
<h2>{{$data}}</h2>

<form action="/edit" method="POST">
    @csrf
    {{-- @method("PUT") --}}

    <input type="hidden" name="stock_code" value="{{$data["stock_code"]}}"> </br>
    <input type="text" name="description" value="{{$data["description"]}}"> </br>
    <input type="text" name="unit_price" value="{{$data["unit_price"]}}"> </br>

    <button type="submit">Tambah Customer</button>
</form>