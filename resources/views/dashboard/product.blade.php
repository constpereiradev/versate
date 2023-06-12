@include('dashboard.layout.meta')
@include('dashboard.layout.header')
@include('dashboard.layout.main')

    <div class="result">
            
        <table class="product">
            <thead>Product</thead>
            <br>

            <tr>Price</tr>
            <tr>Name</tr>
            <tr>Quantity</tr>
            <tr>Action</tr>

            <td>10.00</td>
            <td>T-shirt</td>
            <td>100</td>
            <td>
                <button>Edit</button> 
                <button>Delete</button>
            </td>

            <tr></tr>

            
     
        </table>
        
        <button>New product</button>
        
    </div>
</main>