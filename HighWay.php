<?php

abstract class HighWay {

    protected $currentVehicles;

    protected $nbLane;

    protected $maxSpeed;

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed )
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;

    }
    public function getNbLane(): int
    {
        return $this->NbLane;

    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;

    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicle = $currentVehicles;

    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;

    }
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;

    }

    abstract public function addVehicle();

}