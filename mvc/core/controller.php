<?php 
    class controller {
        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        public function view($view , $data){
            require_once "./mvc/views/".$view.".php";
        }

        public function view2($view2 , $data2){
            require_once "./partial/".$view2 .".php";
        }
    }
?>