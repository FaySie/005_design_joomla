<?php
/**
 * @package        Asikart.Module
 * @subpackage     mod_slideshow
 * @copyright      Copyright (C) 2014 SMS Taiwan, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

/**
 * The Slideshow model to get data.
 *
 * @since 1.0
 */
class ModSlideshowModel extends \JModelDatabase
{
	/**
	 * Get item list.
	 *
	 * @return  mixed Item list.
	 */
	public function getItems()
	{
		// Prepare Joomla! API
		$app   = JFactory::getApplication();
		$input = $app->input;
		$user  = JFactory::getUser();
		$date  = JFactory::getDate('now', JFactory::getConfig()->get('offset'));
		$doc   = JFactory::getDocument();
		$uri   = JUri::getInstance();

		// Get sample data.
		return $this->getSampleData();
	}

	// The following is example methods, please delete if you don't want them.
	// --------------------------------------------------------------------------------------------

	/**
	 * Get sample data.
	 *
	 * @return  mixed select list array.
	 */
	protected function getSampleData()
	{
		$params = $this->state;

		// Init DB
		$db     = $this->db;
		$query  = $db->getQuery(true);

		// Get Joomla! API
		$app   = JFactory::getApplication();
		$user  = JFactory::getUser();
		$date  = JFactory::getDate('now', JFactory::getConfig()->get('offset'));

		// Get Params and prepare data.
		$catid = $params->get('catid', 1);
		$order = $params->get('orderby', 'item.created');
		$dir   = $params->get('order_dir', 'DESC');

		// Category

		// If Choose all category, select ROOT category.
		if (!in_array(1, $catid))
		{
			$query->where("item.catid " . new JDatabaseQueryElement('IN()', $catid));
		}

		// Published
		$query->where('item.state > 0');

		$nullDate = $db->Quote($db->getNullDate());
		$nowDate  = $db->Quote($date->toSql(true));

		$query->where('(item.publish_up = ' . $nullDate . ' OR item.publish_up <= ' . $nowDate . ')');
		$query->where('(item.publish_down = ' . $nullDate . ' OR item.publish_down >= ' . $nowDate . ')');

		// View Level
		$query->where('item.access ' . new JDatabaseQueryElement('IN()', $user->getAuthorisedViewLevels()));

		// Language
		if ($app->getLanguageFilter())
		{
			$lang_code = $db->quote(JFactory::getLanguage()->getTag());
			$query->where("item.language IN ({$lang_code}, '*')");
		}

		// Prepare Tables
		$table = array(
			'item' => '#__slideshow_slides',
			'cat'  => '#__categories'
		);

		try
		{
			$select = ModSlideshowHelper::getSelectList($table);

			// Load Data
			$items = array();

			$query->select($select)
				->from('#__slideshow_slides AS item')
				->join('LEFT', '#__categories AS cat ON item.catid = cat.id')
				->order("{$order} {$dir}");

			$items = (array) $db->setQuery($query)->loadObjectList();

			foreach ($items as $key => &$item)
			{
				$item->link = JRoute::_("index.php?option=com_slideshow&view=item&id={$item->id}&alias={$item->alias}&catid={$item->catid}");
			}
		}
		catch (\RuntimeException $e)
		{
			$items = array();
		}

		return $items;
	}
}
