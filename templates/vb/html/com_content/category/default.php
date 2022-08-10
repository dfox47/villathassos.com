<?php defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption'); ?>

<div class="category-list<?php echo $this->pageclass_sfx;?>">
	<?php $this->subtemplatename = 'articles';
	echo JLayoutHelper::render('joomla.content.category_default', $this); ?>
</div>
