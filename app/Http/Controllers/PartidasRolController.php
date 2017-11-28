<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidasRolController extends Controller
{

    /**
     * Display a listing of the resource. 
     * https://github.com/28harishkumar/blog/blob/master/database/migrations/2015_05_23_133926_posts.php
     * @return Response
     */
    public function index()
    {
        $partidas = partidasrol::where('active','1')->orderBy('created_at','desc')->paginate(5);
        $title = 'Últimas Partidas';
        return view('partidas')->withPartidasrol($pastidas)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        if($request->user()->can_post())
        {
            return view('posts.create');
        }
        else
        {
            return redirect('/')->withErrors('Tienes que estar registrado para enviar una partida');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostFormRequest $request)
    {
        $partida = new partidasrol();
        $partida->title = $request->get('title');
        $partida->body = $request->get('body');
        $partida->slug = str_slug($post->title);
        
        $duplicate = Partidasrol::where('slug',$partida->slug)->first();
        if($duplicate)
        {
            return redirect('new-post')->withErrors('Title already exists.')->withInput();
        }   
        
        $partida->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $partida->active = 0;
            $message = 'Post saved successfully';           
        }           
        else 
        {
            $partida->active = 1;
            $message = 'Post published successfully';
        }
        $partida->save();
        return redirect('edit/'.$partida->slug)->withMessage($message);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $partida = Partidasrol::where('slug',$slug)->first();
        if($partida)
        {
            if($partida->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $post->comments;    
        }
        else 
        {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request,$slug)
    {
        $post = Posts::where('slug',$slug)->first();
        if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
            return view('posts.edit')->with('post',$post);
        else 
        {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //
        $post_id = $request->input('post_id');
        $post = Posts::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Posts::where('slug',$slug)->first();
            if($duplicate)
            {
                if($duplicate->id != $post_id)
                {
                    return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
                }
                else 
                {
                    $post->slug = $slug;
                }
            }
            
            $post->title = $title;
            $post->body = $request->input('body');
            
            if($request->has('save'))
            {
                $post->active = 0;
                $message = 'Post saved successfully';
                $landing = 'edit/'.$post->slug;
            }           
            else {
                $post->active = 1;
                $message = 'Post updated successfully';
                $landing = $post->slug;
            }
            $post->save();
            return redirect($landing)->withMessage($message);
        }
        else
        {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $post = Posts::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $post->delete();
            $data['message'] = 'Post deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }


}
