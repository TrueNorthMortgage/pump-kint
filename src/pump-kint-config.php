<?php

Kint::$aliases[] = 'dd';
Kint::$enabled_mode = (bool)getenv('DEV_MODE');
Kint\Renderer\RichRenderer::$folder = false;

function dd(...$vars)
{
    Kint::dump(...$vars);
    exit;
}
