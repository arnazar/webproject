
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head><title>Perpustakaan FISIP Undip :: Visitor Counter</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="webicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="template/core.style.css" rel="stylesheet" type="text/css" />
<link href="template/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/updater.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
</head>
<body id="login-page">
<style type="text/css">
.container .row .span4.offset4 .visitor h4 {
	color: #FFF;
}
</style>

<div id="masking"></div>
    <div class="container">
        <div class="row">
            <div class="span4 offset4">
                <div class="visitor">
                    <h4><strong>BUKU TAMU PERPUSTAKAAN</strong></h4>
                    <hr/>
                    <div class="info">Silakan Isi ID/Nama dan Institusi Saudara</div>
                    <hr/>
                    <img id="visitorCounterPhoto" src="images/persons/person.png" class="photo img-circle" />
                    <hr/>
                    <div id="counterInfo">&nbsp;</div>
                    <form action="index_FD1F0B27.php" name="visitorCounterForm" id="visitorCounterForm" method="post" class="form-inline">
                        <div class="control-group">
                            <label class="control-label">ID Anggota / Nama Pengunjung</label>
                            <div class="controls">
                                <input type="text" name="memberID" id="memberID"  class="input-block-level" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Institusi / Universitas</label>
                            <div class="controls">
                                <input type="text" name="institution" id="institution"  class="input-block-level" />
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" id="counter" name="counter" value="Tambah" class="btn-block btn btn-primary" />
                            </div>
                        </div>

                        <div class="marginTop" ></div>
                    </form>
                    <hr/>
                    <small> SELAMAT BERKUNJUNG</small>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready( function() {

// give focus to first field
jQuery('#memberID').focus();

var visitorCounterForm = jQuery('#visitorCounterForm');

// AJAX counter error handler
visitorCounterForm.ajaxError( function() {
    alert('Error inserting counter data to database!');
    jQuery(this).enableForm().find('input[type=text]').val('');
    jQuery('#memberID').focus();
});

// AJAX counter complete handler
visitorCounterForm.ajaxComplete( function() {
    jQuery(this).enableForm().find('input[type=text]').val('');
    var memberImage = jQuery('#memberImage');
    if (memberImage) {
// update visitor photo
var imageSRC = memberImage.attr('src'); memberImage.remove();
jQuery('#visitorCounterPhoto')[0].src = imageSRC;/index.htm
}
jQuery('#memberID').focus();
});

// register event
visitorCounterForm.submit(function(evt) {
    evt.preventDefault();
// check member ID or name
if (jQuery.trim(jQuery('#memberID').val()) == '') {
    jQuery('#counterInfo').html('Please fill your member ID or name');
    return false;
}
var theForm = jQuery(this);
var formAction = theForm.attr('action');
var formData = theForm.serialize();
formData += '&counter=true';
// block the form
theForm.disableForm();
jQuery('#counterInfo').css({'display': 'block'}).html('PLEASE WAIT...');
// create AJAX request for submitting form
jQuery.ajax(
    { url: formAction,
        type: 'POST',
        async: false,
        data: formData,
        cache: false,
        success: function(respond) {
          jQuery('#counterInfo').html(respond);
          // reset counter
          setTimeout(function() { jQuery('#visitorCounterPhoto').attr('src', './images/persons/photo.png');
            jQuery('#counterInfo').html('&nbsp;'); }, 5000);
        }
    });
});

});
</script>

</body>
</html>
