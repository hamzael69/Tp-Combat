<?php

abstract class Character
{
        protected string $pseudo;
        protected int $attack;
        protected int $hp;

        public function __construct(string $pseudo, int $attack,  int $hp)
        {
                $this->pseudo = $pseudo;
                $this->attack = $attack;
                $this->hp = $hp;
        }

        /**
         * Get the value of pseudo
         */
        public function getPseudo()
        {
                return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         *
         * @return  self
         */
        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

                return $this;
        }

        /**
         * Get the value of hp
         */
        public function getHp()
        {
                return $this->hp;
        }

        /**
         * Set the value of hp
         *
         * @return  self
         */
        public function setHp($hp)
        {
                $this->hp = $hp;

                return $this;
        }

        /**
         * Get the value of attack
         */
        public function getAttack()
        {
                return $this->attack;
        }

        /**
         * Set the value of attack
         *
         * @return  self
         */
        public function setAttack($attack)
        {
                $this->attack = $attack;

                return $this;
        }

        public function hit(Character $target)
        {
    
            if($target->getHp() - 15 <= 0){
                $target->setHp(0);
            } else {
                $target->setHp($target->getHp() - 15);
            }
}
}