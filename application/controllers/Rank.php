<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Rank extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
         redirect('login');
        }
        $this->load->model('Rank_model');
    }

    /*
     * Listing of rank
     */
    function index()
    {
        $data['rank'] = $this->Rank_model->get_all_rank();

        $data['_view'] = 'rank/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new rank
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'rank' => $this->input->post('rank'),
            );

            $rank_id = $this->Rank_model->add_rank($params);
            redirect('rank/index');
        }
        else
        {
            $data['_view'] = 'rank/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a rank
     */
    function edit($rank_id)
    {
        // check if the rank exists before trying to edit it
        $data['rank'] = $this->Rank_model->get_rank($rank_id);

        if(isset($data['rank']['rank_id']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'rank' => $this->input->post('rank'),
                );

                $this->Rank_model->update_rank($rank_id,$params);
                redirect('rank/index');
            }
            else
            {
                $data['_view'] = 'rank/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The rank you are trying to edit does not exist.');
    }

    /*
     * Deleting rank
     */
    function remove($rank_id)
    {
        $rank = $this->Rank_model->get_rank($rank_id);

        // check if the rank exists before trying to delete it
        if(isset($rank['rank_id']))
        {
            $this->Rank_model->delete_rank($rank_id);
            redirect('rank/index');
        }
        else
            show_error('The rank you are trying to delete does not exist.');
    }

}
