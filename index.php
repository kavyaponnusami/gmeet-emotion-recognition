<?php include_once("Inference.html");
SetEnvIf Origin ^(http?://m\.example\.com(?::\d{1,5})?)$   CORS_ALLOW_ORIGIN=$1
Header append Access-Control-Allow-Origin  %{CORS_ALLOW_ORIGIN}e   env=CORS_ALLOW_ORIGIN
Header set Access-Control-Allow-Methods "POST, GET, OPTIONS, DELETE, PUT"
Header set Access-Control-Allow-Credentials true
Header set Access-Control-Allow-Headers "x-requested-with, Content-Type, origin, authorization, accept, client-security-token"
?>