<?php

namespace NueTemplate\Default;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $themeName = $this->getThemeName();

        if (active_theme() === $themeName) {
            $this->loadViewsFrom(__DIR__.'/views', 'theme');
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');

            $this->publishes([
                __DIR__.'/assets' => public_path('vendor/default-theme'),
            ], 'assets');
        }
    }

    public function register()
    {
        // 
    }

    private function getThemeName()
    {
        $composerJsonPath = __DIR__ . '/composer.json';

        if (\File::exists($composerJsonPath)) {
            $composerData = json_decode(\File::get($composerJsonPath), true);
            $packageName = $composerData['name'] ?? null;

            if ($packageName) {
                return basename($packageName);
            }
        }

        return 'default-theme';
    }
}
