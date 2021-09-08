<?php

namespace Patterns\StructuralPatterns\Facade;

class HomeTheaterFacade {
    private JalousieSystem $jalousieSystem;
    private AudioSystem $audioSystem;
    private VideoSystem $videoSystem;

    public function __construct(JalousieSystem $jalousieSystem, AudioSystem $audioSystem, VideoSystem $videoSystem)
    {
        $this->jalousieSystem = $jalousieSystem;
        $this->audioSystem = $audioSystem;
        $this->videoSystem = $videoSystem;
    }

    /**
     * @return JalousieSystem
     */
    public function getJalousieSystem(): JalousieSystem
    {
        return $this->jalousieSystem;
    }

    /**
     * @return AudioSystem
     */
    public function getAudioSystem(): AudioSystem
    {
        return $this->audioSystem;
    }

    /**
     * @return VideoSystem
     */
    public function getVideoSystem(): VideoSystem
    {
        return $this->videoSystem;
    }

    public function playFilm(string $film): void
    {
        $this->jalousieSystem->close();
        $this->audioSystem->turnOn();
        $this->audioSystem->setVolumePercent(30);
        $this->videoSystem->setFilm($film);
    }
}