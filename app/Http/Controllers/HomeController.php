<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $command = 'node puppeteer.js ' . escapeshellarg($query);
        $output = shell_exec($command);
        if ($output === null) {
            return view('results', ['output' => 'Error']);
        }

        return view('results', ['output' => $output]);
    }
}
