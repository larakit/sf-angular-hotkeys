<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-hotkeys')
                            ->usePackage('larakit/sf-angular')
                            ->setSourceDir('public')
                            ->cssPackage('hotkeys.min.css')
                            ->jsPackage('hotkeys.min.js');
