<?php
// Start session at the very beginning
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Handling Demo</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .section { margin-bottom: 30px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h2 { color: #2c3e50; margin-top: 0; }
    </style>
</head>
<body>
    <h1>PHP Session Handling Demonstration</h1>

    <div class="section">
        <h2>1. Setting Session Variables</h2>
        <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        $_SESSION["timestamp"] = date('Y-m-d H:i:s');
        
        echo "<p>Session variables set:</p>";
        echo "<ul>";
        echo "<li>Favorite Color: " . htmlspecialchars($_SESSION["favcolor"]) . "</li>";
        echo "<li>Favorite Animal: " . htmlspecialchars($_SESSION["favanimal"]) . "</li>";
        echo "<li>Set at: " . htmlspecialchars($_SESSION["timestamp"]) . "</li>";
        echo "</ul>";
        ?>
    </div>

    <div class="section">
        <h2>2. Reading Session Variables</h2>
        <?php
        if (isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])) {
            echo "<p>Favorite color is " . htmlspecialchars($_SESSION["favcolor"]) . ".</p>";
            echo "<p>Favorite animal is " . htmlspecialchars($_SESSION["favanimal"]) . ".</p>";
        } else {
            echo "<p>Session variables not set yet.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h2>3. View All Session Data</h2>
        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
    </div>

    <div class="section">
        <h2>4. Modifying Session Variables</h2>
        <?php
        // Change a session variable
        $_SESSION["favcolor"] = "yellow";
        $_SESSION["modified"] = date('Y-m-d H:i:s');
        
        echo "<p>Changed favorite color to yellow.</p>";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
    </div>

    <div class="section">
        <h2>5. Destroying Session</h2>
        <?php
        // Remove all session variables
        session_unset();
        
        // Destroy the session
        session_destroy();
        
        echo "<p>Session destroyed. Refresh the page to see empty session data.</p>";
        
        // Start new session to demonstrate it's empty
        session_start();
        echo "<p>Current session data after destruction:</p>";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
    </div>

    <div class="section">
        <h2>Session Information</h2>
        <p>Session ID: <?php echo htmlspecialchars(session_id()); ?></p>
        <p>Session Status: <?php echo htmlspecialchars(session_status()); ?></p>
        <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Refresh Page</a></p>
    </div>
</body>
</html>