<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
        $this->load->view('bags/admin/header');
	    $this->load->view('bags/admin/index');
        $this->load->view('bags/admin/footer');
	}

	public function temp(){
	    $this->load->view('bags/admin/form');
    }
	public function addProductFormSubmit(){

	    if(!empty($_FILES['product_image']['name'])){

            $this->load->model('MainModel');
            $this->load->database();

            $config['upload_path'] = 'assets/images/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['product_image']['name'];

            $this->load->library('upload',$config);

            if($this->upload->do_upload('product_image')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }

	        $dto = array(
                'product_name' => $this->input->post('product_name'),
                'short_description' => $this->input->post('short_description'),
                'product_image' => $picture,
                'cat_id' => $this->input->post('cat_id'),
                '72_ntr' => $this->input->post('72_ntr'),
                '144_ntr' => $this->input->post('144_ntr'),
                '300_ntr' => $this->input->post('300_ntr'),
                '600_ntr' => $this->input->post('600_ntr'),
                '1000_ntr' => $this->input->post('1000_ntr'),
                '2500_ntr' => $this->input->post('2500_ntr'),
                '72_clr' => $this->input->post('72_clr'),
                '144_clr' => $this->input->post('144_clr'),
                '300_clr' => $this->input->post('300_clr'),
                '600_clr' => $this->input->post('600_clr'),
                '1000_clr' => $this->input->post('1000_clr'),
                '2500_clr' => $this->input->post('2500_clr'),
                'price_includes' => $this->input->post('price_includes'),
                'lead_time' => $this->input->post('lead_time'),
                'rush_available' => $this->input->post('rush_available'),
                'imprint_area' => $this->input->post('imprint_area'),
                'setup_charge' => $this->input->post('setup_charge'),
                'repeat_setup' => $this->input->post('repeat_setup'),
                'flash_charge' => $this->input->post('flash_charge'),
                'pms_match' => $this->input->post('pms_match'),
                'less_than_minimum' => $this->input->post('less_than_minimum'),
                'color_change_charge' => $this->input->post('color_change_charge'),
                'spec_sample' => $this->input->post('spec_sample'),
                'item_no' => $this->input->post('item_no'),
                'item_name' => $this->input->post('item_name'),
                'available_colors' => $this->input->post('available_colors'),
                'product_size' => $this->input->post('product_size'),
                'quality_matrial' => $this->input->post('quality_matrial'),
                'quality_weight' => $this->input->post('quality_weight'),
                'handle_length' => $this->input->post('handle_length'),
                'side_gussets' => $this->input->post('side_gussets'),
                'bottom_gussets' => $this->input->post('bottom_gussets'),
                'available_decoration' => $this->input->post('available_decoration'),
                'long_description' => $this->input->post('long_description')
            );

            $insertUserData = $this->MainModel->addProduct($dto);
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
                redirect(site_url() . '/AdminController/');
            }
            else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                redirect(site_url() . '/AdminController/');
            }

        }
        
    }

    public function productSetup(){

        $this->load->model('MainModel');
        $this->load->database();

        $data['category'] = $this->MainModel->getCategory();

        $this->load->view('bags/admin/header');
        $this->load->view('bags/admin/addProduct',$data);
        $this->load->view('bags/admin/footer');
    }

    public function viewProducts(){
        $this->load->model('MainModel');
        $this->load->database();

        $data['products'] = $this->MainModel->getProductsForAdminPanel();
        $this->load->view('bags/admin/viewProducts',$data);

    }

    public function deleteProduct($id = NULL){
        $this->load->model('MainModel');
        $this->load->database();
        $data['products'] = $this->MainModel->deleteProduct($id);
        redirect(site_url() . '/AdminController/viewProducts');
    }
}
?>