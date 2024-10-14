<style>
        body {
            background-color: #f8f9fa;
        }
        .add-product-main {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
</style>

<div class="add-product-main">
        <h2 class="text-center mb-4">Add New Product</h2>
        <form action="<?= base_url('dashboard/addproduct') ?>" method="post">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" id="product_name" name="product_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number" step="0.01" id="product_price" name="product_price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="stock_quantity" class="form-label">Quantity</label>
                <input type="number" id="stock_quantity" name="stock_quantity" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>