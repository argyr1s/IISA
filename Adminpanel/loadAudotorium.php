<? require("include/config.php"); ?>
<label>Auditorium *</label>
<select name="auditorium" class="input-xlarge">
  <? $getAudororium=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`='".$_REQUEST['dayId']."'");
			   while($row=mysql_fetch_array($getAudororium))
			   {
			?>
  <option value="<?=$row['id'];?>">
  <?=$row['auditorium'];?>
  </option>
  <?
			   }
			   ?>
</select>
