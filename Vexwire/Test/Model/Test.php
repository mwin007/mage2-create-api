<?php
namespace Vexwire\Test\Model;
use Vexwire\Test\Api\TestInterface;
class Test implements TestInterface
{


     /**
     * {@inheritdoc}
     */
    public function setData($data)
    {
        $id =  $data['id'];
        $number =$data['esn'];
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('esn_table');

        $sql = "Insert Into " . $tableName . " (id, esn) Values ($id, $number)";
        $connection->query($sql);
        return 'successfully saved';
    }
}
