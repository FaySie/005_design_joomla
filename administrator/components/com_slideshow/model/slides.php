<?php
/**
 * Part of Component Slideshow files.
 *
 * @copyright   Copyright (C) 2014 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Windwalker\DI\Container;
use Windwalker\Model\Filter\FilterHelper;
use Windwalker\Model\ListModel;

// No direct access
defined('_JEXEC') or die;

/**
 * Slideshow Slides model
 *
 * @since 1.0
 */
class SlideshowModelSlides extends ListModel
{
	/**
	 * Component prefix.
	 *
	 * @var  string
	 */
	protected $prefix = 'slideshow';

	/**
	 * The URL option for the component.
	 *
	 * @var  string
	 */
	protected $option = 'com_slideshow';

	/**
	 * The prefix to use with messages.
	 *
	 * @var  string
	 */
	protected $textPrefix = 'COM_SLIDESHOW';

	/**
	 * The model (base) name
	 *
	 * @var  string
	 */
	protected $name = 'slides';

	/**
	 * Item name.
	 *
	 * @var  string
	 */
	protected $viewItem = 'slide';

	/**
	 * List name.
	 *
	 * @var  string
	 */
	protected $viewList = 'slides';

	/**
	 * Configure tables through QueryHelper.
	 *
	 * @return  void
	 */
	protected function configureTables()
	{
		$queryHelper = $this->getContainer()->get('model.slides.helper.query', Container::FORCE_NEW);

		$queryHelper->addTable('slide', '#__slideshow_slides')
			->addTable('category',  '#__categories', 'slide.catid      = category.id')
			->addTable('created',   '#__users',      'slide.created_by = created.id')
			->addTable('modified',  '#__users',      'slide.modified_by = modified.id');

		$this->filterFields = array_merge($this->filterFields, $queryHelper->getFilterFields());
	}

	/**
	 * The post getQuery object.
	 *
	 * @param JDatabaseQuery $query The db query object.
	 *
	 * @return  void
	 */
	protected function postGetQuery(\JDatabaseQuery $query)
	{
	}

	/**
	 * Method to auto-populate the model state.
	 *
	 * This method will only called in constructor. Using `ignore_request` to ignore this method.
	 *
	 * @param   string  $ordering   An optional ordering field.
	 * @param   string  $direction  An optional direction (asc|desc).
	 *
	 * @return  void
	 */
	protected function populateState($ordering = null, $direction = 'ASC')
	{
		// Build ordering prefix
		if (!$ordering)
		{
			$table = $this->getTable('Slide');

			$ordering = property_exists($table, 'ordering') ? 'slide.ordering' : 'slide.id';

			$ordering = property_exists($table, 'catid') ? 'slide.catid, ' . $ordering : $ordering;
		}

		parent::populateState($ordering, $direction);
	}

	/**
	 * Process the query filters.
	 *
	 * @param JDatabaseQuery $query   The query object.
	 * @param array          $filters The filters values.
	 *
	 * @return  JDatabaseQuery The db query object.
	 */
	protected function processFilters(\JDatabaseQuery $query, $filters = array())
	{
		// If no state filter, set published >= 0
		if (!isset($filters['slide.state']) && property_exists($this->getTable(), 'state'))
		{
			$query->where($query->quoteName('slide.state') . ' >= 0');
		}

		return parent::processFilters($query, $filters);
	}

	/**
	 * Configure the filter handlers.
	 *
	 * Example:
	 * ``` php
	 * $filterHelper->setHandler(
	 *     'slide.date',
	 *     function($query, $field, $value)
	 *     {
	 *         $query->where($field . ' >= ' . $value);
	 *     }
	 * );
	 * ```
	 *
	 * @param FilterHelper $filterHelper The filter helper object.
	 *
	 * @return  void
	 */
	protected function configureFilters($filterHelper)
	{
	}

	/**
	 * Configure the search handlers.
	 *
	 * Example:
	 * ``` php
	 * $searchHelper->setHandler(
	 *     'slide.title',
	 *     function($query, $field, $value)
	 *     {
	 *         return $query->quoteName($field) . ' LIKE ' . $query->quote('%' . $value . '%');
	 *     }
	 * );
	 * ```
	 *
	 * @param SearchHelper $searchHelper The search helper object.
	 *
	 * @return  void
	 */
	protected function configureSearches($searchHelper)
	{
	}
}
