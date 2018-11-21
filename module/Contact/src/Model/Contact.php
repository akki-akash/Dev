<?php
namespace Contact\Model;
class contact{
	 public $id; 
   public $emp_name; 
   public $emp_job; 
   
   
   public function exchangeArray($data)
   {
	    $this->id = (!empty($data['id'])) ? $data['id'] : null; 
      $this->emp_name = (!empty($data['emp_name'])) ? $data['emp_name'] : null; 
      $this->emp_job = (!empty($data['emp_job'])) ? $data['emp_job'] : null; 
   }
}
