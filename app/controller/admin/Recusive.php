<?php
      class Recusive {
        private $data;
        private $recusion = '';
        private $id_dm;
        public function __construct($data,$id_dm=''){ 
            $this->data = $data;
            // var_dump($data);
            // die;
            $this->id_dm = $id_dm;
        }
        
        public function categories($prend_id,$id=0,$text='-'){
            foreach($this->data as $value){
                if ($value['parent_id']==$id) {
                    if ( !empty($prend_id) && $prend_id == $value['ma_loai_sp']) {
                        $this->recusion .= "<option selected value='" .$value['ma_loai_sp']. "'>".$text.$value['ten_loai']."</option >";   
                    }else{
                        if (!($this->id_dm == $value['ma_loai_sp'])) {
                            $this->recusion .= "<option value='" .$value['ma_loai_sp']. "'>".$text.$value['ten_loai']."</option >";   
                        }
                    }
                    $this->categories($prend_id,$value['ma_loai_sp'],$text.'-');
                }
            }
            return $this->recusion;
        }
    }