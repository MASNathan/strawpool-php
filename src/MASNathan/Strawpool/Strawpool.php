<?php

namespace MASNathan\Strawpool;
use MASNathan\Curl\Ch;

/**
 * Strawpool - Simple class that allows you to use strawpool on your website
 * 
 * @package MASNathan
 * @subpackage Strawpool
 * @author André Filipe <andre.r.flip@gmail.com>
 * @link https://github.com/ReiDuKuduro/strawpool-php GitHub repo
 * @license MIT
 * @version 0.1
 */
class Strawpool
{
	/**
	 * Strawpool ID
	 * @var int
	 */
	public $id;

	/**
	 * Class constructor
	 * @param string $title
	 * @param array $options
	 * @param bool $multiple_choice
	 * @param bool $permissive
	 */
	public function __construct($title, array $options, $multiple_choice = false, $permissive = false)
	{
		if (count($options) < 2) {
			throw new \Exception("You must use atleast two options!");
		}

		$data = array(
				'title'      => $title,
				'options'    => $options,
				'multi'      => $multiple_choice ? 'true' : 'false',
				'permissive' => $permissive      ? 'true' : 'false',
			);

		$this->id = Ch::post('http://strawpoll.me/ajax/new-poll', $data, function($x) {
				return $x['id'];
			}, 'json');
	}

	/**
	 * Magic function toString
	 * @return string
	 */
	public function __toString()
	{
		return $this->getHtml();
	}

	/**
	 * Returns the iframe html
	 * @param int $width
	 * @param int $height
	 * @param int $border
	 */
	public function getHtml($width = 600, $height = 332, $border = 0)
	{
		return sprintf(
				'<iframe src="http://strawpoll.me/embed_1/%s" style="width: %dpx; height: %dpx; border: %d;">Loading poll...</iframe>', 
				$this->id,
				$width,
				$height,
				$border
			);
	}
}
