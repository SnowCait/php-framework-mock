<?php
class Welcome extends Controller
{
    public function Hello(string name): void {
        $ary = [
            'name' => $name,
        ];
        return $this->json($ary);
    }
}
