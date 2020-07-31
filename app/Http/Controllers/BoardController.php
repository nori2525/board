<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    //
    public function index(Request $request){
        $items = Message::all();
        $user = Auth::user();
        $name = $user->name;
        return view('board.index', ['items' => $items, 'name' => $name]);
    }
    public function add(Request $request){
        $this->validate($request, Message::$rules);
        $board = new Message;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
    public function del(){
        Message::query()->delete();
        return redirect('/board');
    }
}
