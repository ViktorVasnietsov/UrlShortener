<?php

use PhpPro\UrlShortener\Helpers\UrlValidator;
use GuzzleHttp\Client;
use PhpPro\UrlShortener\FileRepository;
use PhpPro\UrlShortener\UrlConverter;

require_once __DIR__ . '/../vendor/autoload.php';


$fileRepository = new FileRepository('db.json');
$urlValidator = new UrlValidator(new Client());
$converter = new UrlConverter(
    $fileRepository,
    $urlValidator,
    6
);

$code = $converter->encode('https://google.com');

$url = $converter->decode($code);
echo $url . PHP_EOL;