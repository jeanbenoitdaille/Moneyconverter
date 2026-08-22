# Money Converter

Exercice PHP de conversion d’un montant en euros vers plusieurs valeurs monétaires à l’aide de taux fixes.

## Objectif pédagogique

Manipuler :

- les constantes avec `define()` ;
- les variables numériques ;
- les multiplications ;
- la concaténation de chaînes ;
- l’affichage avec `echo`.

## Fonctionnement

Le script utilise un montant fixe de `3.12` euros et applique trois constantes :

- `DOLLAR_RATE = 1.08` ;
- `YEN_RATE = 120.34` ;
- `BITCOIN_RATE = 0.00016`.

Il affiche ensuite les valeurs obtenues en dollars, yens et bitcoins.

## Limites historiques

Les taux sont codés en dur et ne proviennent d’aucune API ou source financière en temps réel. Ce dépôt ne doit donc pas être utilisé comme convertisseur de devises réel ou comme référence de cours actuels.

## Fichier principal

`index.php`

## Exécution

Exécuter le fichier avec PHP, par exemple :

```bash
php index.php
```

## Statut

Exercice d’apprentissage historique.

## Consolidation prévue

Candidat à une future fusion dans `learning-php/basics/constants-and-calculations/`.
