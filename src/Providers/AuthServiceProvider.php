<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Foundation\Support\Providers;

final class AuthServiceProvider extends Providers\AuthServiceProvider
{
    /**
     * @var array
     */
    protected $policies = [];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
