<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Co-Scholastic Group</div><a id="MB_close" title="Close window" href="http://demo.fedena.org/observation_groups#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="./observation_groups_new_popup_files/observation_groups_new_popup.htm" class="new_observation_group" id="new_observation_group" method="post" onsubmit="new Ajax.Request(&#39;/observation_groups&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_group_name" name="observation_group[name]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Header Name</label>
        <div class="text-input-bg"><input id="observation_group_header_name" name="observation_group[header_name]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_group_desc" name="observation_group[desc]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">CCE Grade Set</label>
        <div class="text-input-bg">
          <select id="observation_group_cce_grade_set_id" name="observation_group[cce_grade_set_id]" class="MB_focusable"><option value="">Select a grade set</option>
<option value="1">Scholastic Grade Set 1</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Type</label>
        <div class="text-input-bg">
          <select id="observation_group_observation_kind" name="observation_group[observation_kind]" class="MB_focusable"><option value="">Select an assessment type</option>
<option value="3">Co Scholastic Area</option>
<option value="1">Co Scholastic Activity</option>
<option value="0">Scholastic</option></select>
        </div>
      </div>
      <input class="submit_button MB_focusable" id="observation_group_submit" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>