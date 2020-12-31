<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function search(){
		$sentence = strtolower($this->request->getPost('word'));
		$category = strtolower($this->request->getPost('category'));
		// echo $sentence;
		$model = model('App\Models\Data');
		$result = $model->where('inggris', $sentence)->where('id_kategori', $category)->first();
		if (!isset($result)){
			$result['indonesia'] = 'Not Found';
		}

		return view('result', $result);
		
		
	}

	public function list(){
		$id_cat = $this->request->uri->getSegment(2);
		$model = model('App\Models\Data');
		$data = $model->where('id_kategori', $id_cat)->findAll();
		$result['data'] = $data;
		return view('list', $result);
	}

	//--------------------------------------------------------------------

}
