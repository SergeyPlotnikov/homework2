<?php declare(strict_types = 1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    private $emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];

    public function generate(): \Generator
    {
        yield from $this->emoji;
    }
}