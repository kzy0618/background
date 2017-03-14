<?php

namespace OCA\Background\Db;

use OCP\IDBConnection;
use OCP\AppFramework\Db\Mapper;

class BackgroundInforMapper extends Mapper {
    public function __construct(IDBConnection $db){
    	parent::__construct($db,'background','\OCA\Background\Db\backgroundinfo');
    }

    public function find($id){
    	$sql = 'SELECT * FROM *PREFIX*background '.
      	'WHERE id = ?';
    	return $this->findEntity($sql, [$id]);
    }
    
    public function findAll($limit=null, $offset=null){
    	$sql = 'SELECT * FROM *PREFIX*background';
    	return $this->findEntities($sql, $limit, $offset);
    }
}

?>
