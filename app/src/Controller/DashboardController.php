<?php

namespace App\Controller;

/**
 * @property \App\Model\Table\InvoicesTable $Invoices
 *
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{

    public function index()
    {
    }

    public function invoices()
    {
    }

    public function invoiceChart()
    {
        $this->loadModel('Invoices');
        $invoices = $this->Invoices->find();

        /**
         * Get Collection of {date} => {count of Invoices issued that day}
         */
        $count_by_dates = $invoices->countBy(function ($invoice) {
            return $invoice->issued_at->toDateString();
        });
        $this->set('count_by_dates', $count_by_dates->toArray());
    }
}
