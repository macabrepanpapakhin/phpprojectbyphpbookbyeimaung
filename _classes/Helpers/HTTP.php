<?php
namespace Helpers;
class HTTP
{
static $base = "http:192.168.64.3/form";
static function redirect($path, $query = "")
{
$url = static::$base . $path; if($query) $url .= "?$query";
header("location: $url");
exit(); }
}