<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1>E-commerce Inventory</h1>
    <div>
        <a href="#" class="btn btn-primary">+ Add Product</a>
        <a href="/salonhub/public/admin/dashboard" class="btn btn-primary" style="background:#666;">Back</a>
    </div>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Current Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td>#<?= str_pad($product['id'], 4, '0', STR_PAD_LEFT) ?></td>
                <td style="font-weight: 600;"><?= htmlspecialchars($product['name']) ?></td>
                <td class="price">$<?= number_format($product['price'], 2) ?></td>
                <td>
                    <span style="color: <?= $product['stock'] < 10 ? 'var(--danger)' : 'var(--success)' ?>">
                        <?= $product['stock'] ?> units
                    </span>
                </td>
                <td>
                    <a href="#" style="color: blue; text-decoration: none;">Edit</a> | 
                    <a href="#" style="color: var(--danger); text-decoration: none;">Remove</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
