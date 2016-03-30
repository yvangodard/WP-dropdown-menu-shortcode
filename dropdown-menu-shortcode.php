<?php
/*
Plugin Name: Dropdow-Menu-Shortcode
Plugin URI: https://github.com/yvangodard/Dropdown-Menu-Shortcode
Description: Shortcode pour réaliser une dropdown box à partir d'un menu. Consultez l'aide sur https://github.com/yvangodard/Dropdown-Menu-Shortcode.
Version: 1.0
Author: Yvan GODARD
Author URI: http://www.yvangodard.me
Licence: CC BY-NC-SA 4.0 http://creativecommons.org/licenses/by-nc-sa/4.0/
*/
/*  Copyright 2014 Yvan GODARD(godardyvan@gmail.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of Creative Commons BY-NC-SA 4.0 licence
    http://creativecommons.org/licenses/by-nc-sa/4.0/
    THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, 
    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS 
    FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY DIRECT, 
    INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, 
    PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) 
    HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT 
    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, 
    EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

if ( ! function_exists( 'dropdown_menu' ) )
	include( 'dropdown-menus/dropdown-menus.php' );

if(!class_exists('dropdowmenu_shortcode'))
{
	class dropdowmenu_shortcode
	{
		function __construct()
		{
			add_shortcode('dropmenu', array($this,'display_dropdown_menu'));
		}
		
		function display_dropdown_menu($attr)
		{
			extract( shortcode_atts( array(
				'class' => '',
				'menu' => '',
				'onelevel' => '0',
				'depthlimit' => '0',
				'addtitle' => '',
				'indent' => '',
			), $attr ) );

			if($depthlimit != '0')
				$depth = $depthlimit;
			elseif($onelevel == '1')
				$depth = -1;
			else
				$depth = 0;
				
			if($class != '')
				$menu_class .= $class;
			else
				$menu_class = 'dropdown_menu';

			if($addtitle != '')
				$dropdown_title = $addtitle;
			else
				$dropdown_title = '';

			if($indent != '')
				$indent_string = $indent;
			else
				$indent_string = '- ';
			
			$defaults = array(
				'theme_location'  => '',
				'menu'            => $menu,
				'container'       => 'div',
				'container_class' => 'dropdown_menu_container',
				'container_id'    => '',
				'menu_class'      => $menu_class,
				'menu_id'         => '',
				'echo'            => false,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => $depth,
				'walker'          => '',
				'dropdown_title'  => $dropdown_title,
				'indent_string'   => $indent_string,
			);
			return dropdown_menu( $defaults );
		}
	}
}

if(class_exists('dropdowmenu_shortcode'))
{
	$dropdowmenu_shortcode = new dropdowmenu_shortcode;
}

?>