<?php

Kint::$aliases[] = 'dd';
Kint::$aliases[] = 'sd';
Kint::$enabled_mode = (getenv('DEV_MODE') === 'true');
Kint\Renderer\RichRenderer::$folder = false;

function kd(...$vars)
{
    Kint::dump(...$vars);
    exit;
}

function sd(...$vars)
{
    s(...$vars);
    exit;
}
