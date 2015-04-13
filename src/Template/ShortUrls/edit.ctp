<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shortUrl->serial],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shortUrl->serial)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Short Urls'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="shortUrls form large-10 medium-9 columns">
    <?= $this->Form->create($shortUrl); ?>
    <fieldset>
        <legend><?= __('Edit Short Url') ?></legend>
        <?php
            echo $this->Form->input('shortUrl');
            echo $this->Form->input('longUrl');
            echo $this->Form->input('timeStamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
