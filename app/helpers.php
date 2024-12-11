<?php

function get_variable_memory($variable): string
{
    $total_memory = memory_get_usage(true);
    $tmp = unserialize(serialize($variable));

    $mbs = (memory_get_usage(true) - $total_memory) / (1024 * 1024);
    return "$mbs MB";
}

function get_memory(): string
{
    $mbs = memory_get_usage(true) / (1024 * 1024);
    return "$mbs MB";
}
