<?php
class Cat {
    private string $name;
    private int $age;
    private string $color;

    public function setname(string $name): void {
        $this ->name = $name;
    }

    // Getter for name
    public function getname(): string {
        return $this->name;
    }
}