<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<div class="card-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/customer">Country</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    <h3 class="ml-1">Edit Country</h3>
</div>



<form action="/editcountry" method="POST" class="mt-4">
    @csrf

    <div class="form-group ml-4 mr-4">
        <label for="country_id">Id</label>
        <input readonly class="form-control" id="country_id" type="text" name="country_id" value="{{$data["country_id"]}}">
    </div>
    
    <div class="form-group ml-4 mr-4">
        <label for="country_name">Name</label>
        <input class="form-control" id="country_name" type="text" name="country_name" value="{{$data["country_name"]}}">
    </div>

    <div class="mr-4 ml-4">
        <button class="btn btn-primary btn-block" type="submit">Update Country</button>
    </div>
</form>