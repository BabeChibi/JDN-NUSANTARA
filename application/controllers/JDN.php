<?php 
	class JDN extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_JDN');
		}
		function page(){
			$page = $this->uri->segment(3);
			if(empty($page)){
				$page='home';
			}
			$jml_artikel = $this->model_JDN->jml_artikel();
			$this->load->library('pagination');
			$config['total_rows'] = $jml_artikel;
			$config['per_page'] = 4;
			$from = $this->uri->segment(4);
			$data['tmp_artikel'] = $this->model_JDN->data_artikel($config['per_page'],$from);
			$this->pagination->initialize($config);
			$data['tmp_slide'] = $this->model_JDN->tmp_slide()->result();
			$item_slide = $this->model_JDN->tmp_slide()->row_array();
			$item_profil = $this->model_JDN->tmp_profil()->row_array();
			$data['item_profil'] = $item_profil;
			$data['item_slide']  = $item_slide;
			$item_kontak = $this->model_JDN->tmp_kontak()->row_array();
			$data['item_kontak'] = $item_kontak;
			$data['tmp_riwayat'] = $this->model_JDN->tmp_riwayat()->result();
			$data['page']=$page;
			if($page == 'riwayat'){
				$data['tmp_riwayat'] = $this->model_JDN->tmp_riwayat()->result();
				$this->load->view('JDN',$data);
			}else if($page == 'profil'){
				$data['tmp_profil'] = $this->model_JDN->tmp_profil()->result();
				$this->load->view('JDN',$data);		
			}else if($page == 'visimisi'){
				$data['tmp_profil'] = $this->model_JDN->tmp_profil()->result();
				$this->load->view('JDN',$data);
			}else if($page == 'kontak'){
				$data['tmp_kontak'] = $this->model_JDN->tmp_kontak()->result();
				$this->load->view('JDN',$data);
			}else if($page == 'artikel'){
			$jml_artikel = $this->model_JDN->jml_artikel();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/JDN/page/artikel/';
			$config['total_rows'] = $jml_artikel;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = '&laquo; First';
			$config['first_tag_open']= '<li class="prev page">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last &raquo';
			$config['last_tag_open'] = '<li class ="next page">';
			$config['last_tag_close']='</li>';
			$config['next_link'] = 'Next &raquo';
			$config['next_tag_open'] = '<li class="next page">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo; Prev';
			$config['prev_tag_open'] = '<li class="prev page">';
			$config['prev_tag_close']='</li>';
			$config['cur_tag_open'] = '<li  class="current"><a href="">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open']='<li class="page">';
			$config['num_tag_close'] = '</li>';
			$config['per_page'] = 4;
			$from = $this->uri->segment(4);
			$this->pagination->initialize($config);
			$data['paging'] = $this->pagination->create_links();
			$data['tmp_artikel'] = $this->model_JDN->data_artikel($config['per_page'],$from);
				$this->load->view('JDN',$data);
			}else if($page == 'detail_artikel'){
				$d_artikel = $this->uri->segment(4);
				$data['hsl'] = $this->model_JDN->qw("artikel","WHERE id_artikel ='$d_artikel'");
				$this->load->view('JDN',$data);
			}else{
				$this->load->view('JDN',$data);
			}
		}
	}
 ?>