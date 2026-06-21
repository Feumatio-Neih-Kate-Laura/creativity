<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request method.');
}


$model = $_POST['model'] ?? 'model1';
$fullName = $_POST['full_name'] ?? '';
$companyName = $_POST['company_name'] ?? '';
$tagline = $_POST['slogan'] ?? '';
$address = $_POST['adress'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$website = $_POST['website'] ?? '';
$socialLinks = $_POST['social_links'] ?? '';
$primaryColor = $_POST['primary_color'] ?? '#3B82F6';
$secondaryColor = $_POST['secondary_color'] ?? '#1E3A5F';


if (empty($fullName)) {
    die('Full name is required.');
}


$logoPath = '';
if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $fileName = time() . '_' . basename($_FILES['logo']['name']);
    $targetPath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $targetPath)) {
        $logoPath = $targetPath;
    }
}


$stmt = $pdo->prepare("INSERT INTO submissions 
    (full_name, email, phone, company_name, tagline, address, website, social_links, model, primary_color, secondary_color, logo_path) 
    VALUES (:full_name, :email, :phone, :company_name, :tagline, :address, :website, :social_links, :model, :primary_color, :secondary_color, :logo_path)");

$stmt->execute([
    ':full_name' => $fullName,
    ':email' => $email,
    ':phone' => $phone,
    ':company_name' => $companyName,
    ':tagline' => $tagline,
    ':address' => $address,
    ':website' => $website,
    ':social_links' => $socialLinks,
    ':model' => $model,
    ':primary_color' => $primaryColor,
    ':secondary_color' => $secondaryColor,
    ':logo_path' => $logoPath
]);

// Load the chosen template
$templateFile = 'models/' . basename($model) . '.html';
$template = file_get_contents($templateFile);

// Replace placeholders
$replacements = [
    '{{FULL_NAME}}' => htmlspecialchars($fullName),
    '{{COMPANY_NAME}}' => htmlspecialchars($companyName),
    '{{TAGLINE}}' => htmlspecialchars($tagline),
    '{{EMAIL}}' => htmlspecialchars($email),
    '{{PHONE}}' => htmlspecialchars($phone),
    '{{PRIMARY_COLOR}}' => htmlspecialchars($primaryColor),
    '{{SECONDARY_COLOR}}' => htmlspecialchars($secondaryColor),
    '{{LOGO_PATH}}' => htmlspecialchars($logoPath)
];

$output = str_replace(array_keys($replacements), array_values($replacements), $template);

echo $output;