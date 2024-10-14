<div class="container mt-5">
        <h1>Edit Product</h1>
        <form action="<?= base_url('dashboard/updateproduct/' . $product['product_id']) ?>" method="post">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" id="product_name" name="product_name" class="form-control" value="<?= esc($product['product_name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number" step="0.01" id="product_price" name="product_price" class="form-control" value="<?= esc($product['product_price']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="stock_quantity" class="form-label">Quantity</label>
                <input type="number" id="stock_quantity" name="stock_quantity" class="form-control" value="<?= esc($product['stock_quantity']) ?>" required>
            </div>
            <div class="add-btn">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>