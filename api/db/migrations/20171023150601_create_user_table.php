<?php


use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('user_id', 'integer')
            ->addColumn('created', 'datetime')
            ->create();
    }
}
