<?php

declare(strict_types=1);

namespace App\Formatter;

use App\Model\SoccerPlayer;
use App\Model\SportPlayer;

class SoccerFormatter implements SportFormatter
{
    /**
     * @param SportPlayer|SoccerPlayer $player
     *
     * @return string
     */
    public function format(SportPlayer $player): string
    {
        return sprintf('I play for %s and I made %s goals!', $player->getTeam(), $player->getGoals());
    }

    /**
     * @return string
     */
    public function playerFQCN(): string
    {
        return SoccerPlayer::class;
    }
}