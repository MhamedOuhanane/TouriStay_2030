Voici un **cahier des charges** sous forme de fichier README pour le projet **TouriStay 2030** :

---

# **TouriStay 2030**

TouriStay 2030 est une plateforme dédiée à la location de maisons et d'appartements pour les touristes venant assister aux événements du **Mondial 2030 "Morocco-Spain-Portugal"**. Le projet vise à créer une solution simple et rapide pour faciliter la réservation d’hébergement pendant la période de l’événement.

## **Contexte du projet**

Le Mondial 2030 aura lieu dans trois pays : le Maroc, l'Espagne et le Portugal. En prévision de cet événement, il est essentiel de mettre en place une plateforme fiable pour la location de logements. **TouriStay 2030** permet aux propriétaires de publier leurs annonces et aux touristes de trouver facilement un hébergement adapté à leurs besoins.

---

## **Objectif du projet**

L’objectif est de poser les bases de la plateforme, en commençant par l'authentification des utilisateurs, la gestion des annonces et la recherche d'hébergements. La plateforme offrira une interface sécurisée et fonctionnelle pour les propriétaires et les touristes.

---

## **PHASE 1**

### **User Stories**

- **Authentification sécurisée :**  
  En tant qu'utilisateur (propriétaire ou touriste), je veux pouvoir m’inscrire sur la plateforme et m’authentifier en toute sécurité pour accéder à mon espace personnel.

- **Gestion du profil utilisateur :**  
  En tant qu’utilisateur, je veux pouvoir consulter mon profil et modifier mes informations personnelles.

- **Gestion des annonces pour les propriétaires :**  
  En tant que propriétaire, je veux pouvoir publier une annonce en indiquant la localisation, le prix, les équipements et les disponibilités.  
  En tant que propriétaire, je veux pouvoir modifier ou supprimer mes annonces pour garder mon offre à jour.

- **Recherche d’hébergements pour les touristes :**  
  En tant que touriste, je veux pouvoir explorer les différentes offres d’hébergement avec une pagination dynamique, permettant de choisir le nombre d’annonces affichées par page (4, 10, 25).  
  En tant que touriste, je veux pouvoir rechercher des hébergements par ville et date de disponibilité pour trouver un logement adapté à mon séjour.

- **Favoris pour les touristes :**  
  En tant que touriste, je veux pouvoir enregistrer des annonces en favoris pour les retrouver facilement plus tard.

- **Gestion des annonces par l’administrateur :**  
  En tant qu’administrateur, je veux pouvoir supprimer des annonces inappropriées ou frauduleuses pour garantir la sécurité de la plateforme.

- **Statistiques pour l’administrateur :**  
  En tant qu’administrateur, je veux avoir une section de statistiques pour suivre le nombre d’inscriptions, de locations et d’annonces actives.

---

### **Fonctionnalités techniques**

- **Authentification sécurisée** avec Laravel.
- **CRUD (Create, Read, Update, Delete)** pour gérer les annonces.
- **Système de recherche avancé** (filtres par ville et par date).
- **Gestion des profils utilisateurs.**
- **Interface simple et responsive** pour une expérience utilisateur fluide.

---

## **PHASE 2**

### **User Stories**

- **Gestion des dates pour les touristes :**  
  En tant que touriste, je veux pouvoir choisir mes dates d’arrivée et de départ via un calendrier interactif, en affichant uniquement les disponibilités mises à jour en temps réel.

- **Gestion des périodes de disponibilité pour les propriétaires :**  
  En tant que propriétaire, je veux pouvoir gérer mes périodes de disponibilité et suivre mes réservations.

- **Notifications pour les propriétaires :**  
  En tant que propriétaire, je veux être notifié lorsqu’un touriste effectue une réservation sur l’un de mes hébergements.

- **Système de paiement sécurisé pour les touristes :**  
  En tant que touriste, je veux pouvoir payer ma réservation directement sur la plateforme via un système sécurisé (Stripe ou PayPal en mode test).

- **Confirmation de réservation par email :**  
  En tant que touriste, je veux recevoir un email de confirmation après paiement, contenant le récapitulatif de ma réservation et les coordonnées du propriétaire.

- **Téléchargement de la facture après paiement :**  
  En tant que touriste, je veux pouvoir télécharger ma facture après paiement, contenant le récapitulatif de ma réservation et les coordonnées du propriétaire.

- **Tableau de bord pour l’administrateur :**  
  En tant qu’administrateur, je veux pouvoir suivre les paiements et les réservations sur un tableau de bord.

---

### **Fonctionnalités techniques**

- **Gestion des dates** avec Carbon pour s’assurer que les réservations ne se chevauchent pas.
- **Validation avancée des champs backend** (dates, email, numéro de téléphone, etc.).
- **Intégration de Stripe ou PayPal** pour un paiement sécurisé.
- **Envoi automatique d’emails de confirmation** après une réservation.
- **Mise en place d’un tableau de bord** pour le suivi des réservations et paiements.

---

## **Technologies utilisées**

- **Framework :** Laravel
- **Base de données :** MySQL / PostgreSQL
- **Système de paiement :** Stripe / PayPal
- **Librairie de gestion des dates :** Carbon
- **Gestion des emails :** Mailtrap / SMTP
- **PDF :** FPDF pour la génération de factures

---

