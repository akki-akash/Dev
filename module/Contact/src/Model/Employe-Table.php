<?php  
namespace Contact\Model;  
use Zend\Db\TableGateway\TableGatewayInterface;  
class EmployeeTable { 
   protected $tableGateway; 
   public function __construct(TableGatewayInterface $tableGateway) { 
      $this->tableGateway = $tableGateway; 
   }
   public function fetchAll() { 
      $resultSet = $this->tableGateway->select();  
      return $resultSet; 
   } 
} 