<?php

namespace App\Providers;
use Gate;
use App\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->registerPolicies();
    	if (Schema::hasTable('permissions')) {
	        Permission::get()->map(function ($permission) {
	            Gate::define($permission->name, function ($user) use ($permission) {
	                return $user->hasPermissionTo($permission);
	            });
	        });
	    }

        Blade::directive('role', function ($role) {
            return "<?php if (auth()->check() && auth()->user()->hasRole({$role})): ?>";
        });

        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>";
        });
    }
}
