<?php

class ContentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $data['title']= 'Content Create';
        return View::make('content_form', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $content = new Content;

        $content->paragraph = Input::get('paragraph');
        $content->cat_name = Input::get('cat_name');
        $content->save();


        return Redirect::to('content/create');


	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $name
	 * @return Response
	 */
	public function show($name)
	{
	

        $images = Image::where('cat_name', '=', $name)->get();
        $data['images'] = $images;



        $data['handle'] = array_diff(scandir('assets/imgs/slideshow', 1), array('..','.'));
	    $a = Content::where('cat_name', '=', $name)->get();

        if(!(Category::where('cat_name', '=', $name)))
            return Response::make('Page not found', 404);


	    $data['p'] = $a;
        $data['title'] = $name;

        if($name == 'contact')
            return View::make('contact', $data);

	    return View::make('content', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
