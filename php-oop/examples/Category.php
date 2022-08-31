<?php

class Category {

    private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $value): void {
        $this->name = $value;
    }

}