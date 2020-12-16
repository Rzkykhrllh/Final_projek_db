<h1>Add new Customer</h1>

<form action="addinvoice" method="POST">
   
    @csrf

    <input type="text" name="invoice_no" placeholder="Enter Invoice Number"></br>
    <input type="text" name="stock_code" placeholder="Enter Stock Code"></br>
    <input type="text" name="quantity" placeholder="Enter Quantity"></br>
    <input type="text" name="invoice_date" placeholder="Enter Invoice Date"></br>
    <input type="text" name="customer_id" placeholder="Enter Customer ID"></br>

    <button type="submit">Tambah Stock</button>
</form>