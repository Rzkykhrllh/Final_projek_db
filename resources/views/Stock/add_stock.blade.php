<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/stock">Stock</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>
    <h3 class="ml-1">Add new Stock</h3>
</div>

<form action="addstock" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="stock_code">Stock Code</label>
        <input class="form-control" id="stock_code" type="text" name="stock_code" placeholder="Enter Stock Code">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="description">Stock Descriotion</label>
        <input class="form-control" id="description" type="text" name="description" placeholder="Enter Stock Descriotion">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="unit_price">Stock Unit Price</label>
        <input class="form-control" id="unit_price" type="text" name="unit_price" placeholder="Enter Stock Price">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Tambah Customer</button>
    </div>
</form>