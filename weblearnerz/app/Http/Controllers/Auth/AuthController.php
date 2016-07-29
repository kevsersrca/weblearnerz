<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\ActivationService;

class AuthController extends Controller
{


    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';
    protected $activationService;

    public function __construct(ActivationService $activationService)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function register(RegisterRequest $request)
    {
        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->withErrors('We sent you an activation code. Check your email.');
    }
    public function activateUser($token)
    {
        if ($user = $this->activationService->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
    }
    public function authenticated(Request $request, $user)
    {
        if (!$user->activated)
        {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->withErrors('You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
}
