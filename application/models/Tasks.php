<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tasks
 *
 * @author Michael
 */
class Tasks extends MY_Model {

        public function __construct()
        {
                parent::__construct('tasks', 'id');
        }
        
        // provide form validation rules
        public function rules()
        {
            $config = array(
                ['field' => 'task', 'label' => 'TODO task', 'rules' => 'alpha_numeric_spaces|max_length[64]'],
                ['field' => 'priority', 'label' => 'Priority', 'rules' => 'integer|less_than[4]'],
                ['field' => 'size', 'label' => 'Task size', 'rules' => 'integer|less_than[4]'],
                ['field' => 'group', 'label' => 'Task group', 'rules' => 'integer|less_than[5]'],
                ['field' => 'status', 'label' => 'Task status', 'rules' => 'integer|less_than[3]']
            );
            return $config;
        }

}
