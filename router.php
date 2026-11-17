<?php
// Local dev router for `php -S` ONLY (production uses .htaccess).
// Mirrors the .htaccess clean-URL behaviour so extensionless links work locally.
$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');
$root = __DIR__;
$path = $root . $uri;

// Home
if ($uri === '/' || $uri === '') { require $root . '/index.php'; return true; }

// Serve existing real files (assets, robots.txt, sitemap.xml, llms.txt, …) directly
if (is_file($path)) { return false; }

// Clean URL -> .php
$php = $root . '/' . trim($uri, '/') . '.php';
if (is_file($php)) { require $php; return true; }

// Directory with its own index
if (is_dir($path) && is_file($path . '/index.php')) { require $path . '/index.php'; return true; }

http_response_code(404);
echo '404 Not Found';
return true;
