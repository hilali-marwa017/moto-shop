# 🏍️ MotoShop — Application de Gestion d'Annonces Motos

Application web full-stack de gestion d'annonces de motos développée avec Laravel 12 et Bootstrap 5.

## ✨ Fonctionnalités

- 📊 Dashboard avec statistiques (total, disponibles, vendues, prix moyen)
- ➕ Ajouter / Modifier / Supprimer une annonce
- 📸 Upload de photos
- 🔍 Filtrage par type, ville et statut
- 🔀 Changement de statut (disponible / vendue)
- 📱 Interface responsive

## 🛠️ Technologies

- Laravel 12
- PHP 8.2
- MySQL
- Bootstrap 5
- Bootstrap Icons
- Vite

## ⚙️ Installation
```bash
git clone https://github.com/hilali-marwa017/moto-shop.git
cd moto-shop
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Configurer `.env` :
```
DB_DATABASE=moto_shop
DB_USERNAME=root
DB_PASSWORD=
```
```bash
php artisan migrate --seed
php artisan storage:link
npm run dev
php artisan serve
```

## 📬 Contact

- 📧 hilalimarwa017@gmail.com
- 💼 [LinkedIn](https://www.linkedin.com/in/marwa-hilali)
- 🐙 [GitHub](https://github.com/hilali-marwa017)
