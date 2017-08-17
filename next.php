<?php
session_start();

header('Content-Type: text/plain');

echo '$_SESSION = ' . "\n\n";

var_export($_SESSION);
