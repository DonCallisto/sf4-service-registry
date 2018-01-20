<?php

declare(strict_types=1);

namespace App\Model;

class SoccerPlayer implements SportPlayer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $team;

    /**
     * @var int
     */
    private $goals;

    /**
     * @param string $name
     * @param string $surname
     * @param string $team
     * @param int $goals
     */
    public function __construct(string $name, string $surname, string $team, int $goals)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->team = $team;
        $this->goals = $goals;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getTeam(): string
    {
        return $this->team;
    }

    /**
     * @return int
     */
    public function getGoals(): int
    {
        return $this->goals;
    }
}