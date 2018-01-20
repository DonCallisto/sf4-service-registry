<?php

declare(strict_types=1);

namespace App\Formatter;

use App\Model\SportPlayer;

class Formatter
{
    private $formatters = [];

    /**
     * @param SportFormatter $formatter
     *
     * @return Formatter
     */
    public function addFormatter(SportFormatter $formatter): self
    {
        $this->formatters[$formatter->playerFQCN()] = $formatter;

        return $this;
    }

    /**
     * @param SportPlayer $player
     *
     * @return string
     */
    public function format(SportPlayer $player): string
    {
        $formatter = $this->getFormatter($player);

        return $formatter->format($player);
    }

    /**
     * @param SportPlayer $player
     *
     * @return SportFormatter
     */
    private function getFormatter(SportPlayer $player): SportFormatter
    {
        if (!isset($this->formatters[get_class($player)])) {
            throw new \RuntimeException('No formatters setted for %s player', get_class($player));
        }

        return $this->formatters[get_class($player)];
    }
}