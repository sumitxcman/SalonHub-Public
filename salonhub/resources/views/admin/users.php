<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1>User Management</h1>
    <a href="/salonhub/public/admin/dashboard" class="btn btn-primary">Back to Console</a>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Access Role</th>
                <th>Reward Points</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td style="font-weight: 600;"><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><span style="background: var(--light); padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;"><?= strtoupper($user['role']) ?></span></td>
                <td><?= $user['reward_points'] ?> pts</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
