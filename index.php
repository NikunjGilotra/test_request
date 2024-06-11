<?php
// Print all headers
echo "<h2>Headers</h2>";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value<br>";
}

// Print GET parameters
echo "<h2>GET Parameters</h2>";
if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "$key: $value<br>";
    }
} else {
    echo "No GET parameters<br>";
}

// Print POST parameters
echo "<h2>POST Parameters</h2>";
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        echo "$key: $value<br>";
    }
} else {
    echo "No POST parameters<br>";
}

// Print raw POST data
echo "<h2>Raw POST Data</h2>";
$rawPostData = file_get_contents("php://input");
if ($rawPostData) {
    echo nl2br(htmlspecialchars($rawPostData));
} else {
    echo "No raw POST data<br>";
}

// Print COOKIE data
echo "<h2>COOKIE Data</h2>";
if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        echo "$key: $value<br>";
    }
} else {
    echo "No COOKIE data<br>";
}

// Print SERVER data
echo "<h2>SERVER Data</h2>";
foreach ($_SERVER as $key => $value) {
    echo "$key: $value<br>";
}

// Print FILES data
echo "<h2>FILES Data</h2>";
if (!empty($_FILES)) {
    foreach ($_FILES as $key => $file) {
        echo "File Key: $key<br>";
        foreach ($file as $fileKey => $fileValue) {
            echo "&nbsp;&nbsp;$fileKey: $fileValue<br>";
        }
    }
} else {
    echo "No FILES data<br>";
}
?>
