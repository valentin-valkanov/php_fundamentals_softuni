<?php
declare(strict_types=1);

namespace Data;
class CargoFactory
{
        public function create(int $weight, string $type): Cargo
        {
            return new Cargo($weight, $type);
        }
}