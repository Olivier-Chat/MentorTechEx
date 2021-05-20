<?php

require 'Character.php';
class Arena
{
    private Character $character1;
    private Character $character2;

    public function __construct(Character $character1, Character $character2)
    {
        $this->character1 = $character1;
        $this->character2 = $character2;
    }

    public function fight() :string
    {
        while($this->character1->getLife() > 0 && $this->character2->getLife() > 0) {
            $damage1 = rand(0,$this->character1->getAttack());
            $damage2 = rand(0,$this->character2->getAttack());
            $this->character1->setLife($this->character1->getLife()-$damage2);
            echo $this->character2->getName() . 'a attaqué ';
            echo $this->character1->getName() . PHP_EOL;
            echo 'Son attaque a eu une puissance de ' . $damage2 .PHP_EOL;
            echo $this->character1->getName() . ' n\'a plus que ' . $this->character1->getLife() . ' points de vie' . PHP_EOL;
                $this->character2->setLife($this->character2->getLife()-$damage1);
            echo $this->character1->getName(). 'a attaqué ';
            echo $this->character2->getName() . PHP_EOL;
            echo 'Son attaque a eu une puissance de ' . $damage1 .PHP_EOL;
            echo $this->character2->getName() . ' n\'a plus que ' . $this->character2->getLife() . ' points de vie' . PHP_EOL;
        }
        $result =  ($this->character1->getLife() <= 0)? $this->character1->getName(): $this->character2->getName();
        return $result . ' est mort' .PHP_EOL;
    }
}