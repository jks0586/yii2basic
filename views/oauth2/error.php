<?php
/**
 * error.php
 *
 * @var string $type error type
 * @var string $description error description
 */
use yii\helpers\Html;
?>
<h1 class="alert-heading"><?php echo ($type ? : 'Unkown error'); ?></h1>
<p><?php echo ($description ? : 'Please check your request'); ?></p>
