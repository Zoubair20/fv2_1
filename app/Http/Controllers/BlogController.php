<?php

namespace App\Http\Controllers;

use App\Post, App\Category , App\Contact;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blog($slug= null){
        if ($slug) {
         $posts= Post::orderBy('created_at', 'desc' )
         ->whereStatus('PUBLISHED')
//         ->whereCategoryId($slug)
         ->paginate(8);
        }else{
         $posts= Post::orderBy('created_at', 'desc' )
         ->whereStatus('PUBLISHED')
         ->paginate(8);
        }
       $categories = Category::all();
       $lastposts=Post::latest()->take(3)->get();
       return view('blog.blog' , ['myposts'=>$posts, 'myCategories'=>$categories, 'lastposts'=>$lastposts]);
}


    public function show($slug){
        $post = Post::whereSlug($slug)->first();
        $post->visiteurs_nbr++;
        $post->save();

        $categories = Category::all();
        $lastposts=Post::latest()->take(3)->get();
        return view('blog.show' , ['post' => $post, 'myCategories'=>$categories, 'lastposts'=>$lastposts]);
}

    // public function store(Request $request){

    //     $contact = new Contact();

    //     $contact->nom = $request->input('nom');
    //     $contact->email = $request->input('email');
    //     $contact->telephone = $request->input('tel');
    //     $contact->objet = $request->input('objet');
    //     $contact->message = $request->input('message');

    //     $contact->save();
    //     return redirect('/')->with('status', 'Votre message a été envoyé. Je vous remercie!');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
