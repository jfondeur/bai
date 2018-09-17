<?php 
  //utm paramaters variables
 global $utms;
?>
<form accept-charset="UTF-8" action="https://qz363.infusionsoft.com/app/form/process/6730495c336af971211de89344250e00" class="infusion-form form-inline" id="inf_form_6730495c336af971211de89344250e00" method="POST">
    <input name="inf_form_xid" type="hidden" value="6730495c336af971211de89344250e00" />
    <input name="inf_form_name" type="hidden" value="Web Form submitted" />
    <input name="infusionsoft_version" type="hidden" value="1.70.0.61250" />
    <input class="infusion-field-input form-control mb-2 mr-sm-2" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" value="" />
    <input name="inf_custom_Source" type="hidden" value="<?php if (isset($utms)){ echo $utms[0]; }?>" />
    <button class="btn btn-primary mb-2" type="submit">Submit</button>
</form>