<?php
/*
 * Copyright (C) 2015	   Patrick DELCROIX     <pmpdelcroix@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */



$res=0;

if (! $res && file_exists("../main.inc.php")) $res=@include '../main.inc.php';		
if (! $res && file_exists("../../main.inc.php")) $res=@include '../../main.inc.php';
if (! $res && file_exists("../../../main.inc.php")) $res=@include '../../../main.inc.php';
if (! $res && file_exists("../../../../main.inc.php")) $res=@include '../../../../main.inc.php';
if (! $res && file_exists("core/lib/dev.inc.php")) $res=@include 'core/lib/dev.inc.php';
if (! $res && file_exists("../core/lib/dev.inc.php")) $res=@include '../core/lib/dev.inc.php';
if (! $res && file_exists("../../core/lib/dev.inc.php")) $res=@include '../../core/lib/dev.inc.php';
if (! $res) die("Include of main fails")


?>