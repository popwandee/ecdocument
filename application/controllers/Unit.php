<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
         redirect('login');
        }else{
            $this->load->model('Unit_model');
        }
    }

    /*
     * Listing of units
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('unit/index?');
        $config['total_rows'] = $this->Unit_model->get_all_units_count();
        $this->pagination->initialize($config);

        $data['units'] = $this->Unit_model->get_all_units($params);

        $data['_view'] = 'unit/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new unit
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('num_personel','Num Personel','numeric');

		if($this->form_validation->run())
        {
            $params = array(
				'unit_name' => $this->input->post('unit_name'),
				'num_personel' => $this->input->post('num_personel'),
				'location' => $this->input->post('location'),
				'role' => $this->input->post('role'),
            );

            $unit_id = $this->Unit_model->add_unit($params);
            redirect('unit/index');
        }
        else
        {
            $data['_view'] = 'unit/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a unit
     */
    function edit($unit_id)
    {
        // check if the unit exists before trying to edit it
        $data['unit'] = $this->Unit_model->get_unit($unit_id);

        if(isset($data['unit']['unit_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('num_personel','Num Personel','numeric');

			if($this->form_validation->run())
            {
                $params = array(
					'unit_name' => $this->input->post('unit_name'),
					'num_personel' => $this->input->post('num_personel'),
					'location' => $this->input->post('location'),
					'role' => $this->input->post('role'),
                );

                $this->Unit_model->update_unit($unit_id,$params);
                redirect('unit/index');
            }
            else
            {
                $data['_view'] = 'unit/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The unit you are trying to edit does not exist.');
    }

    /*
     * Deleting unit
     */
    function remove($unit_id)
    {
        $unit = $this->Unit_model->get_unit($unit_id);

        // check if the unit exists before trying to delete it
        if(isset($unit['unit_id']))
        {
            $this->Unit_model->delete_unit($unit_id);
            redirect('unit/index');
        }
        else
            show_error('The unit you are trying to delete does not exist.');
    }

}
