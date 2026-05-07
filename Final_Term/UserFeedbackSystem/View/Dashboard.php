<?php 
include "../Controller/DashboardController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback System</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>

  <!-- ===== Header ===== -->
  <header>
    <h1>Feed<span>back</span> System</h1>
    <div class="header-dot"></div>
  </header>

  <div class="layout">

    <!-- ===== Sidebar ===== -->
    <nav>
      <p class="nav-label">Navigation</p>
      <ul>
        <li class="active">
          <a href="Dashboard.php">
            <span class="nav-icon">⬡</span> Dashboard
          </a>
        </li>
        <li>
          <a href="add_feedback.php">
            <span class="nav-icon">✦</span> Add Feedback
          </a>
        </li>
        <li>
          <a href="viewFeetback.php">
            <span class="nav-icon">◈</span> View Feedback
          </a>
        </li>
        <li>
          <a href="#profile">
            <span class="nav-icon">◎</span> Profile
          </a>
        </li>
        <li class="logout">
          <a href="Login.php">
            <span class="nav-icon">⇥</span> Logout
          </a>
        </li>
      </ul>
    </nav>

    <!-- ===== Main Content ===== -->
    <main>

      <!-- Welcome -->
      <section id="welcome">
        <h2>Welcome back, <span class="highlight">User!</span></h2>
        <p>Here's what's happening in your feedback management portal today.</p>
      </section>

      <!-- Stats Cards -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-label">Total Submissions</div>
          <div class="stat-value"><?php echo $count; ?></div>
          <span class="stat-icon">📊</span>
        </div>
        <div class="stat-card">
          <div class="stat-label">Pending Reviews</div>
          <div class="stat-value"><?php echo $pending; ?></div>
          <span class="stat-icon">⏳</span>
        </div>
        <div class="stat-card">
          <div class="stat-label">Resolved Issues</div>
          <div class="stat-value"><?php echo $resolve; ?></div>
          <span class="stat-icon">✅</span>
        </div>
      </div>

      <hr class="divider">

      <!-- Recent Activity -->
      <section id="activity">
        <h2>Recent Activity</h2>

        <div class="activity-item">
          <div class="activity-dot"></div>
          <div>
            <div class="activity-text">New feedback received from <strong>"Customer A"</strong></div>
            <div class="activity-time">Today at 10:15 AM</div>
          </div>
        </div>

        <div class="activity-item">
          <div class="activity-dot" style="background:#00d4ff; box-shadow:0 0 8px #00d4ff;"></div>
          <div>
            <div class="activity-text">You last logged in <strong>2 hours ago</strong></div>
            <div class="activity-time">Today at 08:00 AM</div>
          </div>
        </div>

      </section>

    </main>
  </div>

</body>
</html>