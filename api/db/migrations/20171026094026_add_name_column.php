<?php


use Phinx\Migration\AbstractMigration;

class AddNameColumn extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
            ->addColumn('name', 'string',['null' => true,'default'=>''])
            ->update();
    }
}
