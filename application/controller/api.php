<?php
declare(strict_types=1);

namespace application\controller;

class Api extends Controller
{
    public function Hello(string $name): void
    {
        $data = [
            'name' => $name,
        ];
        $this->json($data);
    }
}
