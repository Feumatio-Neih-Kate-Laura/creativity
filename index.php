<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creativity — Brochure Generator</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="header">
        <div class="container">
           <div class="logo" style="display:flex; align-items:center; gap:8px;">
            <img src="./assets/images/logo.jpeg" alt="Creativity logo" style="height:34px; width:34px; border-radius:6px; object-fit:cover;">
                Creativity
        </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="#templates">Templates</a>
                <a href="#how">How It Works</a>
                <a href="test.php" class="btn-small" style="color: white;">Create Yours</a>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <h1>Create the brochure of your dreams in minutes</h1>
            <p class="hero-sub">Pick a template, add your brand, and get a professional brochure in minutes,
                 no design skills needed.</p>
            <a href="test.php" class="btn">Create now</a>
        </div>
    </div>

    <div id="how" class="section">
        <div class="container">
            <h2>Get Started in 3 Steps</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-num">1</div>
                    <h3>Select a template</h3>
                    <p>Make your choice from our ready-made brochure designs</p>
                </div>
                <div class="step">
                    <div class="step-num">2</div>
                    <h3>Add your information</h3>
                    <p> Put your company name, colours, slogans and logo.</p>
                </div>
                <div class="step">
                    <div class="step-num">3</div>
                    <h3>Get your brochure</h3>
                    <p>Download your brochure, print-ready, instantly.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="templates" class="section grey">
        <div class="container">
            <h2>Choose your design</h2>
            <div class="template-grid">
               <div class="template-card">
                    <img src="assets/images/template1-preview (1).png" alt="Template 1 — Classic preview" class="template-box">
                    <h3>Template 1 — Classic</h3>
                    <p>A clean, simple and professional design </p>
                    <a href="test.php?model=model1" class="btn-small">Try this</a>
                </div>
                <div class="template-card">
                    <img src="assets/images/template2-preview (2).png" alt="Template 2 — Modern preview" class="template-box">
                    <h3>Template 2 — Modern</h3>
                    <p>A modern, attractive and updated design</p>
                    <a href="test.php?model=model2" class="btn-small">Try this</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2026 Creativity. All rights reserved.</p>
        </div>
    </div>

   
    <script src="assets/js/script.js"></script>
</body>
</html>
