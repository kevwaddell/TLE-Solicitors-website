<?php if (isset($_GET['form-sent']) && $_GET['form-sent'] == true) { ?>

<?php echo $form_message; ?>

<?php } else { ?>
<!-- Start of signup -->
<script language="javascript">
<!--
function validate_signup(frm) {
	var emailAddress = frm.Email.value;
	var errorString = '';
	if (emailAddress == '' || emailAddress.indexOf('@') == -1) {
		errorString = 'Please enter your email address';
	}

    

	var isError = false;
    if (errorString.length > 0)
        isError = true;

    if (isError)
        alert(errorString);
	return !isError;
}


//-->
</script>

<div class="form-wrap">

	<h3>Sign up</h3>

	<form name="signup" id="signup" action="http://dmtrk.net/signup.ashx" method="post" onsubmit="return validate_signup(this)">
	<input type="hidden" name="addressbookid" value="1838090">
	<!-- UserID - required field, do not remove -->
	<input type="hidden" name="userid" value="88348">
	<!-- ReturnURL - when the user hits submit, they'll get sent here -->
	<input type="hidden" name="ReturnURL" value="<?php the_permalink(); ?>?form-sent=true">
	<!-- Email - the user's email address -->
	<table>
	
		<tr>
			<td>Email:</td><td><input type="text" name="Email"></td>
		</tr>
		
		<tr><td>First name: </td><td><input class="text" type="text" name="cd_FIRSTNAME"/></td></tr>
		<tr><td>Last name:</td><td><input class="text" type="text" name="cd_LASTNAME"/></td></tr>
		
		<tr>
			<td>Clinical Negligence</td>
			<td>Yes: <input class="radio" type="radio" name="cd_CLIN_NEG_radio" value="y"/> No: <input type="radio" name="cd_CLIN_NEG_radio" value="n"/></td>
		</tr>
		<tr>
			<td>Personal Injury</td>
			<td>Yes: <input class="radio" type="radio" name="cd_PERS_IN_radio" value="y"/> No: <input type="radio" name="cd_PERS_IN_radio" value="n"/></td>
		</tr>
		<tr>
			<td>Professional Negligence</td>
			<td>Yes: <input class="radio" type="radio" name="cd_PROF_NEG_radio" value="y"/> No: <input type="radio" name="cd_PROF_NEG_radio" value="n"/></td>
		</tr>
		<tr>
			<td>Road Traffic Accidents</td>
			<td>Yes: <input class="radio" type="radio" name="cd_RTA_radio" value="y"/> No: <input type="radio" name="cd_RTA_radio" value="n"/></td>
		</tr>
		<tr>
			<td>Commercial Litigation</td>
			<td>Yes: <input class="radio" type="radio" name="cd_COM_LIT_radio" value="y"/> No: <input type="radio" name="cd_COM_LIT_radio" value="n"/></td>
		</tr>
	
	</table>
	
	<input type="Submit" name="Submit" value="Sign up">
	
	
	</form>

</div>
<!-- End of signup -->
<?php } ?>
