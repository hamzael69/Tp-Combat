<?php

final class HeroRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }


    public function findAll(): array
    {
        $sql = "SELECT * FROM hero";
        $stmt = $this->pdo->query($sql);
        $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $heroes = [];

        foreach($heroDatas as $heroData){
            $heroes[] = HeroMapper::mapToObject($heroData);
        }

        return $heroes;
    }

    public function find(int $id): ?Hero
    {
        $sql = "SELECT * FROM hero WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $heroData = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$heroData) {
            return null;
        }

        return HeroMapper::mapToObject($heroData);
    }

    public function findChosenHeroById(int $id): ?Hero
    {
        $sql = "SELECT * FROM chosen_hero WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $chosenHeroData = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$chosenHeroData) {
            return null;
        }

        return HeroMapper::mapToObject($chosenHeroData);
    }



    public function create(Hero $hero): Hero
    {
        $sql = "INSERT INTO `chosen_hero`(`pseudo`, `skinPath`, `attack`, `hp`) VALUES (:pseudo , :skinPath, :attack, :hp)";


        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':pseudo' => $hero->getPseudo(),
            ':skinPath' => $hero->getSkinPath(),
            ':attack' => $hero->getAttack(),
            ':hp' => $hero->getHp()
        ]);
        
        $chosenHero = $this->findChosenHeroById($this->pdo->lastInsertId());

        if(!$chosenHero) {
            return null;
        }

        return $chosenHero;
    }


    public function updateHp(int $id, int $hp): void
    {
        $sql = "UPDATE chosen_hero SET hp = :hp WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'hp' => $hp,
            'id' => $id
        ]);
    }
}