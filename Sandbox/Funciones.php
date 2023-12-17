<?php

function displayArrayElements($var)
{
    echo "<pre style='background-color: #f5f5f5; padding: 15px; border-radius: 5px;'>";
    foreach ($var as $element) {
        echo "<div style='background-color: #e0e0e0; margin-bottom: 5px; padding: 5px; border-radius: 3px;'>";
        var_dump($element);
        echo "</div>";
    }
    echo "</pre>";
}

function displayDebugInfo($var, $varName = 'data')
{
    echo "<pre style='background-color: #f5f5f5; padding: 15px; border-radius: 5px;'>";
    echo "<code style='font-family: Consolas, monospace;'>";
    highlight_string("<?php\n\$$varName = " . var_export($var, true) . ";\n?>");
    echo "</code>";
    echo "</pre>";
}
