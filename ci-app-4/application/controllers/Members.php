<?php

class Members extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder = "members_v";
        $this->load->model("member_model");
    }


    public function index()
    {
        /* Tablodan verilerin getirilmesi */
        $items = $this->member_model->get_all();
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function newForm()
    {
        
        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }


    public function delete($id)
    {
        $delete = $this->member_model->delete(array(
            "id" => $id
        ));
        if ($delete) {

            echo "Silme Başarılı";
        } else {
            echo "Silinemedi";
        }
    }
}
