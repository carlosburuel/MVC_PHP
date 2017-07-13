<?php
  class HomeModel extends Model
  {
    
    public function __construct()
    {
      parent::__construct();
    }

    public function getUser($id)
    {
      return $this->db->query("SELECT * FROM catalimentos WHERE idAlimentos = $id ")->fetch_array(MYSQLI_ASSOC);
    }
  }