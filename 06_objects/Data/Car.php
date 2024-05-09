<?php
declare(strict_types=1);

namespace Data;


class Car
{
    private string $model;
    private Engine $engine;
    private Cargo $cargo;

    public function __construct(string $model, Engine $engine, Cargo $cargo)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

    public function getCargo(): Cargo
    {
        return $this->cargo;
    }
}
