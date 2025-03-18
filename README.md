# TouriStay 2030

TouriStay 2030 is a platform designed to simplify the rental of homes and apartments, providing an easy and quick solution for tourists attending the 2030 World Cup events in Morocco, Spain, and Portugal.

## Objective

The goal of this project is to lay the foundations for the platform, focusing on authentication, listing management, and accommodation search.

---

## Phase 1

### User Stories

- 🔑 **As a user** (owner or tourist), I want to be able to register and authenticate securely to access my personal space.
- 👤 **As a user**, I want to be able to view and update my personal profile.
- 🏡 **As an owner**, I want to be able to create a listing with location, price, amenities, and availability.
- 📂 **As an owner**, I want to be able to modify or delete my listings to keep my offerings up-to-date.
- 📌 **As a tourist**, I want to browse different accommodation listings with dynamic pagination (4, 10, or 25 listings per page) to adapt to my browsing preferences.
- 🔍 **As a tourist**, I want to search for accommodations based on city and availability dates to find a suitable place quickly.
- ⭐ **As a tourist**, I want to be able to save listings to my favorites for easy reference later.
- 🗑️ **As an administrator**, I want to be able to delete inappropriate or fraudulent listings to ensure the safety of the platform.
- 📊 **As an administrator**, I want a statistics section to track the number of registrations, rentals, and active listings.

### Technical Features

- ✅ Secure authentication with Laravel.
- ✅ CRUD (Create, Read, Update, Delete) for listings.
- ✅ Advanced search system (filters by city and date).
- ✅ User profile management.
- ✅ Simple and responsive user interface.

---

## Phase 2

### User Stories

- 📅 **As a tourist**, I want to choose my arrival and departure dates via an interactive calendar, showing only real-time availability.
- ⏳ **As an owner**, I want to manage my availability periods and track reservations.
- 🏡 **As an owner**, I want to be notified when a tourist books one of my properties.
- 💳 **As a tourist**, I want to be able to pay for my reservation securely on the platform via a payment system (Stripe or PayPal in test mode).
- 📧 **As a tourist**, I want to receive a confirmation email after payment, containing a summary of my reservation and the owner's contact information.
- 📄 Alternatively, I want to download my invoice after payment containing the reservation summary and owner's contact information via **FPDF**.
- 📊 **As an administrator**, I want to track payments and reservations through a dashboard.

### Technical Features

- ✅ Date management with Carbon to ensure reservations don't overlap.
- ✅ Advanced backend validation for fields (dates, emails, phone numbers, etc.).
- ✅ Integration of Stripe (test mode) or PayPal for secure payment.
- ✅ Automated confirmation email after a reservation.
- ✅ Dashboard for managing payments and reservations.

---

## Livrables du projet **TouriStay 2030**

### **Livrable PHASE 1** à livrer avant **28/02/2025 à 23:59** :

- **Lien de la planification des tâches (Jira)** :  
  [Accéder à la planification Jira Phase 1](https://mhamde.atlassian.net/jira/software/projects/TS30/boards/48?atlOrigin=eyJpIjoiM2RhNzRkMDhhNWQ0NDMyZDk3MDI5NTQ0MWFjNDAwMjAiLCJwIjoiaiJ9)

- **Lien vers le repository GitHub contenant** :  
  [Repository GitHub - TouriStay 2030](https://github.com/MhamedOuhanane/TouriStay_2030.git)
  - Le code source du site web avec tous les fichiers nécessaires.
  - Les diagrammes UML :
    - Diagrammes de cas d'utilisation.
    - Diagramme de classes.
    - Diagramme d'activité *(Optionnel)*.

- **Lien de la présentation** :  
  (À ajouter après la création de la présentation)

---

## **Livrable PHASE 2** à livrer avant **07/03/2025 à 23:59** :

- **Lien de la planification des tâches (Jira)** :  
  [Accéder à la planification Jira Phase 2](https://mhamde.atlassian.net/jira/software/projects/TS30/boards/48?atlOrigin=eyJpIjoiM2RhNzRkMDhhNWQ0NDMyZDk3MDI5NTQ0MWFjNDAwMjAiLCJwIjoiaiJ9)

- **Lien vers le repository GitHub contenant** :  
  [Repository GitHub - TouriStay 2030](https://github.com/MhamedOuhanane/TouriStay_2030.git)
  - Le code source du site web avec tous les fichiers nécessaires.
  - Les diagrammes UML :
    - Diagrammes de cas d'utilisation.
    - Diagramme de classes.

---