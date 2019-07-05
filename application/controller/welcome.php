<?php
declare(strict_types=1);

namespace application\controller;

class Welcome extends Controller
{
    public function Hello(string $name): void
    {
        $data = [
            'name' => $name,
        ];
        return $this->html($data);
    }
}
