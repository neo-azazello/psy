<?php

namespace App\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ConvertToSeconds extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('toSeconds', [$this, 'toSeconds']),
        ];
    }

    public function toSeconds(string $hours)
    {
        $str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $hours);
        sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
        $time_seconds = $hours * 3600 + $minutes * 60 + $seconds;

        return $time_seconds;
    }
}
