<?php
echo "<h3>Database Diagnostics</h3>";

$host = 'ep-withered-truth-aq5y4gnv-pooler.c-8.us-east-1.aws.neon.tech';
$port = '5432';

// 1. Check DNS Resolution
echo "1. Checking DNS Resolution...<br>";
$ip = gethostbyname($host);
if ($ip === $host) {
    echo "<span style='color:red;'>FAILED: DNS could not resolve the host name.</span><br>";
} else {
    echo "<span style='color:green;'>SUCCESS: Host resolved to IP: $ip</span><br>";
}

echo "<br>2. Checking Connection...<br>";
include 'db.php';

try {
    if (isset($pdo)) {
        echo "<span style='color:green;'>SUCCESS: Connected to Neon Database!</span>";
        $stmt = $pdo->query("SELECT version()");
        $version = $stmt->fetch();
        echo "<br>PostgreSQL Version: " . $version['version'];
    }
} catch (Exception $e) {
    echo "<span style='color:red;'>FAILED: " . $e->getMessage() . "</span>";
}
?>
