<?php

/* $Id: defines.signals.php 2620 2007-03-17 00:35:52Z b4rt $ */

/*******************************************************************************

 LICENSE

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License (GPL)
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 To read the license please visit http://www.gnu.org/copyleft/gpl.html

*******************************************************************************/

// signals
if (!defined("SIGHUP")) define("SIGHUP", 1);
if (!defined("SIGINT")) define("SIGINT", 2);
if (!defined("SIGQUIT")) define("SIGQUIT", 3);
if (!defined("SIGKILL")) define("SIGKILL", 9);
if (!defined("SIGTERM")) define("SIGTERM", 15);

?>