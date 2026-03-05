<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'World';

$response = "Hello " . htmlspecialchars($name);
