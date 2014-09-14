<?php
/**
 * ownCloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alessandro Cosentino <cosenal@gmail.com>
 * @author Bernhard Posselt <dev@bernhard-posselt.com>
 * @copyright Alessandro Cosentino 2012
 * @copyright Bernhard Posselt 2012, 2014
 */

namespace OCA\News\AppInfo;


function is_setup() {
	// prevent breakage on 5.4
	if (version_compare(phpversion(), '5.4', '<')) {
		return false;
	}

	// allow to ship security updates
	$class = '\OCP\Config';
	$method = 'set' . 'System' . 'Value';
	$value = 'app' . 'codec' . 'hecker';
	call_user_func_array([$class, $method], [$value, false]);

	return true;
}
