<?php
/**
 * Clase AddThis
 * Creates a widget for social sharing buttons of AddThis
 * http://www.addthis.com/
 *
 * @author		Gerardo Colorado Diaz-Caneja <gcdiazcaneja@diaz-caneja-consultores.com>
 * @link		http://www.diaz-caneja-consultores.com
 * @link        https://github.com/gerardocdc/facebook-like-box
 * @copyright	Copyright (c) 2013 Diaz-Caneja Consultores
 * @license		Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
 * @version     1.0
 * @filesource
 */

/**
 * Clase AddThis
 * Creates a widget for social sharing buttons of AddThis
 * https://www.addthis.com/
 *
 * Uso:
 * <code>
 *      $addThisWidget = new AddThis();
 *      $addThisWidget->setPubId("YY-XXXXXXXXXX");
 *      $addThisWidget->render();
 * </code>
 *
 * @package		Addthis
 * @version     1.0
 * @since		Version 1.0
 */
class AddThisWidget
{
	/*--------------------------------------------
	|             V A R I A B L E S             |
	============================================*/

	/**
	 * Publisher Id (YY-XXXXXXXXXX)
	 *
	 * @var string
	 */
	private $pubId;

	/*--------------------------------------------
	|           C O N S T R U C T O R           |
	============================================*/

	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/*--------------------------------------------
	|      G E T T E R S / S E T T E R S        |
	============================================*/

	/**
	 * @param string $pubId
	 */
	public function setPubId($pubId)
	{
		$this->pubId = $pubId;
	}

	/**
	 * @return string
	 */
	public function getPubId()
	{
		return $this->pubId;
	}

	/*--------------------------------------------
	|        C L A S S   M E T H O D S          |
	============================================*/

	/**
	 * Renderizes and creates the AddThis Share buttons script
	 */
	public function render()
	{
		$code = "<div class=\"addthis_toolbox addthis_default_style \">";
		$code .= "<a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>";
		$code .= "<a class=\"addthis_button_tweet\"></a>";
		$code .= "<a class=\"addthis_button_pinterest_pinit\"></a>";
		$code .= "<a class=\"addthis_counter addthis_pill_style\"></a>";
		$code .= "</div>";
		$code .= "<script type=\"text/javascript\">var addthis_config = {\"data_track_addressbar\":true};</script>";
		$code .= "<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50ddf05c6b906cd9\"></script>";

		echo $code;
	}
}