<?php

namespace Code;

class produto
{
    private $name;
    private $price;
    private $slug;

    public function getName()
    {
        return $this->name;
    }

    public function setname($name): void
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug): void
    {
        if (!$slug) {
            throw new \InvalidArgumentException('Parâmetro inválido, informe um slug');
        }
        $this->slug = $slug;
    }
}
