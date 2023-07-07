<?php

declare(strict_types = 1);

namespace Hypefactors\CodeStandards;

use Composer\Plugin\Capability\CommandProvider;

class CodingStandardsCommandProvider implements CommandProvider
{
    public function getCommands(): array
    {
        return [
            new GenerateCommand(),
        ];
    }
}
