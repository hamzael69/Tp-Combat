<?php

final class UserRepository extends AbstractRepository
{
    private HeroRepository $heroRepository;

    public function __construct()
    {
        parent::__construct();
        $this->heroRepository = new HeroRepository();
    }


    public function findByPseudo(string $pseudo): ?User
    {
     
        $stmt = $this->pdo->prepare("SELECT * FROM `user` WHERE pseudo = :pseudo");
        $stmt->execute([
            ':pseudo' => $pseudo
        ]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        // $userData = $stmt->fetch();


        if (!$userData) {
            return null;
        }

        if($userData['id_chosen_hero'] !== 0){
            $chosenHero = $this->heroRepository->findChosenHeroById($userData['id_chosen_hero']);
            $userData['id_chosen_hero'] = $chosenHero;
        } else {
            $userData['id_chosen_hero'] = null;
        }

        return UserMapper::mapToObject($userData);
    }

    public function createUser( User $user, int $idHero): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO user (pseudo, id_chosen_hero) VALUES (:pseudo, :id_chosen_hero)");
        $stmt->execute([
            'pseudo' => $user->getPseudo(),
            'id_chosen_hero' => $idHero,
        ]);
    }

    public function update(User $user): void
    {
        $stmt = $this->pdo->prepare("UPDATE `user` SET `id_chosen_hero`=:id_chosen_hero WHERE id = :id");
        $stmt->execute([
            ':id_chosen_hero' => $user->getChosenHero()->getId(),
            ':id' => $user->getId()
        ]);
    }

    public function updateHp(int $id, int $hp): void
    {
        $sql = "UPDATE hero SET hp = :hp WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'hp' => $hp,
            'id' => $id
        ]);
    }
}
