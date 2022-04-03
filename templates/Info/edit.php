<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $info->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $info->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Info'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="info form content">
            <?= $this->Form->create($info) ?>
            <fieldset>
                <legend><?= __('Edit Info') ?></legend>
                <?php
                    echo $this->Form->control('lastfetchtime', ['empty' => true]);
                    echo $this->Form->control('state');
                    echo $this->Form->control('tgp_ulp');
                    echo $this->Form->control('tgp_dl');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
