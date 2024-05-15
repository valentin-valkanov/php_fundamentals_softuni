<?php
declare(strict_types=1);

namespace App\Objects\Data;
class CargoFactory
{
        public function create(int $weight, string $type): Cargo
        {
            return new Cargo($weight, $type);
        }
}