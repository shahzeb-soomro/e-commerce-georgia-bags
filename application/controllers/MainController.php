<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
//		$this->load->view('bags/header');
//	    $this->load->view('bags/index');
        $this->load->model('MainModel');
        $this->load->database();

        $data['result'] = $this->MainModel->getAllProducts();
        //var_dump($data);
        $this->load->view('bags/header');
        $this->load->view('bags/index', $data);


	}
	public function productDetails($id = NULL){
	    $product_id = $id;
        $this->load->model('MainModel');
        $productData['result'] = $this->MainModel->getProductDetails($product_id);
        $this->load->view('bags/header');
	    $this->load->view('bags/single', $productData);
    }

    public function getAboutUsPage(){
        $this->load->view('bags/header');
        $this->load->view('bags/about');
    }

    public function getContactUsPage(){
        $this->load->view('bags/header');
        $this->load->view('bags/contact');
    }

    public function login(){
	    $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('MainModel');
        $login['result'] = $this->MainModel->login($username,$password);
        if($login['result']){
            redirect('/AdminController/index');
        }
        else{
            //$this->session->set_flashdata('error_msg', 'Invalid Credentials. Try Again');
            $this->index();
        }

    }
}
