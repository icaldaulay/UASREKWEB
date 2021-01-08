<?php

namespace App\Controllers;
// use CodeIgniter\Controller;
use App\Models\ProdukModel;
use App\Models\UsersModel;
use App\Models\TransaksiModel;




use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Home extends BaseController
{
	public $produkmodel;
	public function __construct()
	{
		$this->produkmodel = new ProdukModel();
		$this->usermodel = new UsersModel();
		$this->transaksimodel = new TransaksiModel();
		helper('form');
		helper('number');
		
	}

	
	public function beranda()
	{
		$cart = \Config\Services::cart();
		$data = [
			
			'produk'=>$this->produkmodel->getItem(),
			'transaksi'=>$this->transaksimodel->getItem(),
		];
		echo view("home/header");
		echo view("home/beranda",$data);
	}

	// public function login()
	// {
	// 	echo view("home/header");
	// 	echo view("home/login");
	// }

	// public function lgn()
	// {
	// 	echo view("home/header");
	// 	echo view("home/lgn");
	// }

	public function Daftar()
	{
		echo view("home/header");
		echo view("home/daftar");
	}

	public function transaksi()
	{
		echo view("home/header");
		echo view("home/transaksi");
	}

	public function crudtransaksi()
	{
		
		$data = [
			
			
			'transaksi'=>$this->transaksimodel->getItem(),
		];
	

		echo view("home/headerlogin");
		echo view("home/crudtransaksi", $data);
	}

	public function cruduser()
	{
		$data = [
			
			'user'=>$this->usermodel->getItem(),
		];
		echo view("home/headerlogin");
		echo view("home/cruduser",$data);
	}

	public function deleteuser($id)
    {
        $this->usermodel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/home/cruduser');
    }

	public function admin()
	{
		echo view("home/headerlogin");
		echo view("home/admin");
	}

	public function detail()
	{
		echo view("home/header");
		echo view("home/detail");
	}

	public function riwayat()
	{
		$data = [
			
			'transaksi'=>$this->transaksimodel->getItem(),
		];
		echo view("home/header");
		echo view("home/riwayat",$data);
	}

	public function editakun()
	{
		echo view("home/header");
		echo view("home/editakun");
	}

	public function Detailproduk($id)
	{
		$data = 
		[
			'produk' => $this->produkmodel->getItem($id)
		];
		echo view("home/header");
		echo view("home/addchart", $data);
	}


	public function beli()
	{
		$data = [
			
			'transaksi'=>$this->transaksimodel->getItem(),
		];
		echo view("home/header");
		echo view("home/beli",$data);
	}

	public function transaksisave()
    {
        $this->transaksimodel->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'biaya' => $this->request->getVar('biaya'),
            // 'status' => $this->request->getVar('status'),
            'id_produk' => $this->request->getVar('id_produk'),
            'username' => $this->request->getVar('username'),
            'qty' => $this->request->getVar('qty')
            
		]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/home/beranda');
	}


	//Items

	public function crudproduk()
	{
		
		$data = [
			
			
			'produk'=>$this->produkmodel->getItem(),
		];
		echo view("home/headerlogin");
		echo view("home/crudproduk", $data);
	}

	public function itemssave()
    {
        $this->produkmodel->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'ket' => $this->request->getVar('ket'),
            'gambar' => $this->request->getVar('gambar')
            
		]);
		// 
		// // $data = [
		// 	$nama_produk=$this->request->getVar('nama_produk');
		// 	$harga=$this->request->getVar('harga');
		// 	$ket=$this->request->getVar('ket');
		// 	$gambar=$this->request->getVar('gambar');
		// // ];

		// $this->produkmodel->query("INSERT INTO produk VALUES (
		// 	'','$nama_produk','$harga', '$ket', '$gambar')");

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/Home/crudproduk');
	}
	
	public function itemscreate()
    {
        $data = [
            // 'title' => 'Add Item',
            'validation' => \Config\Services::validation()
        ];

        return view('home/tambahproduk', $data);
    }

	public function deleteproduk($id)
	{
		$this->produkmodel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus');

		return redirect()->to('/Home/crudproduk');
	}
	
	public function itemsedit($id)
	{
		$data = [
			// '' => 'Edit Item',
			// 'validation' => \Config\Services::validation(),
			'items' => $this->produkmodel->getItem($id)
		];

		return view('home/editproduk', $data);
	}

	public function itemsupdate($id)
	{
		$this->produkmodel->save([
			'id_produk' => $id,
			'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'ket' => $this->request->getVar('ket'),
            'gambar' => $this->request->getVar('gambar')
		]);
		session()->setFlashdata('pesan', 'Data berhasil diubah');
		return redirect()->to('/home/crudproduk');
	}


	//Cart

	public function cartcek()
	{
		$cart = \Config\Services::cart();
		// $cart->destroy();
		$response = $cart->contents();
		echo '<pre>';
		print_r($response);
		echo '</pre>';
	}

	public function cartadd()
	{
		$cart = \Config\Services::cart();
		$cart->insert(array(
			'id'      => $this->request->getPost('id'),
			'qty'     => 1,
			'price'   => $this->request->getPost('price'),
			'name'    => $this->request->getPost('name'),
			// 'warna' => $this->request->getPost('warna'),
			'options' => array(
				'gambar' => $this->request->getPost('gambar'),
				'ket' => $this->request->getPost('ket')
				// 'size' => $this->request->getPost('size'),
				// 'warna' => $this->request->getPost('warna'),
				// 'Color' => 'Red'
			)
		));

		session()->setFlashdata('Pesan', 'Barang berhasil masuk keranjang');
		return redirect()->to('/home/cart');
	}

	// public function cartclear()
	// {
	// 	$cart = \Config\Services::cart();
	// 	$cart->destroy();
	// 	return redirect()->to('/Home/cart');
	// }

	public function cartupdate()
	{
		$cart = \Config\Services::cart();
		$i = 1;
		foreach ($cart->contents() as $produk) {
			$cart->update(array(
				'rowid'   => $produk['rowid'],
				'qty'     => $this->request->getPost('qty' . $i++),
			));
		}

		return redirect()->to('/Home/cart');
	}

	public  function cartdelete($rowid)
	{
		$cart = \Config\Services::cart();
		$cart->remove($rowid);
		return redirect()->to('/Home/cart');
	}

	public function cart()
	{
		$data = [
			'produk' => $this->produkmodel->getItem(),
			// 'transaksi' => $this->transaksisModel->getTransaksi(),
			'cart' => \Config\Services::cart()
		];
		echo view("home/header");
		echo view("home/detail",$data);
	}

	
}
