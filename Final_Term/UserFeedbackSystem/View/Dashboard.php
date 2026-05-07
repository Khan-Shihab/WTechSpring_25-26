<?php 
include "../Controller/DashboardController.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback System</title>
</head>
<body style="margin: 0; display: flex; flex-direction: column; height: 100vh; font-family: sans-serif;">

    <!-- Header -->
    <header style="background: #333; color: white; padding: 20px; text-align: center;">
        <h1>System Header</h1>
    </header>

    <div style="display: flex; flex: 1;">
        
        <!-- Sidebar / Navigation Menu -->
        <nav style="width: 250px; background: #f4f4f4; border-right: 1px solid #ddd; padding: 20px;">
            <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 15px;"><a href="Dashboard.php">Dashboard</a></li>
                <li style="margin-bottom: 15px;"><a href="add_feedback.php">Add Feedback</a></li>
                <li style="margin-bottom: 15px;"><a href="viewFeetback.php">View Feedback</a></li>
                <li style="margin-bottom: 15px;"><a href="#profile">Profile</a></li>
                <li style="margin-top: 50px;"><a href="Login.php" style="color: red;">Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <main style="flex: 1; padding: 40px; background: #fff;">
            
            <section id="welcome">
                <h2>Welcome Message</h2>
                <p>Hello, User! Welcome back to your feedback management portal.</p>
            </section>

            <hr style="margin: 30px 0;">

        <section id="summary">
        <h2>Feedback Summary</h2>
        <ul>
            <!-- Replace '45' with your dynamic count variable -->
            <li>Total Submissions: <?php echo $count; ?></li>
            <li>Pending Reviews: <?php echo $pending; ?></li>
            <li>Resolved Issues: <?php echo $resolve; ?></li>
        </ul>
        </section>

            <hr style="margin: 30px 0;">

            <section id="activity">
                <h2>Recent Activity</h2>
                <p>Last login: 2 hours ago</p>
                <p>New feedback received from "Customer A" at 10:15 AM</p>
            </section>

        </main>
    </div>

</body>
</html>
