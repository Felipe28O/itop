<?php
//
// File generated by ... on the 2023-01-04T15:58:53+0100
// Please do not edit manually
//

/**
 * Classes and menus for itop-config (version 3.0.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_itop_config extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['ConfigurationTools'] = new MenuGroup('ConfigurationTools', 90, 'fas fa-cog' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		if (UserRights::IsAdministrator())
		{
			$__comp_menus__['ConfigEditor'] = new WebPageMenuNode('ConfigEditor', utils::GetAbsoluteUrlModulePage('itop-config', "config.php"), $__comp_menus__['ConfigurationTools']->GetIndex(), 10 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		}
	}
} // class MenuCreation_itop_config
