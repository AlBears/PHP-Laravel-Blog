<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\ContactMessage;

class AdminController extends Controller
{
    public function getIndex()
    {
      $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
      $contact_messages = ContactMessage::orderBy('created_at', 'desc')->take(3)->get();

      return view('admin.index', compact(['posts', 'contact_messages']));
    }
}
