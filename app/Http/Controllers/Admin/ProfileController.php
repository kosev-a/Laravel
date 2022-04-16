<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        if($request->isMethod('post')) {
            $this->validate($request, $this->validateRules(), [], $this->attributeName());

            $errors['password'][] = 'Неверно введен текущий пароль';
            if(Hash::check($request->post('password'), $user->password)) {
                $user->fill([
                    'name' => $request->post('name'),
                    'password' => Hash::make($request->post('newPassword')),
                    'email' => $request->post('email'),
                    'is_admin' => $request->post('is_admin')
                ]);
                $user->save();
                $request->session()->flash('MSG', 'Данные сохранены');
                $errors = [];
            }

            return redirect()->route('admin.profile.update')
                ->withErrors($errors);
        }

        return view('admin.profile', [
            'user' => $user
        ]);
        
    }

    protected function validateRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
            'password' => ['required'],
            'newPassword' => ['required', 'string', 'min:8']
        ];
    }

    protected function attributeName() 
    {
        return [
            'newPassword' => 'Новый пароль'
        ];
    }
}
