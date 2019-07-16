<?php

Kint::$aliases[] = 'dd';
Kint::$aliases[] = 'sd';
Kint::$enabled_mode = (bool)getenv('DEV_MODE');
Kint\Renderer\RichRenderer::$folder = false;

function dd(...$vars)
{
    Kint::dump(...$vars);
    exit;
}

function sd(...$vars)
{
    s(...$vars);
    exit;
}
