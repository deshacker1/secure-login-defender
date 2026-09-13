<?php
// Secure Login Defender - By Okello Desmond @deshacker1
// Level 5: Defender - Nsangi, Kampala
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

function safe_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Input validation
$username = $_POST['username'] ?? '';
if (strlen($username) > 50) { $username = substr($username,0,50); }
if (empty($username)) { die("Username required"); }

$safe_username = safe_output($username);
error_log("[LOGIN ATTEMPT] User: " . $safe_username . " at " . date('Y-m-d H:i:s'));

echo "<h1>Welcome, " . $safe_username . "</h1>";
echo "<p>Input secured against XSS.</p>";
?>
<form method="POST">
<input name="username" placeholder="Try XSS: \"><script>alert(1)</script>" required>
<button>Login</button>
</form>
