<style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
</style>

<div class="container mt-5">
        <h1 class="text-center">View Product</h1>
        <div class="card">
            <div class="card-header text-center bg-info">
                <p class="fw-bold m-0">Product Details</p>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= esc($product['product_name']) ?></h5>
                <p class="card-text"><strong>Price:</strong> ₱<?= esc($product['product_price']) ?></p>
                <p class="card-text"><strong>Quantity:</strong> <?= esc($product['stock_quantity']) ?></p>
                <p class="card-text"><strong>Date Created:</strong> <?= esc($product['date_created']) ?></p>
                <p class="card-text"><strong>Date Updated:</strong> <?= esc($product['date_updated']) ?></p>
                <div class="text-center">
                    <a href="<?= base_url('dashboard') ?>" class="btn btn-info fw-bold">Back to Dashboard</a>
                </div>
            </div>
        </div>
</div>