<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/customer">Customer</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    <h3 class="ml-1">Add Customer</h3>
</div>

<form action="addstock" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="customer_id">Customer Id</label>
        <input class="form-control" id="customer_id" type="text" name="customer_id" placeholder="Enter Customer Id">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="country">Customer Country</label>
        <input class="form-control" id="country" type="text" name="country" placeholder="Enter Customer County">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Tambah Customer</button>
    </div>
</form>