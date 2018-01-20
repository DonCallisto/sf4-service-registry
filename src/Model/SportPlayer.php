<?php

declare(strict_types=1);

namespace App\Model;

interface SportPlayer
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getSurname(): string;
}