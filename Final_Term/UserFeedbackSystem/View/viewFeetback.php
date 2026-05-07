<?php
include "../Controller/viewFeetbackController.php";
$controller = new viewFeedbackController();
$result = $controller->getAllFeedback();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Feedback</title>
  <link rel="stylesheet" href="viewFeedback.css">
</head>
<body>

  <!-- Floating orbs -->
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <div class="page-wrapper">

    <!-- Page Header -->
    <div class="page-header">
      <div class="page-icon">◈</div>
      <div>
        <h2>View Feedback</h2>
        <p>All submitted feedback entries from your users</p>
      </div>
    </div>

    <!-- Table Card -->
    <div class="table-card">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="feedbackBody">

          <?php 
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            if (count($rows) === 0): 
          ?>
            <tr>
              <td colspan="4">
                <div class="empty-state">
                  <div class="empty-icon">◎</div>
                  <p>No feedback entries found.</p>
                </div>
              </td>
            </tr>
          <?php else: ?>
            <?php foreach ($rows as $row): 
              /* Map status string to badge class */
              $status = strtolower(trim($row['Status']));
              $badgeClass = match(true) {
                str_contains($status, 'pending')  => 'badge-pending',
                str_contains($status, 'resolv')   => 'badge-resolved',
                str_contains($status, 'open')     => 'badge-open',
                str_contains($status, 'clos')     => 'badge-closed',
                default                            => 'badge-open',
              };
            ?>
            <tr>
              <td>#<?php echo htmlspecialchars($row['id']); ?></td>
              <td><?php echo htmlspecialchars($row['subject']); ?></td>
              <td><?php echo htmlspecialchars($row['message']); ?></td>
              <td>
                <span class="badge <?php echo $badgeClass; ?>">
                  <?php echo htmlspecialchars($row['Status']); ?>
                </span>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php endif; ?>

        </tbody>
      </table>
    </div>

  </div>

  <!-- Stagger row animations -->
  <script>
    document.querySelectorAll('#feedbackBody tr').forEach((row, i) => {
      row.style.animationDelay = (0.35 + i * 0.07) + 's';
    });
  </script>

</body>
</html>