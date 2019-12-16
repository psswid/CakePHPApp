<?php
/**
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $count_by_dates
 */
?>
<?php
$labels = [];
$series = [];
foreach ($count_by_dates as $date => $count){
    $labels[]=$date;
    $series[]=$count;
}
?>
<h3>Wykres faktury/dzień</h3>
<div class="ct-chart ct-perfect-fourth"></div>
<?= $this->Html->script('chartist'); ?>
<script>
    var data = {
        // A labels array that can contain any sort of values
        labels: <?= json_encode($labels) ?>,
        // Our series array that contains series objects or in this case series data arrays
        series: [<?= json_encode($series) ?>]
    };

    // Create a new line chart object where as first parameter we pass in a selector
    // that is resolving to our chart container element. The Second parameter
    // is the actual data object.
    new Chartist.Line('.ct-chart', data);
</script>
