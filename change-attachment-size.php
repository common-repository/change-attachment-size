<?php
/*
Plugin Name: Change attachment size
Plugin URI: http://mecus.es/herramientas/plugins/change-attachment-size
Description: Change the attachment size in the attachment page.
Version: 0.1
Author: Rafael Poveda (RaveN)
Author URI: http://mecus.es/author/raven/
Contributors: bi0xid, mecus
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/*
Changelog
=========
0.1 - First release
0.2 - Add menu item to select attachment size
*/



add_filter('prepend_attachment', 'ag_prepend_attachment');
function ag_prepend_attachment($p) {
    return '<p class="attachment">'.wp_get_attachment_link(0, 'large', false).'</p>';
}
