<?php

namespace App\Providers;

use App\Models\UserExperience;
use App\Models\UserPersonalDetail;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        View::composer('pages-profile-settings', function ($view) {
            $userId = auth()->user()->id; // Adjust as necessary
            $userExperiences = UserExperience::where('user_id', $userId)->get();

            $userPersonalDetail = UserPersonalDetail::where('user_id', $userId)->first();

            if ($userPersonalDetail && $userPersonalDetail->JoiningdatInput) {
                $userPersonalDetail->JoiningdatInput = Carbon::parse($userPersonalDetail->JoiningdatInput)->format('d M, Y');
            }

            $view->with('userPersonalDetail', $userPersonalDetail)
                ->with('experiences', $userExperiences);
        });

    }
}
