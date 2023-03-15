Login
{{Auth::user()->name}}

Sidebar
@if (auth()->user()->level == "admin")
@elseif (auth()->user()->level == "user")
@endif

Nomor
@php $i=1 @endphp
$i++

Delete
onclick="return confirm('Are you sure you want to delete?');"

Logout
Route::get('/logout', function() {
    \Auth::logout();
    return redirect ('/');
});

Web
Route::group(['middleware' => 'admin'], function () {
  });

Providers
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/web.php'));
        });
    

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

{{ Request::is('/') ? 'active' : '' }}

