<?php


class Character
{
    private string $name;
    private int $life;
    private int $attack;

    public function __construct(string $name,int $life,int $attack)
    {
       $this->setName($name);
       $this->setLife($life);
       $this->setAttack($attack);
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = ucfirst($name);
    }


    public function getLife(): int
    {
        return $this->life;
    }

     public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }



}