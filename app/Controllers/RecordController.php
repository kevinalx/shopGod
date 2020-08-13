<?php namespace App\Controllers;

use App\Models\RecordModels;

class RecordController extends BaseController
{
	public function index()
	{
		return view('recordview');
	}

	public function crear()
	{
		$recordmodel = new RecordModels();

		$name=$this->request->getPost('name');
		$surname=$this->request->getPost('surname');
		$address=$this->request->getPost('address');
		$phone=$this->request->getPost('phone');
		$password=$this->request->getPost('password');
		$email=$this->request->getPost('email');

		$recordmodel->save([
			'name'=>$name,
			'surname'=>$surname,
			'address'=>$address,
			'phone'=>$phone,
			'password'=>$password,
			'email'=>$email

		  ]);
	
		  return redirect()->to(base_url('public/record'))->with('mensaje',"Cliente creado con éxito!");
	}


	public function eliminar($idUsuario){
      
		$recordmodel= new RecordModels();
  
		$recordmodel->where('idUsuario',$idUsuario)->delete();
		
		return redirect()->to(base_url('public/record'));
  
	  }

	  public function modificar($idUsuario){

		$recordmodel= new RecordModels();
  
		
		$name=$this->request->getPost('name2');
		$surname=$this->request->getPost('surname2');
		$email=$this->request->getPost('email2');
		$address=$this->request->getPost('address2');
		$phone=$this->request->getPost('phone2');
		$password=$this->request->getPost('password2');
  
  
  
  
  
		$recordmodel->update($idUsuario,[
		  'name'=>$name,
		  'surname'=>$surname,
		  'email'=>$email,
		  'address'=>$address,
		  'phone'=>$phone,
		  'password'=>$password


		]);
  
		return redirect()->to(base_url('public/record'));
  
	  }
  





	//--------------------------------------------------------------------

}
