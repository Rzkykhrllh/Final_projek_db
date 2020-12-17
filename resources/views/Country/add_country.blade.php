<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/customer">Country</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    <h3 class="ml-1">Add Country</h3>
</div>

<form action="addcountry" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="country_id">Id</label>
        <input class="form-control" id="country_id" type="text" name="country_id" placeholder="Enter Country Id">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="country_name">Country name</label>
        <input class="form-control" id="country_name" type="text" name="country_name" placeholder="Enter Customer County">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Tambah Country</button>
    </div>
</form>