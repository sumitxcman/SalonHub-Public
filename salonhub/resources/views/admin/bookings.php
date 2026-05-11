<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1>Global Appointments</h1>
    <a href="/salonhub/public/admin/dashboard" class="btn btn-primary">Back to Console</a>
</div>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Booking Ref</th>
                <th>Customer</th>
                <th>Salon Branch</th>
                <th>Date & Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td>B-<?= $booking['id'] ?></td>
                <td style="font-weight: 600;"><?= htmlspecialchars($booking['customer_name']) ?></td>
                <td><?= htmlspecialchars($booking['salon_name']) ?></td>
                <td><?= date('M d, Y', strtotime($booking['booking_date'])) ?> at <?= $booking['start_time'] ?></td>
                <td>
                    <span style="padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; background: <?= $booking['status'] === 'pending' ? '#fff3cd' : '#d1e7dd' ?>;">
                        <?= strtoupper($booking['status']) ?>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
