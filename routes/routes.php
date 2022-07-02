<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RecoveryCodeController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\TwoFactorQrCodeController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use App\Http\Livewire\Category;
use App\Http\Livewire\Industry;
use App\Http\Livewire\Market;
use App\Http\Livewire\Plans;
use App\Http\Livewire\Listing;
use App\Http\Livewire\Suppliers;
use App\Http\Livewire\Detail;
use App\Http\Livewire\Search;
use App\Http\Livewire\Aboutus;
use App\Http\Livewire\Contactus;
use App\Http\Livewire\Refundcancellation;
use App\Http\Livewire\Termsconditions;
use App\Http\Livewire\Privacypolicy;
use App\Http\Livewire\Queries;
use App\Http\Livewire\Sellerdashboard;



Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
    $enableViews = config('fortify.views', true);

    // Authentication...
    if ($enableViews) {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->middleware(['guest:'.config('fortify.guard')])
            ->name('login');
    }
    
    // Category page routes
    Route::get('/categories',  [Category::class, 'render'])
          //  ->middleware(['guest:'.config('fortify.guard')])
            ->name('category');

    // Sub Category/industry page routes
    Route::get('/industry/{sku}',  [Industry::class, 'show'])
           // ->middleware(['guest:'.config('fortify.guard')])
            ->name('industry.show');

    // Sub Sub Category/market page routes
    Route::get('/market/{sku}',  [Market::class, 'show'])
           // ->middleware(['guest:'.config('fortify.guard')])
            ->name('market.show');

            
    // Plans page routes
    Route::get('/plans',  [Plans::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('plans');

         
    // Plans page listing
    Route::get('/listing',  [Listing::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('listing');

    // Suppliers page routes
    Route::get('/suppliers/{sku}',  [Suppliers::class, 'show'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('suppliers.show');


    // Detail page routes
    Route::get('/detail/{sku}',  [Detail::class, 'show'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('detail.show');

    
    // Search page routes
    Route::get('/search/{searchBy}',  [Search::class, 'search'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('suppliers.search');

    // about us page route
    Route::get('/about-us',  [Aboutus::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('aboutus');


    // contact-us page route
    Route::get('/contact-us',  [Contactus::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('contactus');

    // refund-cancellation page route
    Route::get('/refund-cancellation',  [Refundcancellation::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('refund-cancellation');

    // terms-conditions page route
    Route::get('/terms-conditions',  [Termsconditions::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('terms-conditions');

    // privacy-policy page route
    Route::get('/privacy-policy',  [Privacypolicy::class, 'render'])
    //->middleware(['guest:'.config('fortify.guard')])
    ->name('privacy-policy');

       
  // privacy-policy page route
  Route::post('/query/post-requirement',  [Queries::class, 'postRequirement'])
  //->middleware(['guest:'.config('fortify.guard')])
  ->name('Queries');

  // company route for catalog
 Route::get('/catalog/{sellerCatalogUrl}',  [Sellerdashboard::class, 'showSellerCatalogForAll']);
 

    
    $limiter = config('fortify.limiters.login');
    $twoFactorLimiter = config('fortify.limiters.two-factor');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:'.config('fortify.guard'),
            $limiter ? 'throttle:'.$limiter : null,
        ]));

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    // Password Reset...
    if (Features::enabled(Features::resetPasswords())) {
        if ($enableViews) {
            Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.request');

            Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.reset');
        }

        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->middleware(['guest:'.config('fortify.guard')])
            ->name('password.email');

        Route::post('/reset-password', [NewPasswordController::class, 'store'])
            ->middleware(['guest:'.config('fortify.guard')])
            ->name('password.update');
    }

    // Registration...
    if (Features::enabled(Features::registration())) {
        if ($enableViews) {
            Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('register');
        }

        Route::post('/register', [RegisteredUserController::class, 'store'])
            ->middleware(['guest:'.config('fortify.guard')]);
    }

    // Email Verification...
    if (Features::enabled(Features::emailVerification())) {
        if ($enableViews) {
            Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware(['auth'])
                ->name('verification.notice');
        }

        Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['auth', 'signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware(['auth', 'throttle:6,1'])
            ->name('verification.send');
    }

    // Profile Information...
    if (Features::enabled(Features::updateProfileInformation())) {
        Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-profile-information.update');
    }

    // Passwords...
    if (Features::enabled(Features::updatePasswords())) {
        Route::put('/user/password', [PasswordController::class, 'update'])
            ->middleware(['auth'])
            ->name('user-password.update');
    }

    // Password Confirmation...
    if ($enableViews) {
        Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->middleware(['auth'])
            ->name('password.confirm');
    }

    Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirmation');

    Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware(['auth']);

    // Two Factor Authentication...
    if (Features::enabled(Features::twoFactorAuthentication())) {
        if ($enableViews) {
            Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('two-factor.login');
        }

        Route::post('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
            ->middleware(array_filter([
                'guest:'.config('fortify.guard'),
                $twoFactorLimiter ? 'throttle:'.$twoFactorLimiter : null,
            ]));

        $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
            ? ['auth', 'password.confirm']
            : ['auth'];

        Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
            ->middleware($twoFactorMiddleware)
            ->name('two-factor.enable');

        Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
            ->middleware($twoFactorMiddleware)
            ->name('two-factor.disable');

        Route::get('/user/two-factor-qr-code', [TwoFactorQrCodeController::class, 'show'])
            ->middleware($twoFactorMiddleware)
            ->name('two-factor.qr-code');

        Route::get('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'index'])
            ->middleware($twoFactorMiddleware)
            ->name('two-factor.recovery-codes');

        Route::post('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'store'])
            ->middleware($twoFactorMiddleware);
    }
});
