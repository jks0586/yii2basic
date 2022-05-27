<?php
/**
 * login.php
 *
 * @var \sweelix\oauth2\server\forms\User $user
 *
 */
use yii\helpers\Html;
?>
    <?php echo Html::beginForm('', 'post', ['novalidate' => 'novalidate']); ?>
        <label>Username</label>
        <?php echo Html::activeTextInput($user, 'username', [
            'required' => 'required',
        ]); ?>
        <br/>
    
        <label>Password</label>
        <?php echo Html::activePasswordInput($user, 'password', [
            'required' => 'required',
        ]); ?>
        <br/>
        <button type="submit">LOGIN</button>
    <?php echo Html::endForm(); ?>