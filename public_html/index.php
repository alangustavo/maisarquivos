<?php
// Should be set to 0 in production
error_reporting(E_ALL);

// Should be set to '0' in production
ini_set('display_errors', '1');
// https://odan.github.io/2019/11/05/slim4-tutorial.html
(require __DIR__ . '/../config/bootstrap.php')->run();
