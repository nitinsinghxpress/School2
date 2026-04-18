<?php
// contact_submit.php — handles AJAX contact form submission
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$name    = trim($_POST['name']    ?? '');
$phone   = trim($_POST['phone']   ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
if (!$name || !$phone || !$subject || !$message) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

// Email to school
$to      = 'modernpublicschool.sln@gmail.com';
$headers = "From: Website Contact <noreply@modernpublicschoolandcollege.com>\r\n"
         . "Reply-To: $email\r\n"
         . "MIME-Version: 1.0\r\n"
         . "Content-Type: text/html; charset=UTF-8\r\n";

$body = "
<html><body style='font-family:sans-serif;color:#333'>
<h2 style='color:#1a3a6e;border-bottom:2px solid #c8a84b;padding-bottom:8px'>New Contact Form Submission</h2>
<table style='width:100%;border-collapse:collapse'>
  <tr><td style='padding:8px;border-bottom:1px solid #eee;font-weight:600;width:140px'>Name</td><td style='padding:8px;border-bottom:1px solid #eee'>".htmlspecialchars($name)."</td></tr>
  <tr><td style='padding:8px;border-bottom:1px solid #eee;font-weight:600'>Phone</td><td style='padding:8px;border-bottom:1px solid #eee'>".htmlspecialchars($phone)."</td></tr>
  <tr><td style='padding:8px;border-bottom:1px solid #eee;font-weight:600'>Email</td><td style='padding:8px;border-bottom:1px solid #eee'>".htmlspecialchars($email)."</td></tr>
  <tr><td style='padding:8px;border-bottom:1px solid #eee;font-weight:600'>Subject</td><td style='padding:8px;border-bottom:1px solid #eee'>".htmlspecialchars($subject)."</td></tr>
  <tr><td style='padding:8px;font-weight:600;vertical-align:top'>Message</td><td style='padding:8px'>".nl2br(htmlspecialchars($message))."</td></tr>
</table>
<p style='color:#999;font-size:.85rem;margin-top:20px'>Sent from Modern Public School &amp; College website contact form.</p>
</body></html>";

$sent = mail($to, 'Contact Form: '.htmlspecialchars($subject), $body, $headers);

// Optional: save to file log
$log = date('Y-m-d H:i:s')." | $name | $phone | $email | $subject\n";
file_put_contents(__DIR__.'/contact_log.txt', $log, FILE_APPEND | LOCK_EX);

echo json_encode([
    'success' => true,
    'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your message has been received. We will get back to you shortly.'
]);
