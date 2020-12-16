<h1>Add new Customer</h1>

<form action="addstock" method="POST">
   
    @csrf

    <input type="text" name="stock_code" placeholder="Enter Code"></br>
    <input type="text" name="description" placeholder="Enter Description"></br>
    <input type="text" name="unit_price" placeholder="Enter Price"></br>

    <button type="submit">Tambah Stock</button>
</form>