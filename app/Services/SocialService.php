<?php

declare(strict_types=1);

namespace App\Servises;

use App\Models\User;
use App\Contracts\Social;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User as SocialContract;
use PHPUnit\Framework\Exception;

class SocialService implements Social
{
    /**
     * @param SocialContract
     * @return string
     * @throws Exception
     */
    public function authUser(SocialContract $socialUser): string
    {
        $user = User::where('email', $socialUser->getEmail())->first();
        if($user) {
            $user->name = $socialUser->getName();
            $user->avatar = $socialUser->getAvatar();
            if($user->save()) {
                Auth::loginUsingId($user->id);
                return route('account.index');
            }

            throw new Exception("Wasn't auth user");
        }else{
            //todo: register here or redirect on register
            return route('register');
        }
    }
}