<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Repository\UserRepository;

class dane extends Controller
{
    public function wyswietl(UserRepository $userRepo){
        $users = $userRepo->getAllUsers();

        return view('welcome', ["users"=>$users, "title" => "Lista uzytkownikow"]);
    }

    public function pokaz(UserRepository $userRepo, $id)
    {
        $users = $userRepo->read($id);
        return view('operacje.wyswietl', ["users"=>$users, "title"=>"Użytkownik"]);
    }

    public function stworz(){
        return view('operacje.stworz', ["title"=>"Dodawanie użytkownika"]);
    }

    public function dodaj(Request $request)
    {
        $newUser = new User;
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = bcrypt($request->input('password'));

        $newUser->save();

        return redirect()->action('dane@wyswietl');
    }

    public function usun(UserRepository $userRepo, $id){
        $doctor = $userRepo->delete($id);
        return redirect('/');
    }

    public function edytuj(UserRepository $userRepo, $id)
    {
        $user = $userRepo->read($id);

        return view('operacje.edytuj', ["user" => $user, "title"=>"Edytuj użytkownika"]);
    }

    public function edytujUzytkownika(Request $request){
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect()->action('dane@wyswietl');
    }
}
