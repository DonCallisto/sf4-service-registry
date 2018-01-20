<?php

declare(strict_types=1);

namespace App\Formatter;

use App\Model\NBAPlayer;
use App\Model\SportPlayer;

class NBAFormatter implements SportFormatter
{
    /**
     * @param SportPlayer|NBAPlayer $player
     *
     * @return string
     */
    public function format(SportPlayer $player): string
    {
        return sprintf(
            'I play for %s in the %s. I made %s points, %s assists and %s rebounds!',
            $player->getFranchise(),
            $player->getConference(),
            $player->getPoints(),
            $player->getAssists(),
            $player->getRebounds()
        );
    }

    /**
     * @return string
     */
    public function playerFQCN(): string
    {
        return NBAPlayer::class;
    }
}