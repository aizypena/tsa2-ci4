<style>
    body {
        background-color: #F8F9FA;
    }
</style>
<div class="main-dashboard p-5">
    <div class="d-flex justify-content-between mb-3">
        <a class="btn btn-primary" href="<?= base_url('dashboard/addproduct') ?>">Add New Product</a>
        <a class="btn btn-secondary" href="<?= base_url('logout') ?>">Log Out</a>
    </div>

    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Stock Quantity</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Updated</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products) && is_array($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= esc($product['product_id']) ?></td>
                        <td><?= esc($product['product_name']) ?></td>
                        <td><?= esc($product['product_price']) ?></td>
                        <td><?= esc($product['stock_quantity']) ?></td>
                        <td><?= esc($product['date_created']) ?></td>
                        <td><?= esc($product['date_updated']) ?></td>
                        <td>
                            <a href="<?= base_url('dashboard/viewproduct/' . $product['product_id']); ?>" class="btn sm-btn btn-info">View</a>
                            <a href="<?= base_url('dashboard/editproduct/' . $product['product_id']); ?>" class="btn sm-btn btn-warning">Edit</a>
                            <a href="<?= base_url('dashboard/delete/' . $product['product_id']); ?>" class="btn sm-btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No products found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>