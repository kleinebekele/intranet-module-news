# Intranet-Modul: Neuigkeiten (`intranet/module-news`)

Ein Beispiel-/Referenzmodul für die [Intranet-Plattform](../intranet-core). Es zeigt
den vollständigen Aufbau eines Moduls und dient gleichzeitig als Vorlage für eigene Module.

## Was es kann

- Neuigkeiten-Beiträge auflisten (`/modules/news`)
- Neue Beiträge anlegen (`/modules/news/anlegen`)

## Aufbau

```
intranet-module-news/
├── composer.json                     # Paketname + Auto-Discovery des Providers
├── src/
│   ├── NewsServiceProvider.php       # Manifest (Name, Icon, Unterseiten)
│   ├── Http/Controllers/NewsController.php
│   └── Models/NewsPost.php
├── routes/web.php                    # Routen: module.news.*
├── resources/views/                  # Views: news::index, news::create
└── database/migrations/              # eigene Tabelle news_posts
```

## Installation

Siehe die ausführliche Anleitung **[MODULES.md](../intranet-core/MODULES.md)** im Core.
Kurzfassung (im Core-Verzeichnis):

```bash
composer require intranet/module-news:*
php artisan modules:sync
php artisan migrate
```
