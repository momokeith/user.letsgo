<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{

    public function run()
    {
        $data = [
            [
                'email' => 'mohamed.keita@worldfirst.com',
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
            ->save();
    }
}
