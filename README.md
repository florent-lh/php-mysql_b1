# PHP & MySQL - Bases fondamentales
**Cours B1 Développement - Digital Campus Paris**

## 📋 Description
Ce repository contient les ressources et exercices pratiques pour découvrir les bases du développement web avec **PHP** et **MySQL**. Destiné aux étudiants de première année, ce cours couvre les fondamentaux nécessaires pour créer des applications web dynamiques.

## 🎯 Objectifs pédagogiques
À l'issue de ce cours, vous serez capables de :
- Comprendre la syntaxe de base du PHP
- Manipuler les variables, conditions et boucles
- Créer et gérer une base de données MySQL
- Réaliser des opérations CRUD (Create, Read, Update, Delete)
- Connecter PHP à une base de données MySQL
- Développer une application web simple avec interaction BDD

## 📚 Programme
### **Module 1 : Introduction à PHP**
- Variables et types de données
- Conditions et structures de contrôle
- Boucles et fonctions
- Manipulation des formulaires

### **Module 2 : Bases de données MySQL**
- Concepts fondamentaux des BDD relationnelles
- Création de tables et relations
- Requêtes SELECT, INSERT, UPDATE, DELETE
- Jointures simples

### **Module 3 : PHP & MySQL**
- Connexion à la base de données (PDO)
- Requêtes préparées et sécurité
- Affichage des données
- Formulaires et traitement des données

### **Module 4 : Projet pratique**
- Application CRUD complète
- Gestion des erreurs
- Bonnes pratiques de développement

## 🛠️ Prérequis techniques
- **Serveur local** : XAMPP, WAMP ou MAMP
- **Éditeur de code** : VS Code recommandé
- **Navigateur web** moderne
- **Git** installé sur votre machine
- **Base** : HTML/CSS acquise

## 🚀 Installation

### Étape 1 : Créer le dossier dans votre serveur local
1. Localisez le dossier de votre serveur local :
   - **XAMPP** : `C:\xampp\htdocs\` (Windows) ou `/Applications/XAMPP/htdocs/` (Mac)
   - **WAMP** : `C:\wamp64\www\`
   - **MAMP** : `/Applications/MAMP/htdocs/`

2. Créez un dossier nommé `php-mysql` dans ce répertoire

### Étape 2 : Initialiser Git dans le dossier
Ouvrez un terminal et naviguez vers le dossier créé :
```bash
# Windows (XAMPP)
cd C:\xampp\htdocs\php-mysql

# Mac (XAMPP)
cd /Applications/XAMPP/htdocs/php-mysql

# Windows (WAMP)
cd C:\wamp64\www\php-mysql

# Mac (MAMP)
cd /Applications/MAMP/htdocs/php-mysql
```

Puis initialisez Git :
```bash
git init
```

### Étape 3 : Cloner le repository
```bash
git remote add origin [URL_DU_REPO]
git pull origin main
```

**OU** si vous partez de zéro :
```bash
git init
git remote add origin [URL_DU_REPO]
```

### Étape 4 : Démarrer votre serveur local
- Lancez XAMPP/WAMP/MAMP
- Démarrez les services **Apache** et **MySQL**

### Étape 5 : Tester l'installation
- Ouvrez votre navigateur
- Accédez à `http://localhost/php-mysql`
- Vous devriez voir la page d'accueil du projet

## 📖 Ressources complémentaires
- [Documentation PHP officielle](https://php.net)
- [Guide MySQL](https://dev.mysql.com)
- [W3Schools PHP Tutorial](https://w3schools.com/php)
- [PDO Documentation](https://php.net/manual/fr/book.pdo.php)

## 📝 Notes importantes
- Respectez les bonnes pratiques de sécurité (requêtes préparées)
- Commentez votre code pour faciliter la compréhension
- Testez régulièrement vos développements
- N'hésitez pas à poser des questions pendant les séances

---