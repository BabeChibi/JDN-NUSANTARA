<?php 
	class admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_admin');
			if($this->session->userdata('status')!='login'){
				redirect('master');
			}
		}
		function page(){
			$page = $this->uri->segment(3);
			if(empty($page)){
				$page='beranda';
			}
			$data['tmp_kontak'] = $this->model_admin->tmp_kontak()->result();
			$data['tmp_profil'] = $this->model_admin->tmp_profil()->result();
			$data['tmp_riwayat'] = $this->model_admin->tmp_riwayat()->result();
			$data['page']=$page;
			if($page == 'slide'){
				$data['tmp_slide']=$this->model_admin->tmp_slide()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_slide'){
				$f_slide = $this->uri->segment(4);
				if(empty($f_slide)){
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['judul']='Input Data Slide';
					$data['open']='admin/simpan_slide';
					$data['kode']=$this->model_admin->id_slide();
				}else{
					$data['status']='edit';
					$data['value']='Edit';
					$data['judul']='Edit Data Slide';
					$data['open']='admin/edit_slide';
					$data['hsl']=$this->model_admin->qw("slide","WHERE id_slide = '$f_slide'");
				}
				$this->load->view('index',$data);
			}else if($page == 'riwayat'){
				$item_riwayat = $this->model_admin->tmp_riwayat()->row_array();
				$hsl_riwayat = $item_riwayat['id_riwayat'];
				$data['item'] = $item_riwayat;
				$data['kode']=$hsl_riwayat;
				$data['tmp_riwayat']=$this->model_admin->tmp_riwayat()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_riwayat'){
				$f_riwayat = $this->uri->segment(4);
				if(empty($f_riwayat)){
					$data['status']='simpan';
					$data['judul']='Input Data Riwayat';
					$data['value']='Simpan';
					$data['open']='admin/simpan_riwayat';
					$data['kode']=$this->model_admin->id_riwayat();
				}else{
					$data['status']='edit';
					$data['judul']='Edit Data Riwayat';
					$data['value']="Edit";
					$data['open']='admin/edit_riwayat';
					$data['hsl']=$this->model_admin->qw("riwayat","WHERE id_riwayat = '$f_riwayat'");
				}
				$this->load->view('index',$data);
			}else if($page == 'kontak'){
				$item_kontak = $this->model_admin->tmp_kontak()->row_array();
				$hsl_kontak = $item_kontak['id_kontak'];
				$data['item'] = $item_kontak;
				$data['kode']=$hsl_kontak;
				$data['tmp_kontak'] = $this->model_admin->tmp_kontak()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_kontak'){
				$f_kontak = $this->uri->segment(4);
				if(empty($f_kontak)){
					$data['status']='simpan';
					$data['judul'] = 'Input Data Kontak';
					$data['value']='Simpan';
					$data['open'] = 'admin/simpan_kontak';
					$data['kode'] = $this->model_admin->id_kontak();
				}else{
					$data['status']='edit';
					$data['judul'] = 'Edit Data Kontak';
					$data['value'] = 'Edit';
					$data['open'] = 'admin/edit_kontak';
					$data['hsl'] = $this->model_admin->qw("kontak","WHERE id_kontak = '$f_kontak'");
				}
				$this->load->view('index',$data);
			}else if($page == 'artikel'){
				$data['tmp_artikel'] = $this->model_admin->tmp_artikel()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_artikel'){
				$f_artikel = $this->uri->segment(4);
				if(empty($f_artikel)){
					$data['status']='simpan';
					$data['judul']='Input Data Artikel';
					$data['value'] = 'Simpan';
					$data['open'] = 'admin/simpan_artikel';
					$data['kode']= $this->model_admin->id_artikel();
				}else{
					$data['status'] = 'edit';
					$data['judul'] = 'Edit Data Artikel';
					$data['value'] = 'Edit';
					$data['open'] = 'admin/edit_artikel';
					$data['hsl'] = $this->model_admin->qw("artikel","WHERE id_artikel = '$f_artikel'");
				}
				$this->load->view('index',$data);
			}else if($page == 'profil'){
				$item_profil = $this->model_admin->tmp_profil()->row_array();
				$data['item'] = $item_profil;
				$hsl_profil = $item_profil['id_profil'];
				$data['kode']=$hsl_profil;
				$data['tmp_profil'] = $this->model_admin->tmp_profil()->result();
				$this->load->view('index',$data);
			}else if($page == 'f_profil'){
				$f_profil = $this->uri->segment(4);
				if(empty($f_profil)){
					$data['status']='simpan';
					$data['judul'] = 'Input Data Profil';
					$data['value']='Simpan';
					$data['open']='admin/simpan_profil';
					$data['kode']= $this->model_admin->id_profil();
				}else{
					$data['status']='edit';
					$data['judul']= 'Edit Data Profil';
					$data['value']='Edit';
					$data['open']='admin/edit_profil';
					$data['hsl'] = $this->model_admin->qw("profil","WHERE id_profil = '$f_profil'");
				}
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);
			}
		}
		function simpan_slide(){
			$config['upload_path']='./slide/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_slide');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_slide'=>$this->input->post('id_slide'),
				'foto_slide'=>$foto,
				'durasi'=>$this->input->post('durasi')
				);
			$this->model_admin->simpan_slide('slide',$ar);
			echo "<script>alert('Berhasil Menyimpan')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/slide'</script>";
		}
		function edit_slide(){
			$id = $this->input->post('id_slide');
			$config['upload_path']='./slide/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_slide');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
					'id_slide'=>$this->input->post('id_slide'),
					'durasi'=>$this->input->post('durasi')
					);
				$this->model_admin->edit_slide('slide',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/slide'</script>";
			}else{
				$mm = $this->db->query("SELECT foto_slide FROM slide WHERE id_slide = '$id'");
				$data = $mm->row_array();
				unlink('./slide/'.$data['foto_slide']);
				$ar = array(
					'id_slide'=>$this->input->post('id_slide'),
					'foto_slide'=>$foto,
					'durasi'=>$this->input->post('durasi')
					);
				$this->model_admin->edit_slide('slide',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/slide'</script>";
			}
		}
		function hapus_slide($id_slide){
			$mm = $this->db->query("SELECT foto_slide FROM slide WHERE id_slide = '$id_slide'");
			$data = $mm->row_array();
			unlink('./slide/'.$data['foto_slide']);
			$this->model_admin->hapus_slide('slide',$id_slide);
			echo "<script>alert('Berhasil Menghapus')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/slide'</script>";
		}
		function simpan_riwayat(){
			$config['upload_path']='./riwayat/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_riwayat');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_riwayat'=>$this->input->post('id_riwayat'),
				'foto_riwayat'=>$foto,
				'riwayat'=>$this->input->post('riwayat')
				);
			$this->model_admin->simpan_riwayat('riwayat',$ar);
			echo "<script>alert('Berhasil Menyimpan')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/riwayat'</script>";
		}
		function edit_riwayat(){
			$id = $this->input->post('id_riwayat');
			$config['upload_path']='./riwayat/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_riwayat');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
					'id_riwayat'=>$this->input->post('id_riwayat'),
					'riwayat'=>$this->input->post('riwayat')
					);
				$this->model_admin->edit_riwayat('riwayat',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/riwayat'</script>";
			}else{
				$mm = $this->db->query("SELECT foto_riwayat FROM riwayat WHERE id_riwayat = '$id'");
				$data = $mm->row_array();
				unlink('./riwayat/'.$data['foto_riwayat']);
				$ar = array(
					'id_riwayat'=>$this->input->post('id_riwayat'),
					'foto_riwayat'=>$foto,
					'riwayat'=>$this->input->post('riwayat')
					);
				$this->model_admin->edit_riwayat('riwayat',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/riwayat'</script>";
			}
		}
		function simpan_kontak(){
			$ar = array(
				'id_kontak'=>$this->input->post('id_kontak'),	
				'email'=>$this->input->post('email'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'alamat'=>$this->input->post('alamat'),
				'map'=>$this->input->post('map')
				);
			$this->model_admin->simpan_kontak('kontak',$ar);
			echo "<script>alert('Berhasil Menyimpan')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/kontak'</script>";
		}
		function edit_kontak(){
			$id = $this->input->post('id_kontak');
			$ar = array(
				'id_kontak'=>$this->input->post('id_kontak'),	
				'email'=>$this->input->post('email'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'alamat'=>$this->input->post('alamat'),
				'map'=>$this->input->post('map')
				);
			$this->model_admin->edit_kontak('kontak',$id,$ar);
			echo "<script>alert('Berhasil Mengedit')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/kontak'</script>";
		}
		function simpan_artikel(){
			$config['upload_path']='./artikel/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_artikel');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'foto_artikel'=>$foto,
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'tgl_artikel'=>$this->input->post('tgl_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel')
				);
			$this->model_admin->simpan_artikel('artikel',$ar);
			echo "<script>alert('Berhasil Menyimpan')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/artikel'</script>";
		}
		function edit_artikel(){
			$id = $this->input->post('id_artikel');
			$config['upload_path']='./artikel/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_artikel');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'tgl_artikel'=>$this->input->post('tgl_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel')
					);
				$this->model_admin->edit_artikel('artikel',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/artikel'</script>";
			}else{
				$mm = $this->db->query("SELECT foto_artikel FROM artikel WHERE id_artikel = '$id'");
				$data = $mm->row_array();
				unlink('./artikel/'.$data['foto_artikel']);
				$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'foto_artikel'=>$foto,
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'tgl_artikel'=>$this->input->post('tgl_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel')
					);
				$this->model_admin->edit_artikel('artikel',$id,$ar);
				echo "<script>alert('Berhasil Mengedit')</script>";
				echo "<script>document.location='http://localhost/JDN/admin/page/artikel'</script>";
			}
		}
		function hapus_artikel($id_artikel){
			$mm = $this->db->query("SELECT foto_artikel FROM artikel WHERE id_artikel = '$id_artikel'");
			$data = $mm->row_array();
			unlink('./artikel/'.$data['foto_artikel']);
			$this->model_admin->hapus_artikel('artikel',$id_artikel);
			echo "<script>alert('Berhasil Menghapus')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/artikel'</script>";
		}
		function simpan_profil(){
			$ar = array(
				'id_profil'=>$this->input->post('id_profil'),
				'profil'=>$this->input->post('profil'),
				'visi'=>$this->input->post('visi'),
				'misi'=>$this->input->post('misi')
				);
			$this->model_admin->simpan_profil('profil',$ar);
			echo "<script>alert('Berhasil Menyimpan')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/profil'</script>";
		}
		function edit_profil(){
			$id = $this->input->post('id_profil');
			$ar = array(
				'id_profil'=>$this->input->post('id_profil'),
				'profil'=>$this->input->post('profil'),
				'visi'=>$this->input->post('visi'),
				'misi'=>$this->input->post('misi')
				);
			$this->model_admin->edit_profil('profil',$id,$ar);
			echo "<script>alert('Berhasil Mengedit')</script>";
			echo "<script>document.location='http://localhost/JDN/admin/page/profil'</script>";
		}
	}
 ?>