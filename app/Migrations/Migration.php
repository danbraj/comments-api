<?php

namespace CommentsApi\Migrations;

use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration
{
    protected $capsule;
    protected $schema;
    
    public function init()
    {
        $this->capsule = new \Illuminate\Database\Capsule\Manager;
        $this->capsule->addConnection([
            'driver' => 'sqlite',
            'database' => __DIR__ . '/../../test.db',
            'prefix' => ''
        ]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
        $this->schema = $this->capsule->schema();
    }
}