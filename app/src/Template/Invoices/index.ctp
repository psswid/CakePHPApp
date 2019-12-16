<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>

<div class="invoices index large-9 medium-8 columns content">
    <h3><?= __('Invoices') ?></h3>
    <table id="content-table" class="display dataTable" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('number') ?></th>
            <th scope="col"><?= $this->Paginator->sort('issued_at') ?></th>
            <th scope="col"><?= $this->Paginator->sort('value') ?></th>
            <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('company_address') ?></th>
            <th scope="col"><?= $this->Paginator->sort('company_email') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->id) ?></td>
                <td><?= h($invoice->number) ?></td>
                <td><?= h($invoice->issued_at) ?></td>
                <td><?= $this->Number->format($invoice->value) ?></td>
                <td><?= h($invoice->company_name) ?></td>
                <td><?= h($invoice->company_address) ?></td>
                <td><?= h($invoice->company_email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <div>
        <button type="button" class="btn btn-success"><?= $this->Html->link(__('New Invoice'),
                ['action' => 'add']) ?></button>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function () {
        $('#invoices_table').DataTable();
    });
</script>
