<?php


use Illuminate\Database\Eloquent\ModelNotFoundException;


class ContentController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		//

        $data['title']= 'home';
        return View::make('home', $data);
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
	
        //Getting images based on cat_name
        $images = Image::where('cat_name', '=', $name)->get();
        $data['images'] = $images;
        //line just deletes the periods outputted by scandir on gnix systems
        $data['handle'] = array_diff(scandir('assets/imgs/slideshow', 1), array('..','.'));

        //Getting content based on cat_name
        $content = Content::where('cat_name', '=', $name)->get();

        //testing whether the table exists if not throwing and exception
        try {

	    $model = Content::where('cat_name', '=', $name)->firstOrFail();

        }
        catch (ModelNotFoundException $e)
        {
            return \Illuminate\Support\Facades\Response::make('The model doesn\'t exists', 404);
        }

        //Passing p (paragraph) and title to the views
        $data['p'] = $content;
        $data['title'] = $name;



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
