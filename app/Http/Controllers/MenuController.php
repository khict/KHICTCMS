<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$menus = Menu::where('IsDelete','=',0)
		    	->select('MnuID','MnuName','MnuParrent','MnuDesc')
		    	->get();
    	
        return view('menu.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$menus = Menu::where('IsDelete','=',0)
    			->select('MnuID','MnuName')
    			->get();
        return view('menu.create')->with('parents',$menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $menu = new Menu();
       if(isset($request['save'])){
	       	$menu->MnuName = $request['menu-name'];
	       	$menu->MnuParrent = $request['menu-parent'];
	       	$menu->MnuDesc = $request['menu-desc'];
	       	$menu->save();
	       
       }
       if(isset($request['cancel'])){
       	return view('menu.index');
       }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::findOrFail('$id');
        return view('menu.edit')->with('menus',$menus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return 'Hi delete';
    }
}
