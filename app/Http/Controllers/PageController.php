<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tampilkanLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {

        return redirect()->route('dashboard', ['username' => $request->input('username')]);
    }

    public function tampilkanDashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', ['username' => $username]);
    }

    public function tampilkanProfile(Request $request)
    {
        $username = $request->query('username');
        $profiledata = [
            'name'      => $username,
            'image'  => 'images/redprofile.png',
            'bio'       => 'reading 24/7.',
            'favBook'   => '"Sherlock Holmes: The Adventures of Sherlock Holmes" - Sir Arthur Conan Doyle'
        ];

        return view('profile', ['profile' => $profiledata]);
    }

    public function tampilkanPengelolaan(Request $request)
    {
        $datareview = [
            ['title' => 'Sherlock Holmes: The Adventures of Sherlock Holmes', 'writer' => 'Sir Arthur Conan Doyle', 'review' => 'Smart, sharp, and a little dramatic. Sherlock never misses! Every case feels like a mini mind game.', 'rating' => 5],
            ['title' => "Harry Potter and the Sorcerer's Stone", 'writer' => 'J.K. Rowling', 'review' => "Pure childhood magic. Hogwarts will always feel like home. Can't beat that firt-time wonder.", 'rating' => 5],
            ['title' => 'Little Women', 'writer' => 'Louisa May Alcott', 'review' => 'So soft and heartfelt. The March sisters are everything.', 'rating' => 4],
            ['title' => 'Six of Crows', 'writer' => 'Leigh Bardugo', 'review' => "Criminals but make it iconic. Kaz & the crew are pure chaos and genius. I'm totally obsessed!", 'rating' => 4],
            ['title' => 'Crooked Kingdom', 'writer' => 'Leigh Bardugo', 'review' => 'A continuation of Six of Crows, filled with revenge, heartbreak, and unexpected twists.', 'rating' => 4],
            ['title' => 'The Hunger Games', 'writer' => 'Suzanne Collins', 'review' => 'Katniss is such a badass. The story is intense from start to finish, and world-building is just so good.', 'rating' => 5],
            ['title' => 'The Maze Runner', 'writer' => 'James Dashner', 'review' => "Teens stuck in a deadly maze. It's full of mystery, tension, and twists.", 'rating' => 5],
            ['title' => 'Bumi', 'writer' => 'Tere Liye', 'review' => "The story's super fun, the characters feel real, and the world is just magical.", 'rating' => 4],
        ];

        $username = $request->query('username');
        return view('pengelolaan', [
            'semuareview' => $datareview,
            'username' => $username,
        ]);
    }
}
