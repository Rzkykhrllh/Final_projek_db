<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/customer">Customer</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    <h3 class="ml-1">Edit Customer</h3>
</div>



<form action="/editcustomer" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="customer_id">Id</label>
        <input readonly class="form-control" id="customer_id" type="text" name="customer_id" value="{{$data["customer_id"]}}">
    </div>
    
    <div class="form-group ml-4 mr-4">
        <label for="customer_name">Name</label>
        <input class="form-control" id="customer_name" type="text" name="customer_name" value="{{$data["customer_name"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="email">Email</label>
        <input class="form-control" id="email" type="text" name="email" value="{{$data["customer_email"]}}">
    </div>

    <div class="form-group ml-4 mr-4">
        <label for="country_id">Country Id</label>
        <input class="form-control" id="country_id" type="text" name="country_id" value="{{$data["country_id"]}}">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Update Customer</button>
    </div>
</form>