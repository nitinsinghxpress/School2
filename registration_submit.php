<?php
// registration_submit.php — handles AJAX online registration form
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

// Collect & sanitize fields
$fields = [
    'first_name'  => trim($_POST['first_name']  ?? ''),
    'last_name'   => trim($_POST['last_name']   ?? ''),
    'dob'         => trim($_POST['dob']         ?? ''),
    'gender'      => trim($_POST['gender']      ?? ''),
    'class'       => trim($_POST['class']       ?? ''),
    'prev_school' => trim($_POST['prev_school'] ?? ''),
    'father_name' => trim($_POST['father_name'] ?? ''),
    'mother_name' => trim($_POST['mother_name'] ?? ''),
    'phone'       => trim($_POST['phone']       ?? ''),
    'alt_phone'   => trim($_POST['alt_phone']   ?? ''),
    'email'       => trim($_POST['email']       ?? ''),
    'address'     => trim($_POST['address']     ?? ''),
    'source'      => trim($_POST['source']      ?? ''),
    'comments'    => trim($_POST['comments']    ?? ''),
];

// Required field check
$required = ['first_name','last_name','dob','gender','class','father_name','mother_name','phone','address'];
foreach ($required as $r) {
    if (empty($fields[$r])) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }
}

// Generate application reference
$ref = 'MPS' . date('Ymd') . strtoupper(substr($fields['first_name'],0,2)) . rand(100,999);

// Email to school
$to      = 'modernpublicschool.sln@gmail.com';
$headers = "From: Admissions <noreply@modernpublicschoolandcollege.com>\r\n"
         . "Reply-To: {$fields['email']}\r\n"
         . "MIME-Version: 1.0\r\n"
         . "Content-Type: text/html; charset=UTF-8\r\n";

$fullName = htmlspecialchars($fields['first_name'].' '.$fields['last_name']);

$body = "
<html><body style='font-family:sans-serif;color:#333'>
<h2 style='color:#1a3a6e;border-bottom:2px solid #c8a84b;padding-bottom:8px'>
  New Registration Application — {$ref}
</h2>
<h4 style='color:#c8a84b'>Student Information</h4>
<table style='width:100%;border-collapse:collapse;margin-bottom:20px'>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;width:160px;font-weight:600'>Full Name</td><td style='padding:7px;border-bottom:1px solid #eee'>{$fullName}</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Date of Birth</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['dob'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Gender</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['gender'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Class Applied</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['class'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Previous School</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['prev_school'])."</td></tr>
</table>
<h4 style='color:#c8a84b'>Parent Information</h4>
<table style='width:100%;border-collapse:collapse;margin-bottom:20px'>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;width:160px;font-weight:600'>Father's Name</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['father_name'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Mother's Name</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['mother_name'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Phone</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['phone'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Alt Phone</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['alt_phone'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Email</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['email'])."</td></tr>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;font-weight:600'>Address</td><td style='padding:7px;border-bottom:1px solid #eee'>".nl2br(htmlspecialchars($fields['address']))."</td></tr>
</table>
<h4 style='color:#c8a84b'>Additional</h4>
<table style='width:100%;border-collapse:collapse'>
  <tr><td style='padding:7px;border-bottom:1px solid #eee;width:160px;font-weight:600'>Source</td><td style='padding:7px;border-bottom:1px solid #eee'>".htmlspecialchars($fields['source'])."</td></tr>
  <tr><td style='padding:7px;font-weight:600;vertical-align:top'>Comments</td><td style='padding:7px'>".nl2br(htmlspecialchars($fields['comments']))."</td></tr>
</table>
<p style='color:#999;font-size:.85rem;margin-top:24px'>Ref: {$ref} | Submitted from Modern Public School &amp; College website.</p>
</body></html>";

mail($to, "Admission Application – {$fullName} | {$ref}", $body, $headers);

// Optional: confirmation email to parent
if (!empty($fields['email'])) {
    $confHeaders = "From: Modern Public School <noreply@modernpublicschoolandcollege.com>\r\n"
                 . "MIME-Version: 1.0\r\n"
                 . "Content-Type: text/html; charset=UTF-8\r\n";
    $confBody = "
<html><body style='font-family:sans-serif;color:#333'>
<h2 style='color:#1a3a6e'>Thank You for Applying!</h2>
<p>Dear Parent/Guardian,</p>
<p>We have successfully received the registration application for <strong>{$fullName}</strong> for <strong>".htmlspecialchars($fields['class'])."</strong>.</p>
<p><strong>Application Reference:</strong> <span style='color:#c8a84b;font-weight:700'>{$ref}</span></p>
<p>Our admissions team will contact you within 2–3 working days at <strong>".htmlspecialchars($fields['phone'])."</strong>.</p>
<hr style='border-color:#eee'>
<p style='font-size:.85rem;color:#999'>
  Modern Public School &amp; College<br>
  Lucknow Road, Gabhariya-Sultanpur (U.P.) 228001<br>
  +91 9451561564 | modernpublicschool.sln@gmail.com
</p>
</body></html>";
    mail($fields['email'], 'Application Received — '.$ref, $confBody, $confHeaders);
}

// Log
$log = date('Y-m-d H:i:s')." | {$ref} | {$fullName} | {$fields['class']} | {$fields['phone']}\n";
file_put_contents(__DIR__.'/registrations_log.txt', $log, FILE_APPEND | LOCK_EX);

echo json_encode([
    'success'   => true,
    'reference' => $ref,
    'message'   => "Application submitted successfully! Your reference number is <strong>{$ref}</strong>. Our team will contact you within 2–3 working days."
]);
