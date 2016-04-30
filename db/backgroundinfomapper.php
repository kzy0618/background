<?php

namespace OCA\Background\Db;

use OCP\IDBConnection;
use OCP\AppFramework\Db\Mapper;

class BackgroundInforMapper extends Mapper {
    public function __construct(IDBConnection $db){
    	parent::__construct($db, 'background_infor');
    }

    public function find($id){
    	$sql = 'select * from *PERFIX*background_infor '.
      	'where id = ?';
    	return $this->findEntity($sql, [$id]);
    }
    
    public function findAll($limit=null, $offset=null){
    	$sql = 'select * from *PREFIX*background_infor';
    	return $this->findEntities($sql, $limit, $offset);
    }
}

?>
