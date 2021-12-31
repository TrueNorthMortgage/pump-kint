<?php

use Kint\Kint;
use Kint\Renderer\RichRenderer;

Kint::$aliases[] = 'dd';
Kint::$aliases[] = 'sd';
RichRenderer::$folder = false;

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
