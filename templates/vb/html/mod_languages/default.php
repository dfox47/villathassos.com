<?php defined('_JEXEC') or die; ?>

<div class="mod_languages <?php echo $moduleclass_sfx ?>">
	<?php if ($headerText) : ?>
		<div class="pretext">
			<p><?php echo $headerText; ?></p>
		</div>
	<?php endif; ?>

	<?php if ($params->get('dropdown', 1)) : ?>
		<form name="lang" method="post" action="<?php echo htmlspecialchars(JUri::current()); ?>">
			<select class="inputbox" onchange="document.location.replace(this.value);" >
				<?php foreach ($list as $language) : ?>
					<option dir=<?php echo JLanguage::getInstance($language->lang_code)->isRTL() ? '"rtl"' : '"ltr"'?> value="<?php echo $language->link;?>" <?php echo $language->active ? 'selected="selected"' : ''?>>
						<?php echo $language->title_native;?>
					</option>
				<?php endforeach; ?>
			</select>
		</form>
	<?php else : ?>
		<?php foreach ($list as $language) :
			if ($language->active) { ?>
				<div class="active">
					<?php if ($params->get('image', 1)):?>
						<?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true);?>
					<?php else : ?>
						<?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?>
					<?php endif; ?>

					<i class="fa fa-caret-down"></i>
				</div>
			<?php }
		endforeach; ?>

		<ul>
			<?php foreach ($list as $language) : ?>
				<?php if ($params->get('show_active', 0) || !$language->active):?>
					<?php if (!$language->active) { ?>
						<li class="<?php echo $language->active ? 'active' : '';?>" dir="<?php echo JLanguage::getInstance($language->lang_code)->isRTL() ? 'rtl' : 'ltr' ?>">
							<a href="<?php echo $language->link;?>">
								<?php if ($params->get('image', 1)):?>
									<?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true);?>
								<?php else : ?>
									<?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?>
								<?php endif; ?>
							</a>
						</li>
					<?php } ?>
				<?php endif;?>
			<?php endforeach;?>
		</ul>
	<?php endif; ?>

	<?php if ($footerText) : ?>
		<div class="posttext">
			<p><?php echo $footerText; ?></p>
		</div>
	<?php endif; ?>
</div>
