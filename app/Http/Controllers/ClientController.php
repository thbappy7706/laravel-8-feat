<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //

    public function getAllPost()
    {
   $response =  Http::get('https://jsonplaceholder.typicode.com/posts');
   return $response->json();

    }

    public function getPostById($id)
    {
           $post=  Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);

           return $post->json();
    }

    public function addPost()
    {
            $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
                    'userId'=>1,
                    'title'=> "New Post",
                    'body'=> "New Post By Tanvir Hossen Bappy",

            ]);
            return $post->json();

    }

    public function updatePost()
    {

        $postresp = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title'=> "New Updated Post",
            'body'=> "New Post is Updated By Tanvir Hossen Bappy",

        ]);
        return $postresp->json();
    }

    public function deletePost(  $id)
{
    $postresp = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
    return $postresp->json();


}


}
