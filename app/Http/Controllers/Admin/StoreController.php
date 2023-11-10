<?php 

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
	public function store()
	{
		return view('index.store.index', [
			'pagetitle' => "Store",
			'title' => "Admin Store"
		]);
	}
}




?>