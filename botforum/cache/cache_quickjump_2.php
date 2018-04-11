<?php

if (!defined('PUN')) exit;
define('PUN_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?>				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span><?php echo $lang_common['Jump to'] ?><br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="Biology">
							<option value="11"<?php echo ($forum_id == 11) ? ' selected="selected"' : '' ?>>WormBot Protocols</option>
							<option value="12"<?php echo ($forum_id == 12) ? ' selected="selected"' : '' ?>>Publications</option>
						</optgroup>
						<optgroup label="Hardware">
							<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>Initial Construction</option>
							<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>Parts and Suppliers</option>
							<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Cameras</option>
							<option value="9"<?php echo ($forum_id == 9) ? ' selected="selected"' : '' ?>>Maintenance and Repairs</option>
							<option value="7"<?php echo ($forum_id == 7) ? ' selected="selected"' : '' ?>>Mods</option>
						</optgroup>
						<optgroup label="Software">
							<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>Installation and Configuration</option>
							<option value="6"<?php echo ($forum_id == 6) ? ' selected="selected"' : '' ?>>Usage Questions</option>
							<option value="8"<?php echo ($forum_id == 8) ? ' selected="selected"' : '' ?>>Bugs</option>
							<option value="10"<?php echo ($forum_id == 10) ? ' selected="selected"' : '' ?>>Development</option>
						</optgroup>
						<optgroup label="Random">
							<option value="14"<?php echo ($forum_id == 14) ? ' selected="selected"' : '' ?>>General Discussion</option>
						</optgroup>
					</select></label>
					<input type="submit" value="<?php echo $lang_common['Go'] ?>" accesskey="g" />
					</div>
				</form>
