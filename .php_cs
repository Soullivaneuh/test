<?php

ini_set('memory_limit', -1);

$finder = \PhpCsFixer\Finder::create()->in(__DIR__);

return \PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
