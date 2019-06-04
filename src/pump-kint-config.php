<?php

Kint::$aliases[] = 'dd';
Kint::$enabled_mode = (bool)getenv('DEV_MODE');
Kint\Renderer\RichRenderer::$folder = false;

function dd(...$vars)
{
    if (Kint::$enabled_mode === false) {
        return;
    }

    Kint::dump(...$vars);
    exit;
}
