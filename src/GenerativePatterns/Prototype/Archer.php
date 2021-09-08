<?php

namespace Patterns\GenerativePatterns\Prototype;

class Archer {
    private \DateTime $birthDate;
    private int $height;
    private int $weight;
    private int $skill;

    public function __construct()
    {
        $this->birthDate = new \DateTime();
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param  \DateTime  $birthDate
     */
    public function setBirthDate(\DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param  int  $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param  int  $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getSkill(): int
    {
        return $this->skill;
    }

    /**
     * @param  int  $skill
     */
    public function setSkill(int $skill): void
    {
        $this->skill = $skill;
    }
}
