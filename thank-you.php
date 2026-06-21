<?php
$file = $_GET['file'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Thank You — Creativity</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="header">
    <div class="container">
        <div class="logo">Creativity</div>
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="test.php" class="btn-small">Create Another</a>
        </div>
    </div>
</div>

<div class="section" style="text-align:center; padding:80px 20px;">
    <h1 style="color:#008000; margin-bottom:15px;">Your Brochure Is Ready! 🎉</h1>
    <p style="color:#666; margin-bottom:30px;">Thank you for using Creativity. Click below to view or download your brochure.</p>

    <?php if ($file && file_exists($file)): ?>
        <a href="<?php echo htmlspecialchars($file); ?>" target="_blank" class="btn">View My Brochure</a>
    <?php else: ?>
        <p style="color:red;">Something went wrong — brochure not found.</p>
    <?php endif; ?>
</div>

<div class="footer">
    <div class="container">
        <p>&copy; 2026 Creativity. All rights reserved.</p>
    </div>
</div>

</body>
</html>