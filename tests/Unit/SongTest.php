<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Practicals\Song;

class SongTest extends TestCase
{
    /** @var Song */
    private $track;

    protected function setUp(): void
    {
        parent::setUp();
        $this->track = new Song();
    }

    public function testSetTempo(): void
    {
        $this->track->setTempo(60);
        $this->assertEquals(60, $this->track->getTempo());
    }

    public function testSetTempoAcceptsIntegerString(): void
    {
        $this->track->setTempo("60");
        $this->assertEquals(60, $this->track->getTempo());
    }

    public function testSetTempoRejectsAlphabetString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->track->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->track->setTempo(60.5);
    }
}
