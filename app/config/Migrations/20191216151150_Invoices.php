<?php
use Migrations\AbstractMigration;

class Invoices extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        // create the table
        $table = $this->table('invoices');
        $table
            ->addColumn('number', 'string', ['limit' => 30])
            ->addColumn('issued_at', 'datetime')
            ->addColumn('value', 'integer', ['limit' => 11])
            ->addColumn('company_name', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('company_address', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('company_email', 'string', ['limit' => 100, 'null' => true])
            ->create();
    }

    /**
     * Migrate Up.
     */
    public function up()
    {
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
    }
}
