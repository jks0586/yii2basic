<?php
/**
 * authorize.php
 *
 * @var \sweelix\oauth2\server\interfaces\ScopeModelInterface[] $requestedScopes
 * @var \sweelix\oauth2\server\interfaces\ClientModelInterface $client
 *
 */
use yii\helpers\Html;
?>
    <h1><?php echo $client->name ?> <span>requests access</span></h1>
    
    <?php echo Html::beginForm(); ?>
        <?php if(empty($requestedScopes) === false) : ?>
        <ul>
            <?php foreach($requestedScopes as $scope): ?>
            <li>
                <h4><?php echo $scope->id; ?></h4>
                <p>
                    <?php echo $scope->definition; ?>
                </p>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
            <!-- name of decline button **must be** decline -->
            <button type="submit" name="decline">DECLINE</button>
            <!-- name of accept button **must be** accept -->
            <button type="submit" name="accept">AUTHORIZE</button>
    <?php echo Html::endForm(); ?>