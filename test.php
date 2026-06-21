<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creativity — Build Your Brochure</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<form action="generate.php" method="POST" enctype="multipart/form-data">

    <div class="header">
        <div class="container">
            <div class="logo">Creativity</div>
            <div class="nav">
                <a href="index.html">Home</a>
                <button class=""><a href="test.html">Create Yours</a></button>
            </div>
        </div>
    </div>

    <div class="builder">
        <div class="container">
            <h1>Create Your Brochure</h1>
            <p class="page-sub">Select a template and fill in your information</p>

            <!--
            ==========================================
            STEP 1 — Choose a template
            ==========================================
            When you convert this page to PHP, you'll
            read the selected model with $_POST['model'].
            For now it's just a radio group.
            -->

            <div class="form-section">
                <h2>Step 1: Select a Template</h2>

               <label class="model-option">
                <input type="radio" name="model" value="model1" checked>
                <span class="model-preview">
                <img src="assets/images/template1-preview (1).png" alt="Template 1 — Classic preview">
                </span>
            <span>Template 1 — Classic</span>
            </label>

            <label class="model-option">
                <input type="radio" name="model" value="model2">
                <span class="model-preview">
                    <img src="assets/images/template2-preview (2).png" alt="Template 2 — Modern preview">
                </span>
                <span>Template 2 — Modern</span>
            </label>

                <!-- TODO: Add more model options here -->
            </div>

            <!--
            ==========================================
            STEP 2 — Your information
            ==========================================
            TODO: Add more fields (address, website, ...)
            -->

            <div class="form-section">
                <h2>Step 2: Your Information</h2>

                <div class="field">
                    <label for="name">Full Name </label>
                    <input type="text" id="name" placeholder="e.g. Kate Laura">
                </div>

                <div class="field">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" placeholder="e.g. Clintlab">
                </div>
                 

                <div class="field">
                    <label for="tagline">Slogan</label>
                    <input type="text" id="tagline" placeholder="e.g. MTN, everywhere you go">
                    <p id="tagline-counter" style="font-size:12px; color:#999;">0 / 100 characters</p>
                </div>
               
                 <div class="field">
                        <label for="address">Adress</label>
                        <input type="text" id="address" placeholder="carrefour simbock">
                    </div>

                <div class="row">
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="kae@example.com">
                    </div>
                    <div class="field">
                        <label for="phone">Contact</label>
                        <input type="tel" id="phone" placeholder="+1 234 377 999">
                    </div>
                </div>
                   <div class="row">
                    <div class="field">
                        <label for="website">Website</label>
                        <input type="url" id="website" placeholder="https://examole.com">
                    </div>
                    <div class="field">
                        <label for="social">Social Media Links</label>
                        <textarea id="social" placeholder="e.g. https://instagram.com/you, https://facebook.com/you"></textarea>
                    </div>
                    </div>
                </div>
            <!--
            ==========================================
            STEP 3 — Choose colours
            ==========================================
            The PRIMARY colour preview already works.
            The SECONDARY colour preview is broken —
            your job is to make it work. Check script.js.
            -->

            <div class="form-section">
                <h2>Step 3: Choose Your Colours</h2>

                <div class="row">
                    <div class="field">
                        <label for="primary-color">Primary Colour</label>
                        <input type="color" id="primary-color" value="#3B82F6">
                        <div class="swatch" id="primary-swatch"></div>
                    </div>
                    <div class="field">
                        <label for="secondary-color">Secondary Colour</label>
                        <input type="color" id="secondary-color" value="#1E3A5F">
                        <!-- TODO: The swatch below doesn't update yet.
                             Fix it by adding an event listener in script.js -->
                        <div class="swatch" id="secondary-swatch"></div>
                    </div>
                     <div class="row">

                     </div>
                </div>
            </div>

            <!--
            ==========================================
            STEP 4 — Upload logo
            ==========================================
            TODO: When you add PHP, use enctype="multipart/form-data"
            and handle the file with $_FILES.
            -->

            <div class="form-section">
                <h2>Step 4: Upload Your Logo</h2>
                <div class="field">
                    <label for="logo">Logo Image</label>
                    <input type="file" id="logo" accept="image/png, image/jpeg">
                    <p class="hint">Accepted: PNG, JPG. Max 2MB.</p>
                    <img src="" alt="" style="display: none; max-width: 150px; margin-top: 10px;" id="logo-preview">
                </div>
            </div>

            <!--
            ==========================================
            SUBMIT
            ==========================================
            When this becomes PHP, change the button to
            <button type="submit"> and wrap everything
            inside <form action="generate.php" method="POST"
            enctype="multipart/form-data">
            -->

            <div class="form-section action-row">
                <button type="submit" class="btn">Generate My Brochure</button>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2026, Creativity . All rights Reserved.</p>
        </div>
    </div>
</form>

    <script src="assets/js/script.js"></script>
</body>
</html>
