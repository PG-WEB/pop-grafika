<?php /* Smarty version 2.6.0, created on 2009-01-28 14:16:03
         compiled from ./templates/tmpl1/index.tpl.html */ ?>
<html>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0">

<script type="text/javascript" src="images/niftycube.js"></script>

<center>
<table width="780" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <td bgcolor="white"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="middle" width="220">
		<a href="index.php"><img src="images/pgdistro.jpg" border="0" alt="<?php echo @constant('CONF_SHOP_NAME'); ?>
"></a>
	</td>
	<td valign="bottom" align="center" width="400">
				<table id="tabnav" border="0" cellspacing="0" cellpadding="0">
					<tr valign="top"> 
					  <td><div <?php if ($this->_tpl_vars['main_content_template'] == "home.tpl.html"): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php" class="menu"><?php echo @constant('LINK_TO_HOMEPAGE'); ?>
</a></div></td>
					  <td>&nbsp;</td>
					  <td><div <?php if ($this->_tpl_vars['main_content_template'] == "pricelist.tpl.html"): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?show_price=yes" class="menu"><?php echo @constant('STRING_PRICELIST'); ?>
</a></div></td>
					  <td>&nbsp;</td>
					  <!--
					  <td><div <?php if (( $this->_tpl_vars['main_content_template'] == "aux_page.tpl.html" ) && ( $this->_tpl_vars['aux_page'] == 'aux1' )): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?aux_page=aux1" class="menu"><nobr><?php echo @constant('ADMIN_ABOUT_PAGE'); ?>
</nobr></a></div></td>
					  <td>&nbsp;</td>
					  -->
					  <td><div <?php if (( $this->_tpl_vars['main_content_template'] == "aux_page.tpl.html" ) && ( $this->_tpl_vars['aux_page'] == 'aux2' )): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?aux_page=aux2" class="menu"><?php echo @constant('ADMIN_SHIPPING_PAGE'); ?>
</a></div></td>
					</tr>
				</table>
	</td>
    
    <td valign="middle" align="right" style="background: #ffffff; background-position: right; height:70px; width:160px;">

				  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search_form.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <a href="index.php?search_with_change_category_ability=yes" class="lightsmall"></a>
	</td>
  	
  </tr>
  <tr>
	<td bgcolor="white" height="6" align="right"><img src="images/gradient-dark-strip.gif"></td>
	<td bgcolor="#000000" colspan="2" height="6"></td>
  </tr>
  <tr> 
    <td width="220" valign="top" align="right">
	 <table cellspacing="0" cellpadding="0" border="0"><tr><td style="background: white; background-position: right;width:220px;height:100%;">

		<p style="padding:10px;">
        
		<table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
		  <?php if (@constant('CONF_SHOW_ADD2CART') == 1): ?>
          <tr> 
            <td align="left" valign="top" bgcolor="#0D0D0D" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php?shopping_cart=yes" class="menu"><?php echo @constant('CART_TITLE'); ?>
</a>
				</div>
			</td>
		  </tr>
		  <tr>  
            <td style="background: #D6D6D6; background-position: right; padding: 10px;" class="bottomcorners"> 
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shopping_cart_info.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
          </tr>
		  <tr>
			<td>&nbsp;</td>
		  </tr>
		  <?php endif; ?>
          <tr> 
            <td align="left" valign="top" bgcolor="#999999" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php#catalog" class="menu"><?php echo @constant('ADMIN_CATALOG'); ?>
</a>
				</div>
			</td>
          </tr>
          <tr> 
                  <td align="left" valign="top" style="background: #D6D6D6; background-position: right; padding: 10px;" class="bottomcorners"> 
                          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "category_tree.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </td>
          </tr>



        </table>
		</p>

		</td></tr>
		<tr><td align="right"></td></tr>
		</table>
      </td>
      
      <td width="100%" align="left" valign="top" style="padding:10px;" colspan="2">

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['main_content_template']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       
	  </td>
  </tr>
  <tr>
	<td>&nbsp;</td>
	<td colspan="2" align="center">

				<!--
				<hr width="300" align="center" size="1" style="margin-top:0px;">

				<p class="small" align="center" style="margin-top:-5px;"><i>Copyright &copy; <a href="<?php echo @constant('CONF_FULL_SHOP_URL'); ?>
"> <u><?php echo @constant('CONF_SHOP_NAME'); ?>
</u></a>. All rights reserved.</i></p>
				-->
		  <!--
			Œ¡–¿Ÿ¿≈Ã ¬Õ»Ã¿Õ»≈, ◊“Œ —Œ√À¿—ÕŒ ”—ÀŒ¬»ﬂÃ À»÷≈Õ«»ŒÕÕŒ√Œ —Œ√À¿ÿ≈Õ»ﬂ, ¬€ ƒŒÀ∆Õ€ —Œ’–¿Õ»“‹ ——€À ” Õ¿ —¿…“ WWW.SHOP-SCRIPT.RU —Œ ¬—≈’ —“–¿Õ»÷ ¬¿ÿ≈√Œ »Õ“≈–Õ≈“-Ã¿√¿«»Õ¿, –¿¡Œ“¿ﬁŸ≈√Œ Õ¿ Œ—ÕŒ¬≈ SHOP-SCRIPT FREE

			¬€ ÃŒ∆≈“≈ Œ—“¿¬»“‹ —À≈ƒ”ﬁŸ”ﬁ ——€À ”:
		  -->

		  <!--
			Õ¿◊¿ÀŒ ¡ÀŒ ¿ — ——€À Œ… Õ¿ —¿…“ SHOP-SCRIPT
		  -->			<hr>	  
					<p class="footer" align="center">Powered by Shop-Script FREE <a href="http://www.shop-script.ru" style="color: gray;">ÒÓÁ‰‡ÌËÂ ËÌÚÂÌÂÚ-Ï‡„‡ÁËÌ‡</a></p>

		  <!--
			 ŒÕ≈÷ ¡ÀŒ ¿ — ——€À Œ… Õ¿ —¿…“ SHOP-SCRIPT 
		  -->
	  </td>
  </tr>
  </table></td>
 </tr>
</table>



</body>
</html>