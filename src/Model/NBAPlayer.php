<?php

declare(strict_types=1);

namespace App\Model;

class NBAPlayer implements SportPlayer
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
    private $franchise;

    /**
     * @var string
     */
    private $conference;

    /**
     * @var int
     */
    private $points;

    /**
     * @var int
     */
    private $assists;

    /**
     * @var int
     */
    private $rebounds;

    /**
     * @param string $name
     * @param string $surname
     * @param string $franchise
     * @param string $conference
     * @param int $points
     * @param int $assists
     * @param int $rebounds
     */
    public function __construct(string $name, string $surname, string $franchise, string $conference, int $points, int $assists, int $rebounds)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->franchise = $franchise;
        $this->conference = $conference;
        $this->points = $points;
        $this->assists = $assists;
        $this->rebounds = $rebounds;
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
    public function getFranchise(): string
    {
        return $this->franchise;
    }

    /**
     * @return string
     */
    public function getConference(): string
    {
        return $this->conference;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getAssists(): int
    {
        return $this->assists;
    }

    /**
     * @return int
     */
    public function getRebounds(): int
    {
        return $this->rebounds;
    }
}