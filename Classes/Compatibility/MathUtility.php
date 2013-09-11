<?php
namespace Bitmotion\NawSecuredl\Compatibility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Helmut Hummel (helmut.hummel@typo3.org)
 *  All rights reserved
 *
 *  This script is part of the Typo3 project. The Typo3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Compatibility Class MathUtility
 */
class MathUtility {
	/**
	 * Forces the integer $theInt into the boundaries of $min and $max. If the $theInt is FALSE then the $defaultValue is applied.
	 *
	 * @param integer $theInt Input value
	 * @param integer $min Lower limit
	 * @param integer $max Higher limit
	 * @param integer $defaultValue Default value if input is FALSE.
	 * @return integer The input value forced into the boundaries of $min and $max
	 */
	static public function forceIntegerInRange($theInt, $min, $max = 2000000000, $defaultValue = 0) {
		return \t3lib_div::intInRange($theInt, $min, $max, $defaultValue);
	}
}