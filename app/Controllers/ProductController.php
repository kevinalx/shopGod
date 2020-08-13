<?php namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
	public function index()
	{
		$Productmodel = new ProductModel();
		$datosbuscados = $Productmodel->asObject()->findAll();
		$datosparavista=array('productos'=>$datosbuscados);
		

		return view('productview', $datosparavista);
	}

	public function crearP()
	{
		$Productmodel = new ProductModel();

		$nameProduct=$this->request->getPost('nameProduct');
		$supplier=$this->request->getPost('supplier');
		$color=$this->request->getPost('color');
		$size=$this->request->getPost('size');
		$gender=$this->request->getPost('gender');
		$price=$this->request->getPost('price');
		
		$Productmodel->save([
			'nameProduct'=>$nameProduct,
			'supplier'=>$supplier,
			'color'=>$color,
			'size'=>$size,
			'gender'=>$gender,
			'price'=>$price

		  ]);
	
		  return redirect()->to(base_url('public/product'))->with('mensaje',"Producto registrado con éxito!");
	}


	public function eliminar($productoID){

		$Productmodel = new ProductModel();

		$Productmodel->where('productoID',$productoID)->delete();

		return redirect()->to(base_url('public/product'));

	}

	public function modificar($productoID){

		$Productmodel = new ProductModel();
		
		$nameProduct=$this->request->getPost('nameProduct2');
		$supplier=$this->request->getPost('supplier2');
		$color=$this->request->getPost('color2');
		$size=$this->request->getPost('size2');
		$gender=$this->request->getPost('gender2');
		$price=$this->request->getPost('price2');

		echo($productoID.'---'.$nameProduct.'---'.$supplier.'--'.$color.'--'.$size.'--'.$gender.'--'.$price);

	}


	//--------------------------------------------------------------------

}
