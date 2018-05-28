<?php namespace App\Http\Controllers\Auth;

use Socialite;
use App\SocialProvider;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected function authenticated($request,$user){
	    if($user->role === 'admin'){
	        return redirect()->intended('admin'); //redirect to admin panel
	    }

	    return redirect()->intended('/'); //redirect to standard user homepage
	}


	//Authentication for the Google provider
	public function redirectToProvider(){
	    return Socialite::driver('google')->redirect();
	}

    public function handleProviderCallback(){
        try{
	        $googleUser = Socialite::driver('google')->stateless()->user();

	        } catch(\Exception $e){
         		return redirect('auth/google');
            } 
	        //check if there is user and provider
            $googleProv = SocialProvider::where('provider_id',$googleUser->getId())->first();	
				if(!$googleProv){
					//Insert the user and provider
					$user = User::firstOrCreate([
							'name' => $googleUser->name,
							'email' => $googleUser->email,
						]);

					$user->socialProviders()->create(
							['provider_id' => $googleUser->getId(), 'provider' => 'google']
						);
					
					$googleGet = SocialProvider::where('provider_id', $googleUser->getId())->first();
					$soc1 = $googleGet->user;
					auth()->login($soc1);
					return redirect('user');

				}else
					$soc = $googleProv->user;  
					auth()->login($soc);
					return redirect('user');
	}
    	  
}
