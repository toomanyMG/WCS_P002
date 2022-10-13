<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $loadCapacity;
    private int $currentLoad;


    public function __construct(int $loadCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->loadCapacity = $loadCapacity;
        parent::__construct($color, $nbSeats, $energy);
    }


    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function isFull(): string
    {
        if ($this->currentLoad === $this->loadCapacity) {
            return 'Full ' . '(' . $this->currentLoad . ' / ' . $this->loadCapacity . ')';
        } elseif ($this->currentLoad > $this->loadCapacity) {
            return 'Overload of ' . ($this->currentLoad - $this->loadCapacity) . '.'  . ' You cant place ' . $this->currentLoad . '. The truck as a max capcity of ' . $this->loadCapacity;
        } elseif ($this->currentLoad < 0) {
            return ' ERROR Non-Authorized value : ' . ' " ' . $this->currentLoad . ' " . ' . ' Please insert an authorized value.';
        } else {
            return 'In filling ' . '(' . $this->currentLoad . ' / ' . $this->loadCapacity . ')';
        }
    }

    public function unLoad(int $unLoad): void
    {
        $this->currentLoad = $this->currentLoad - $unLoad;
    }
}
