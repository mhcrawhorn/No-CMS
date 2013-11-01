<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_Accessories_Widget extends CMS_Controller {
    public function slide(){
        $this->load->model('slide_model');
        $data['slide_list'] = $this->slide_model->get();
        $data['slide_height'] = cms_module_config($module_directory, 'slideshow_height');
        $this->view($this->cms_module_path().'/widget_slide', $data);
    }
    
    public function tab(){
        $this->load->model('tab_model');
        $data['tab_list'] = $this->tab_model->get();
        $this->view($this->cms_module_path().'/widget_tab', $data);
    }
    
    public function visitor_counter(){
        $this->load->model('visitor_counter_model');
        $data['visitor_count'] = $this->visitor_counter_model->get();
        $this->view($this->cms_module_path().'/widget_visitor_counter', $data);
    }
}