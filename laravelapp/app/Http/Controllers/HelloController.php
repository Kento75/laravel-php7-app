<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
$html = <<< EOF
<html>
<head>
<style>
body { font-size: 16px; color: #999; }
h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
</style>
</head>
<body>
<h1>Hello</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }
};
