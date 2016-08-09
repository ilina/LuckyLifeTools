<?php

// destroy logged in session and redirect back to index page
include_once 'checked-login.php';
session_destroy();
header("Location: index.php");