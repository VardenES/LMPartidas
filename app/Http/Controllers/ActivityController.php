<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{

    /**
     * Display a listing of the resource. 
     * https://github.com/28harishkumar/blog/blob/master/database/migrations/2015_05_23_133926_posts.php
     * @return Response
     */
    public function index()
    {
        // fetch 5 activities from database which are active and latest
        $partidas = partidasrol::where('active','1')->orderBy('created_at','desc')->paginate(5);
        // page heading
        $title = 'Últimas Partidas';
        // return partidas.blade.php template
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
            return view('activities.create');
        }
        else
        {
            return redirect('/')->withErrors('Tienes que estar registrado para enviar una actividad');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostFormRequest $request)
    {
        $actividad = new Activities();
        $actividad->title = $request->get('title');
        $actividad->body = $request->get('body');
        $actividad->slug = str_slug($post->title);

        $duplicate = Activities::where('slug',$partida->slug)->first();
        if($duplicate)
        {
            return redirect('new-post')->withErrors('Title already exists.')->withInput();
        }   
        
        $actividad->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $actividad->active = 0;
            $message = 'Actividad guardada';           
        }           
        else 
        {
            $actividad->active = 1;
            $message = 'Actividad publicada';
        }
        $actividad->save();
        return redirect('edit/'.$actividad->slug)->withMessage($message);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $actividad = Activities::where('slug',$slug)->first();
        if($actividad)
        {
            if($actividad->active == false)
                return redirect('/')->withErrors('requested page not found');            
        }
        else 
        {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('activities.show')->withPost($actividad);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     * http://www.findalltogether.com/tutorial/simple-blog-application-in-laravel-5-part-3-controllers/
     */
    public function edit(Request $request,$slug)
    {
        $actividad = Activities::where('slug',$slug)->first();
        if($actividad && ($request->user()->id == $actividad->author_id || $request->user()->is_admin()))
            return view('activities.edit')->with('post',$post);
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
