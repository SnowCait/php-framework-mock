<?php
class Welcome
{
    public function Hello(string name): void {
        $ary = [
            'name' => $name,
        ];
        return $this->json($ary);
    }
}
