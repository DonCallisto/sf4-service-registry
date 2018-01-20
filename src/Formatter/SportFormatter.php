<?php

declare(strict_types=1);

namespace App\Formatter;

use App\Model\SportPlayer;

interface SportFormatter
{
    /**
     * @param SportPlayer $player
     *
     * @return string
     */
    public function format(SportPlayer $player): string;

    /**
     * @return string
     */
    public function playerFQCN(): string;
}