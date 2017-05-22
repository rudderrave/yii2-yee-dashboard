<?php
/* @var $this yii\web\View */

$this->title = 'Dashboard';
$this->params['description'] = 'YeeCMS 0.2.0';
//$this->params['header-content'] = $this->render('actions');
?>
<div id="dashboard">
    <?= $this->render('info-box', ['infoBoxes' => $selectedInfoBoxes]) ?>

    <?php foreach ($layouts[$selectedLayout] as $key => $value) : ?>
        <?= $this->render('row', ['columns' => $value, 'widgets' => $widgets[$key], 'rowId' => $key]) ?>
    <?php endforeach; ?>
</div>

<?= $this->render('settings') ?>
