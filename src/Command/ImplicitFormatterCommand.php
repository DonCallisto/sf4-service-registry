<?php

declare(strict_types=1);

namespace App\Command;

use App\Formatter\Formatter;
use App\Model\NBAPlayer;
use App\Model\SoccerPlayer;
use App\Model\SportPlayer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImplicitFormatterCommand extends Command
{
    /**
     * @var Formatter
     */
    private $formatter;

    /**
     * @param Formatter $formatter
     */
    public function __construct(Formatter $formatter)
    {
        parent::__construct();
        $this->formatter = $formatter;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:implicit-format')
            ->setDescription('Format sport players');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $players = $this->createPlayers();

        foreach ($players as $player) {
            $output->write(sprintf('Hi, my name is %s %s', $player->getName(), $player->getSurname()));
            $output->write(PHP_EOL);
            $output->write($this->formatter->format($player));
            $output->write(PHP_EOL);
            $output->write(PHP_EOL);
        }
    }

    /**
     * @return SportPlayer[]
     */
    private function createPlayers(): array
    {
        $players[] = new SoccerPlayer('Paolo', 'Maldini', 'AC Milan', 29);
        $players[] = new NBAPlayer('Wilt', 'Chamberlain', 'LA Lakers', 'Western', 31419, 4643, 23924);

        return $players;
    }
}