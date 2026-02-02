<?php

require_once 'socket.php';

$request = "GET / HTTP/1.1
Host: taltech.ee

";

print makeWebRequest("taltech.ee", 443, $request);
