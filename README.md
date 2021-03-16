# Webstart Bar

Exam webstart_bar

## Phase de conception

### Application site vitrine

- Users story, use cases, cas d'utilisation
- Anglais
- MCD
- Le langage de programmation: PHP, HTML, CSS, JS
- Framework: From Scratch

### 2 parties:

- Site vitrine - Front-office

### MVP: Minimum Viable Product

#1 En tant qu'utilisateur, je souhaite pouvoir naviguer dans les différentes pages du site vitrine (Accueil, Cartes, Serveurs)
#2 En tant qu'utilisateur, je souhaite pouvoir accéder à la liste des cartes disponibles
#3 En tant qu'utilisateur, je souhaite pouvoir accéder à une carte afin de consulter les boissons de celle-ci (triées par catégorie)
#4 En tant qu'utilisateur, je souhaite pouvoir accéder à une fiche boisson afin de consulter les détails de celle-ci (si cocktail, la composition)
#5 En tant qu'utilisateur, je souhaite pouvoir accéder à la liste des serveurs de l'établissement
#6 En tant qu'utilisateur, je souhaite pouvoir accéder à une fiche serveur afin de consulter les détails de celui-ci

#7 En tant que "VIP", je souhaite accéder à un espace caché afin de gérer le statut de mes cartes

### MCD

#### Drink Entity

Id
Title
Description
Price
Vta
Active
Created_at
Updated_at
Deleted_at

#### Drink_has_category

Drink_id
Category_id

#### Category Entity

Id
Title
Description
Active
Created_at
Updated_at
Deleted_at

#### Card Entity

Id
Title
Description
Active
Created_at
Updated_at
Deleted_at

#### Card_has_drink

Card_id
Drink_id

#### Server Entity

Id
Lastname
Firstname
Age
Description
Active
Schedule
Created_at
Updated_at
Deleted_at

#### Drink_has_ingredient

Drink_id
Quantity
Unit
Ingredient

## Infos

### TVA

- Non alcoolisé et conservable : 5.5%
- Non alcoolisé et consommation directe : 10%
- Reste : 20%