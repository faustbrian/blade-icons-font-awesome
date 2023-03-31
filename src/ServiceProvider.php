<?php

declare(strict_types=1);

namespace PreemStudio\BladeFontAwesome;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\BladeIcons\IconFamilyStyle;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            new IconFamily('font-awesome', [
                new IconFamilyStyle('brands', __DIR__.'/../resources/svg/brands'),
                new IconFamilyStyle('regular', __DIR__.'/../resources/svg/regular'),
                new IconFamilyStyle('solid', __DIR__.'/../resources/svg/solid'),
            ]),
        );
    }
}
