<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header"><nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/stock">Stock</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    <h3 class="ml-1">Edit Stock</h3>
</div>

<form action="/editstock" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="stock_id">Id</label>
        <input readonly class="form-control" id="stock_id" type="text" name="stock_id" value="{{$data["stock_id"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="description">Description</label>
        <input class="form-control" id="description" type="text" name="description" value="{{$data["description"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="unit_price">Unit Price</label>
        <input class="form-control" id="unit_price" type="text" name="unit_price" value="{{$data["unit_price"]}}">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Update Stock</button>
    </div>
</form>