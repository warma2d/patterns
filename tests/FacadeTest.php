<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Facade\AudioSystem;
use Patterns\StructuralPatterns\Facade\HomeTheaterFacade;
use Patterns\StructuralPatterns\Facade\JalousieSystem;
use Patterns\StructuralPatterns\Facade\VideoSystem;
use PHPUnit\Framework\TestCase;

final class FacadeTest extends TestCase
{
    private const FILM_NAME = 'Spider Man';

    public function testSpiderManFilm(): void
    {
        $jalousie = new JalousieSystem();
        $audio = new AudioSystem();
        $video = new VideoSystem();

        $jalousie->close();
        $audio->turnOn();
        $audio->setVolumePercent(30);
        $video->setFilm(self::FILM_NAME);

        $this->assertEquals(
            false,
            $jalousie->isOpened()
        );

        $this->assertEquals(
            30,
            $audio->getVolumePercent()
        );

        $this->assertEquals(
            self::FILM_NAME,
            $video->getFilm()
        );
    }

    public function testFacadeSpiderManFilm(): void
    {
        $jalousie = new JalousieSystem();
        $audio = new AudioSystem();
        $video = new VideoSystem();
        $homeTheatreFacade = new HomeTheaterFacade($jalousie, $audio, $video);

        $homeTheatreFacade->playFilm(self::FILM_NAME);

        $this->assertEquals(
            false,
            $homeTheatreFacade->getJalousieSystem()->isOpened()
        );

        $this->assertEquals(
            30,
            $homeTheatreFacade->getAudioSystem()->getVolumePercent()
        );

        $this->assertEquals(
            self::FILM_NAME,
            $homeTheatreFacade->getVideoSystem()->getFilm()
        );
    }
}
