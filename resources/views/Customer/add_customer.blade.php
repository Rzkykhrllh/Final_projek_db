<h1>Add new Customer</h1>

<form action="addcustomer" method="POST">
   
    @csrf

    <input type="text" name="customer_id" placeholder="Enter ID"></br>
    <input type="text" name="country" placeholder="Enter Country"></br>

    <button type="submit">Tambah Customer</button>
</form>