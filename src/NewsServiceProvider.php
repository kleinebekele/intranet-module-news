<?php

namespace Intranet\Modules\News;

use App\Modules\Support\ModuleManifest;
use App\Modules\Support\ModuleServiceProvider;

/**
 * Anmelde-Klasse des News-Moduls.
 *
 * Alles Weitere (Routen, Views, Migrationen) wird von der Basisklasse
 * automatisch anhand der Ordnerstruktur geladen – wir müssen hier nur das
 * Manifest beschreiben.
 */
class NewsServiceProvider extends ModuleServiceProvider
{
    public function manifest(): ModuleManifest
    {
        return ModuleManifest::make('news', 'Neuigkeiten', icon: 'newspaper')
            ->item('index', 'Übersicht', 'module.news.index')
            ->item('create', 'Beitrag anlegen', 'module.news.create');
    }
}
