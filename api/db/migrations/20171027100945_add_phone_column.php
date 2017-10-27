<?php


use Phinx\Migration\AbstractMigration;

class AddPhoneColumn extends AbstractMigration
{

    public function change()
    {
        $this->table('users')
            ->addColumn('phone', 'string',['null' => true,'default'=>''])
            ->update();
    }
}
