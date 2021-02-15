<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	// Controller Admin
	public $insertKosan = [
		'nama' => [
			'rules'	=> 'required|is_unique[kosan.nama]',
			'errors' => [
				'required' => '{field} kosan tidak boleh kosong!',
				'is_unique' => '{field} kosan sudah ada!'
			]
		],
		'tempat' => [
			'rules'	=> 'required',
			'errors' => [
				'required' => '{field} kosan tidak boleh kosong!',
			]
		],
		'jumlah_kamar' => [
			'rules'	=> 'required',
			'errors' => [
				'required' => 'jumlah kamar kosan tidak boleh kosong!',
			]
		],
		'harga' => [
			'rules'	=> 'required',
			'errors' => [
				'required' => '{field} kosan tidak boleh kosong!',
			]
		],
		'deskripsi' => [
			'rules'	=> 'required',
			'errors' => [
				'required' => '{field} kosan tidak boleh kosong!',
			]
		],
		'ukuran_kamar' => [
			'rules'	=> 'required',
			'errors' => [
				'required' => 'ukuran kamar kosan tidak boleh kosong!',
			]
		],
		'photo' => [
			'rules'	=> 'max_size[photo, 1024]|is_image[photo]|mime_in[photo,image/png,image/jpg,image/jpeg]',
			'errors' => [
				'max_size' => '{field} terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'mime_in' => 'yang anda upload bukan photo',
			]
		],
	];

	public $editProfil = [
		'nama' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'nama tidak boleh kosong'
			]
		],
		'image' => [
			'rules' => 'max_size[image, 1024]|mime_in[image,image/png,image/jpg,image/jpeg]|is_image[image]',
			'errors' => [
				'max_size' => '{field} terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'mime_in' => 'yang anda upload bukan photo',
			]
		]
	];

	// Controller User Biasa
	public $editProfilUser = [
		'nama' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'nama tidak boleh kosong'
			]
		],
		'status' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'status tidak boleh kosong'
			]
		],
		'no_hp' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'no hp tidak boleh kosong'
			]
		],
		'jenis_kelamin' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'jenis kelamin tidak boleh kosong'
			]
		],
		'tanggal_lahir' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'tanggal lahir tidak boleh kosong'
			]
		],
		'image' => [
			'rules' => 'max_size[image, 1024]|mime_in[image,image/png,image/jpg,image/jpeg]|is_image[image]',
			'errors' => [
				'max_size' => '{field} terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'mime_in' => 'yang anda upload bukan photo',
			]
		]
	];

	public $savePassword = [
		'cpassword' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'masukkan password'
			]
		],
		'npassword' => [
			'rules' => 'required|matches[rpassword]|min_length[6]',
			'errors' => [
				'required' => 'masukkan password',
				'matches' => 'password tidak sama',
				'min_length' => 'password harus lebih dari 6 huruf'
			]
		],
		'rpassword' => [
			'rules' => 'required|matches[npassword]',
			'errors' => [
				'required' => 'masukkan password',
				'matches' => 'password tidak sama',
				'min_length' => 'password harus lebih dari 6 huruf'
			]
		],
	];

	public $saveMitra = [
		'nama' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'nama tidak boleh kosong',
			]
		],
		'nama_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'nama_kosan tidak boleh kosong',
			]
		],
		'alamat' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'alamat tidak boleh kosong',
			]
		],
		'email' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'email tidak boleh kosong',
			]
		],
		'no_hp' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'no_hp tidak boleh kosong',
			]
		],
		'photo_ktp' => [
			'rules' => 'uploaded[photo_ktp]|max_size[photo_ktp, 1024]|is_image[photo_ktp]|ext_in[photo_ktp,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'photo ktp tidak boleh kosong',
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
		'photo_selfie' => [
			'rules' => 'uploaded[photo_selfie]|max_size[photo_selfie, 1024]|is_image[photo_selfie]|ext_in[photo_selfie,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'photo ktp tidak boleh kosong',
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
	];

	//Controller Mitra
	public $dataKosan = [
		'nama_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Nama kosan tidak boleh kosong'
			]
		],
		'alamat_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Alamat kosan tidak boleh kosong'
			]
		],
		'tersedia_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tersedia kamar kosan tidak boleh kosong'
			]
		],
		'panjang_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Panjang kosan tidak boleh kosong'
			]
		],
		'lebar_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Lebar kosan tidak boleh kosong'
			]
		],
		'deskripsi_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Deskripsi kosan tidak boleh kosong'
			]
		],
		'keterangan_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Keterangan kosan tidak boleh kosong'
			]
		],
		'harga_perbulan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Harga Perbulan kosan tidak boleh kosong'
			]
		],
		'photo_1' => [
			'rules' => 'uploaded[photo_1]|max_size[photo_1, 1024]|is_image[photo_1]|ext_in[photo_1,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'photo 1 tidak boleh kosong',
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
		'photo_2' => [
			'rules' => 'uploaded[photo_2]|max_size[photo_2, 1024]|is_image[photo_2]|ext_in[photo_2,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'photo 2 tidak boleh kosong',
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
		'photo_3' => [
			'rules' => 'uploaded[photo_3]|max_size[photo_3, 1024]|is_image[photo_3]|ext_in[photo_3,png,jpg,jpeg]',
			'errors' => [
				'uploaded' => 'photo 3 tidak boleh kosong',
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
	];
	public $dataEditKosan = [
		'nama_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Nama kosan tidak boleh kosong'
			]
		],
		'alamat_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Alamat kosan tidak boleh kosong'
			]
		],
		'tersedia_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tersedia kamar kosan tidak boleh kosong'
			]
		],
		'panjang_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Panjang kosan tidak boleh kosong'
			]
		],
		'lebar_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Lebar kosan tidak boleh kosong'
			]
		],
		'deskripsi_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Deskripsi kosan tidak boleh kosong'
			]
		],
		'keterangan_kosan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Keterangan kosan tidak boleh kosong'
			]
		],
		'harga_perbulan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Harga Perbulan kosan tidak boleh kosong'
			]
		],
		'photo_1' => [
			'rules' => 'max_size[photo_1, 1024]|is_image[photo_1]|ext_in[photo_1,png,jpg,jpeg]',
			'errors' => [
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
		'photo_2' => [
			'rules' => 'max_size[photo_2, 1024]|is_image[photo_2]|ext_in[photo_2,png,jpg,jpeg]',
			'errors' => [
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
		'photo_3' => [
			'rules' => 'max_size[photo_3, 1024]|is_image[photo_3]|ext_in[photo_3,png,jpg,jpeg]',
			'errors' => [
				'max_size' => 'photo terlalu besar!',
				'is_image' => 'yang anda upload bukan photo',
				'ext_in'   => 'photo harus berformat PNG,JPEG, JPG'
			]
		],
	];
}
