<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout_blade {
    protected
        $templated = 'default',
        $returned = FALSE;

    function __construct ()
    {
        $this->_ci = &get_instance();
        if(!isset($this->_ci->blade))
        {
            $this->_ci->load->library('blade');
        }
    }

    function view ($view, $data = NULL)
    {
        if(isset($data['title']) && !empty($data['title'])) $data['title'] = $data['title'] .' - '. $this->_ci->config->item('app_name');
        else $data['title'] = $this->_ci->config->item('app_name');
        //
        $data['_header'] = $this->_ci->blade->render('main-inc/'.$this->template.'/header', $data);
        //
        // if(is_array($view))
        // {
        //     $data['_content'] = array();
        //     foreach ($view as $t)
        //     {
        //         array_push($data['_content'], $this->_ci->load->view('inc/'.$t, $data, TRUE));
        //     }
        // }
        // else
        // {
        //     if($view !== '')
        //         $data['_content'] = $this->_ci->load->view('inc/'.$view, $data, TRUE);
        //     else
        //         $data['_content'] = "";
        // }
        // ['_footer'] = $this->_ci->load->view('main-inc/'.$template.'/footer', $data, TRUE);

        $this->_ci->blade->view($this->template.'/default', $data);
        // $this->_ci->load->view('layout/default', $data, $returned);
    }
}
