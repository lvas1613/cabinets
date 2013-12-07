<?php

class ImageController extends \BaseController {

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
		//

        $data['title']= 'Image Upload';
        return View::make('images.form', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
        {



            $name = Input::file('image')->getClientOriginalName();
            $image = new Image;
            $image->filename = 'l_'.$name;
            $image->thumbs = 't_'.$name;
            $image->name = Input::get('name');
            $image->description = Input::get('description');
            $image->caption = Input::get('caption');
            $image->date_created = Input::get('date_created');
            $image->cat_name = Input::get('cat_name');
            $image->save();


            Imagine::make(Input::file('image')->getRealPath())->resize(800, 600, true)->save('assets/imgs/'.'l_'.$name);
            Imagine::make('assets/imgs/l_'.$name)->resize(200, 200, true)->save('assets/imgs/thumbs/'.'t_'.$name);

            return Redirect::to('/images/create')->with('message','Your Upload was Successful');


        }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{


        $images = Image::where('cat_name', '=', $name)->get();
        $data['images'] = $images;
        return View::make('images/content', $data);
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
