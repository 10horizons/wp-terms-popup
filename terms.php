<style type="text/css">
.tbrightcontent {
/*display: block;*/
position: fixed;
top: 15%;
left: 25%;
width: 50%;
height: 60%;
padding: 16px;
background-color: white;
z-index: 9999999;
overflow: auto;
text-align: left;
font-size: 15px;
}

.tdarkoverlay {
/*display: block;*/
position: fixed;
top: 0%;
left: 0%;
width: 100%;
height: 100%;
background-color: black;
z-index: 9999998;
-moz-opacity: 0.8;
opacity: .80;
filter: alpha(opacity=80);
}

h3.termstitle {
background: #C81F2C;
color: #fff;
text-align: center;
padding: 1%;
margin: -16px -16px 30px -16px !important;
font-size: 1.2em;
text-transform: capitalize;
}
</style>

<div id="tfade" class="tdarkoverlay" <?php if ($isshortcode == 1) { echo 'style="display:none"'; } ?>></div>

<div id="tlight" class="tbrightcontent" <?php if ($isshortcode == 1) { echo 'style="display:none"'; } ?>>

		<div class="termspopupcontainer">
		
		<?php
		
		//Just a reminder. Values already set before.
		//$currentpostid = get_the_ID();
		//$termspageid = get_post_meta( $currentpostid, 'terms_selectedterms', true );

		if($termspageid) { 
			$termscontent=get_post($termspageid);?>
			<h3 class="termstitle"><?php echo $termscontent -> post_title?></h3>
			<?php echo apply_filters('the_content', $termscontent->post_content);
		}

		if( (get_post_meta( $termspageid, 'terms_agreetxt', true )) != '' ) {
			$tagree = get_post_meta( $termspageid, 'terms_agreetxt', true );
		}
		elseif( get_option('termsopt_agreetxt') != '' ) {
			$tagree = get_option('termsopt_agreetxt');
		}
		else {
			$tagree = 'I Agree';
		}
		
		if( (get_post_meta( $termspageid, 'terms_disagreetxt', true )) != '' ) {
			$tdisagree = get_post_meta( $termspageid, 'terms_disagreetxt', true );
		}
		elseif( get_option('termsopt_disagreetxt') != '' ) {
			$tdisagree = get_option('termsopt_disagreetxt');
		}
		else {
			$tdisagree = 'I Do Not Agree';
		}		
			?>
		
		
		<?php if ($isshortcode == 1) { ?>
		
		<div class="tthebutton">
			<input class="termsagree" type="button" onclick="ttb_wtp_agree_shortcode_button_call()" value="<?php echo $tagree; ?>" />
			
			<input class="termsdecline" type="button" onclick="window.location.replace('<?php echo $termsRedirectUrl ?>')" value="<?php echo $tdisagree; ?>" />
		</div>
		
		<?php } else { ?>		
		
			<form method=post>
				<div class="tthebutton">
					<?php do_action('ttb_wtp_before_buttons_inside_form'); ?>
					
					<input class="termsagree" name="SubmitAgree" type="submit" value="<?php echo $tagree; ?>" />
					<input class="termsdecline" name="SubmitDecline" type="submit" value="<?php echo $tdisagree; ?>" />
				</div>
			</form>
			
		<?php } ?>

		</div>
		
</div>

<?php
if ($isshortcode == 1) {
	$ttermspopupagreed = 'ttermspopupagreed'.$termspageid;
?>
<script>

function ttb_wtp_agree_shortcode_button_call() {
	
	document.getElementById("tfade").style.display = "none";
	document.getElementById("tlight").style.display = "none";
	
	if(localStorage.getItem('<?php echo json_encode($ttermspopupagreed); ?>') != 'agreed'){
        localStorage.setItem('<?php echo json_encode($ttermspopupagreed); ?>','agreed');
    }
	
}

    if(localStorage.getItem('<?php echo json_encode($ttermspopupagreed); ?>') != 'agreed'){
		document.getElementById("tfade").style.display = "block";
		document.getElementById("tlight").style.display = "block";
	}

</script>
<?php } ?>