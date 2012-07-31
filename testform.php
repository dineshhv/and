<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="bridge.php?tag=temp_group">
  <input name="frm_ses" type="hidden" id="frm_ses" value="frm_<?php echo rand(10000,100000);?>" />
  <div class="form_box give_space give_padding">
  
 
  
   
    
    <div class="group_area" id="group_add">
      <div class="tool_area">
        <div class="tool_text">Bill Group</div>
        <div class="option_edit"><a href="">Edit</a></div>
      </div>
      <div class="field_area">
        <input name="grp_ses" type="hidden" id="grp_ses" value="grp_<?php echo rand(10000,100000);?>" />
        <div class="field_col_label">Desc</div>
        <div class="field_col_box">
          <input type="text" name="grp_desc" id="grp_desc" class="field_mid"/>
        </div>
        <div class="field_col_label">Amount</div>
        <div class="field_col_box">
          <input name="grp_amnt" type="text" id="grp_amnt" size="5" class="field_small"/>
        </div>
      </div>
      <div class="button_area"> <a href="#" id="add_gr_btn_a" class="button">Create Group
        <!-- <button type="button" name="add_gr_btn" id="add_gr_btn">add Bill Group</button>-->
      </a> </div>
    </div>
   <?php /*?> <div class="group_area" id="members_add">
      <div class="tool_area">
        <div class="tool_text">Add members</div>
        <div class="option_edit"><a href="">Edit</a></div>
      </div>
      <div class="field_area">
        <div class="field_col_label">Member Email</div>
        <div class="field_col_box">
         
          <?php
                    require_once 'controller/display_class.php';
                    $display_class = new display_class();
                    $show_friends=$display_class->display_all_friends();
                    
                    if($show_friends=='no friends in list')
                    {
                        echo "no friends in your list";
                    }
                    else
                    {
                        echo " <select id=\"mem_id\"  name=\"mem_id\" title=\"Please Select\">";
                    while ($Row = mysql_fetch_array ($show_friends)) 
                    {
                    echo "<option>".$Row['email']."</option>  ";
                    
                    }
                    echo "</select>";
                    
                    }	
                    
                    ?>
        </div>
      </div>
      <div class="button_area2"> <a href="#" id="add_mbr_btn_a"  class="button">add another</a> <a href="#" id="fnsh_btn_a"  class="button">Finish</a> </div>
    </div><?php */?>
    <div class="form_box_inside">
      <div class="form_row_button">
        <div class="form_col_field_center">
          <input name="input" type="image" src="images/register.png" />
        </div>
      </div>
    </div>
  </div>

  <div id="another_cont">
    <div id="int_cont"></div>
  </div>
</form>
</body>
</html>