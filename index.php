<!DOCTYPE html>
<html>
<head>
<title>Perpustakaan FISIP Undip | Fakultas Ilmu Sosial dan Ilmu Politik :: OPAC</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="SLiMS (Senayan Library Management System) is an open source Library Management System. It is build on Open source technology like PHP and MySQL">
<meta name="keywords" content="senayan,slims,library automation,free library application, library, perpustakaan, aplikasi perpustakaan">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="index, nofollow">
<!-- load style -->
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="template/core.style.css" rel="stylesheet" type="text/css" />
<link href="js/colorbox/colorbox.css" rel="stylesheet" type="text/css" />
<link href="template/default/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" media="all" href="template/default/css/tango/skin.css"/>
<meta name="robots" content="index, follow"><script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/gui.js"></script>
<script type="text/javascript" src="template/default/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="template/default/js/jquery.jcarousel.min.js"></script>
</head>
<body>
  <div id="masking"></div>
  <!--// Social Button //-->
  <div class="navbar navbar-social navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
                <ul class="nav">
                    <li><a href="../www.facebook.com/groups/senayan.slims/index.htm" title="Facebook" >Facebook</a></li>
                    <li><a href="../twitter.com/#!/slims_official/index.htm" title="Twitter" >Twitter</a></li>
                    <li><a href="../www.youtube.com/user/senayanslims/index.htm" title="Youtube" >Youtube</a></li>
                    <li><a href="../github.com/slims/index.htm" title="Github" >Github</a></li>
                    <li><a href="../slims.web.id/forum/index.htm" title="Forum" >Forum</a></li>
                    <li><a href="index_6502053D.php" target="_blank" title="RSS" class="rss" ><img src="template/default/img/rss.png" /></a></li>
        </ul>
                <form class="navbar-form pull-right language" name="langSelect" action="index.php" method="get">
          <span class="language-info">Pilih Bahasa</span>
          <select name="select_lang" id="select_lang"  onchange="document.langSelect.submit();" class="input-medium">
            <option value="ar_AR" >Arabic</option><option value="bn_BD" >Bengali</option><option value="pt_BR" >Brazilian Portuguese</option><option value="cn_PRC" >Cina</option><option value="kr_KR" >Korea</option><option value="en_US" >English</option><option value="es_ES" >Espanol</option><option value="de_DE" >German</option><option value="id_ID" selected>Indonesia</option><option value="th_TH" >Thai</option><option value="my_MY" >Melayu</option><option value="fa_IR" >Persia</option>          </select>
        </form>
      </div>
    </div>
  </div>  <!--// End Social Button //-->

  <!--// Menu //-->
  <div class="navbar navbar-menu navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="index.php">
         <div class="sitename">Perpustakaan FISIP Undip</div>
         <div class="subname">Fakultas Ilmu Sosial dan Ilmu Politik</div>
        </a>
        <div class="nav-collapse collapse">
          <ul class="nav nav-pills pull-right">
                    <li  class="active"><a href="index.php" title="Beranda depan">Beranda Depan</a></li>
                    <li ><a href="index_9E9F9BE8.php" title="Info Perpustakaan">Info Perpustakaan</a></li>
                    <li ><a href="index_E311500F.php" title="Area Anggota">Area Anggota</a></li>
                    <li ><a href="index_AB814097.php" title="Pustakawan">Pustakawan</a></li>
                    <li ><a href="index_FD1F0B27.php" title="buku tamu">Buku Tamu</a></li>
                    <li ><a href="index_4AA5FFA1.php" title="Bantuan pencarian">Bantuan Pencarian</a></li>
                    <li ><a href="index_6764EDDC.php" title="MASUK Pustakawan">MASUK Pustakawan</a></li>
                    </ul>
        </div>
      </div>
    </div>
  </div>  <!--// End Menu //-->

<!--// Content Ouput //-->
<div class="content">
  <div class="container">
    <div class="row">
      <!--// Check For No Query //-->
              <!-- Default Frontpage -->
        <div class="span8 offset2">
          <div class="search">
            <div class="tagline">Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat penemuan data katalog</div>
            <div id="simply-search">
              <div class="simply" >
                <form name="advSearchForm" id="simplySearchForm" action="index.php" method="get" class="form-search">
                  <div class="input-append">
                  <input type="hidden" name="search" value="search" />
                  <input type="text" name="keywords" id="keyword" placeholder="Kata kunci" lang="id_ID" x-webkit-speech="x-webkit-speech" class="input-xxlarge search-query" />
                  <button type="submit" class="btn">Pencarian</button>
                  </div>
                </form>
              </div>
            </div>
            <div id="advance-search" style="display:none;" >
              <form name="advSearchForm" id="advSearchForm" action="index.php" method="get" class="form-horizontal form-search">
                <div class="simply" >
                  <div class="input-append">
                  <input type="text" name="title" id="title" placeholder="Judul" class="input-xxlarge search-query" />
                  <button type="submit" name="search" class="btn" value="search">Pencarian</button>
                  </div>
                </div>
                <div class="advance">
                  <div class="row-fluid">
                    <div class="span5">
                      <div class="control-group">
                        <label class="control-label">Pengarang</label>
                        <div class="controls">
                          <input type="text" autocomplete="off" id="author" name="author" class="ajaxInputField notAJAX" onkeyup="showDropDown('lib/contents/advsearch_AJAX_response.php', 'author', 'type=author')" value="" /><ul class="ajaxDDlist" id="authorList"><li style="padding: 2px; font-weight: bold;">SEARCHING...</li></ul>                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Subyek</label>
                        <div class="controls">
                          <input type="text" autocomplete="off" id="subject" name="subject" class="ajaxInputField notAJAX" onkeyup="showDropDown('lib/contents/advsearch_AJAX_response.php', 'subject', 'type=topic')" value="" /><ul class="ajaxDDlist" id="subjectList"><li style="padding: 2px; font-weight: bold;">SEARCHING...</li></ul>                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">ISBN/ISSN</label>
                        <div class="controls">
                          <input type="text" name="isbn" />
                        </div>
                      </div>
                    </div>
                    <div class="span6">

                      <div class="control-group">
                      <label class="control-label">GMD</label>
                      <div class="controls">
                        <select name="gmd"><option value="0">Semua GMD/Media</option><option value=""></option><option value="Art Original">Art Original</option><option value="Cartographic Material">Cartographic Material</option><option value="CD-ROM">CD-ROM</option><option value="Chart">Chart</option><option value="Computer File">Computer File</option><option value="Computer Software">Computer Software</option><option value="Digital Versatile Disc">Digital Versatile Disc</option><option value="Diorama">Diorama</option><option value="Electronic Resource">Electronic Resource</option><option value="Equipment">Equipment</option><option value="Filmstrip">Filmstrip</option><option value="Flash Card">Flash Card</option><option value="Game">Game</option><option value="Globe">Globe</option><option value="Kit">Kit</option><option value="Manuscript">Manuscript</option><option value="Map">Map</option><option value="Microform">Microform</option><option value="Microscope Slide">Microscope Slide</option><option value="Model">Model</option><option value="Motion Picture">Motion Picture</option><option value="Multimedia">Multimedia</option><option value="Music">Music</option><option value="Picture">Picture</option><option value="Realia">Realia</option><option value="Skripsi">Skripsi</option><option value="Slide">Slide</option><option value="Sound Recording">Sound Recording</option><option value="Technical Drawing">Technical Drawing</option><option value="Tesis">Tesis</option><option value="Text">Text</option><option value="Transparency">Transparency</option><option value="Video Recording">Video Recording</option></select>
                      </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Tipe Koleksi</label>
                        <div class="controls">
                          <select name="colltype"><option value="0">Semua Koleksi</option><option value=""></option><option value="Fiction">Fiction</option><option value="Reference">Reference</option><option value="Textbook">Textbook</option></select>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label">Lokasi</label>
                        <div class="controls">
                          <select name="location"> <option value="0">Semua Lokasi</option><option value="PERPUSTAKAAN FISIP UNDIP">PERPUSTAKAAN FISIP UNDIP</option></select>
                        </div>
                      </div>

                    </div>
                  </div>
                <div class="clearfix"></div>
                </div>
              </form>
            </div>
        </div>
        <div id="show_advance">
          <a href="#">Pencarian Spesifik</a>
        </div>
        <!-- End Default Frontpage-->
          </div>
  </div>

    
</div>  <!--// End Content Ouput //-->

<div class="footer">
 <div class="container">
  <div class="row">
    <div class="span12 lisence">
     This software and this template are released Under GNU GPL License Version 3 - The Winner in the Category of OSS Indonesia ICT Award 2009
   </div>
 </div>
</div>
</div>

<script type="text/javascript" src="template/default/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="js/highlight.js"></script>
<script type="text/javascript">
jQuery(function($){
  $.supersized(
  {
    slides  : [
    {image : 'template/default/img/4.jpg'},
    {image : 'template/default/img/3.jpg'},
    {image : 'template/default/img/2.jpg'},
    {image : 'template/default/img/1.jpg'}
    ]
  });
});

$(document).ready(function()
{
  $('#keyword').keyup(function(){
    $('#title').val();
    $('#title').val($('#keyword').val());
  });

  $('#title').keyup(function(){
    $('#keyword').val();
    $('#keyword').val($('#title').val());
  });

  $('#advSearchForm input').attr('autocomplete','off');
  $('#title').attr('style','');

  $('#show_advance').click(function(){
    if ($("#advance-search").is(":hidden"))
    {
      $("#advance-search").slideDown('normal');
      $('#simply-search').slideUp('normal');
    } else {
      $("#advance-search").slideUp('normal');
      $('#simply-search').slideDown('normal');
    }
  });

  $('#title').keypress(function(e){
    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
      this.form.submit();
    }
  });

  $(window).load(function () {
    $('#keyword').focus();
  });

  function mycarousel_initCallback(carousel)
  {
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
      carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
      carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
      carousel.stopAuto();
    }, function() {
      carousel.startAuto();
    });
  };

  jQuery('#topbook').jcarousel({
      auto: 5,
      wrap: 'last',
      initCallback: mycarousel_initCallback
  });

  jQuery('.container .item .detail-list, .coll-detail .title, .abstract, .coll-detail .controls').highlight();

});
</script>

</body>
</html>
