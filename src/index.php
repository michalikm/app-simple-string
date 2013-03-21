<!DOCTYPE html>
<html>
  <head>
    <title>SimpleString example application</title>
    <meta charset="UTF-8" />
    <style>
    body {
        font-family: "Courier New", monospace;
    }
    </style>
  </head>
<body>

<?php

require_once '../vendor/autoload.php';

use Gajdaw\TddExamples\SimpleString\SimpleString;

?>

<hr />

<?php

echo "SimpleString::removeDigits('lorem123') = " . SimpleString::removeDigits('lorem123');

?>

<hr />

</body>
</html>
