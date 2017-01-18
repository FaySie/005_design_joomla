<?php
/**
 * Part of Component Slideshow files.
 *
 * @copyright   Copyright (C) 2014 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Windwalker\Data\Data;

// No direct access
defined('_JEXEC') or die;

// Prepare script
JHtmlBehavior::multiselect('adminForm');

/**
 * Prepare data for this template.
 *
 * @var $container Windwalker\DI\Container
 * @var $data      Windwalker\Data\Data
 * @var $asset     Windwalker\Helper\AssetHelper
 * @var $grid      Windwalker\View\Helper\GridHelper
 * @var $date      \JDate
 */
$container = $this->getContainer();
$asset     = $container->get('helper.asset');
$grid      = $data->grid;
$date      = $container->get('date');

// Set order script.
$grid->registerTableSort();
?>

<!-- LIST TABLE -->
<table id="slideList" class="table table-striped adminlist">

<!-- TABLE HEADER -->
<thead>
<tr>
	<!--SORT-->
	<th width="1%" class="nowrap center hidden-phone">
		<?php echo $grid->orderTitle(); ?>
	</th>

	<!--CHECKBOX-->
	<th width="1%" class="center">
		<?php echo JHtml::_('grid.checkAll'); ?>
	</th>

	<!--STATE-->
	<th width="5%" class="nowrap center">
		<?php echo $grid->sortTitle('JSTATUS', 'slide.state'); ?>
	</th>

	<!--TITLE-->
	<th class="center">
		<?php echo $grid->sortTitle('JGLOBAL_TITLE', 'slide.title'); ?>
	</th>

	<!--CATEGORY-->
	<th width="10%" class="center">
		<?php echo $grid->sortTitle('JCATEGORY', 'category.title'); ?>
	</th>

	<!--CREATED-->
	<th width="10%" class="center">
		<?php echo $grid->sortTitle('COM_SLIDESHOW_CREATED', 'slide.created'); ?>
	</th>

	<!--CREATED BY-->
	<th width="10%" class="center">
		<?php echo $grid->sortTitle('COM_SLIDESHOW_CREATED_BY', 'created.name'); ?>
	</th>

	<!--MODIFIED-->
	<th width="10%" class="center">
		<?php echo $grid->sortTitle('COM_SLIDESHOW_MODIFIED', 'slide.modified'); ?>
	</th>

	<!--MODIFIED BY-->
	<th width="10%" class="center">
		<?php echo $grid->sortTitle('COM_SLIDESHOW_MODIFIED_BY', 'modified.name'); ?>
	</th>

	<!--ID-->
	<th width="1%" class="nowrap center">
		<?php echo $grid->sortTitle('JGRID_HEADING_ID', 'slide.id'); ?>
	</th>
</tr>
</thead>

<!--PAGINATION-->
<tfoot>
<tr>
	<td colspan="15">
		<div class="pull-left">
			<?php echo $data->pagination->getListFooter(); ?>
		</div>
	</td>
</tr>
</tfoot>

<!-- TABLE BODY -->
<tbody>
<?php foreach ($data->items as $i => $item)
	:
	// Prepare data
	$item = new Data($item);

	// Prepare item for GridHelper
	$grid->setItem($item, $i);
	?>
	<tr class="slide-row" sortable-group-id="<?php echo $item->catid; ?>">
		<!-- DRAG SORT -->
		<td class="order nowrap center hidden-phone">
			<?php echo $grid->dragSort(); ?>
		</td>

		<!--CHECKBOX-->
		<td class="center">
			<?php echo JHtml::_('grid.id', $i, $item->slide_id); ?>
		</td>

		<!--STATE-->
		<td class="center">
			<div class="btn-group">
				<!-- STATE BUTTON -->
				<?php echo $grid->state() ?>

				<!-- CHANGE STATE DROP DOWN -->
				<?php echo $this->loadTemplate('dropdown'); ?>
			</div>
		</td>

		<!--TITLE-->
		<td class="has-context quick-edit-wrap">
			<div class="item-title">
				<!-- Checkout -->
				<?php echo $grid->checkoutButton(); ?>

				<!-- Title -->
				<?php echo $grid->editTitle(); ?>
			</div>
		</td>

		<!--CATEGORY-->
		<td class="center">
			<?php echo $this->escape($item->category_title); ?>
		</td>

		<!--CREATED-->
		<td class="center">
			<?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC4')); ?>
		</td>

		<!--CREATED BY-->
		<td class="center">
			<?php echo $this->escape($item->created_name); ?>
		</td>

		<!--MODIFIED-->
		<td class="center">
			<?php echo $item->modified != '0000-00-00 00:00:00' ? JHtml::_('date', $item->modified, JText::_('DATE_FORMAT_LC4')) : ''; ?>
		</td>

		<!--MODIFIED BY-->
		<td class="center">
			<?php echo $this->escape($item->modified_name); ?>
		</td>

		<!--ID-->
		<td class="center">
			<?php echo $item->id; ?>
		</td>

	</tr>
<?php endforeach; ?>
</tbody>
</table>
