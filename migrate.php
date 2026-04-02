<?php
include 'config/db.php';

$migrationDir = "migrations/";
$files = scandir($migrationDir);

foreach ($files as $file) {
    if ($file == '.' || $file == '..') continue;

    $check = $conn->query("SELECT * FROM migrations WHERE migration='$file'");
    
    if ($check->num_rows == 0) {
        $sql = include $migrationDir . $file;

        if ($conn->query($sql)) {
            $conn->query("INSERT INTO migrations (migration) VALUES ('$file')");
            echo "Migrated: $file <br>";
        } else {
            echo "Error in $file: " . $conn->error . "<br>";
        }
    }
}
?>