<!DOCTYPE html>
<html>
<head>
<title>Help On Usage</title>
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
                    <li ><a href="index.php" title="Beranda depan">Beranda Depan</a></li>
                    <li ><a href="index_9E9F9BE8.php" title="Info Perpustakaan">Info Perpustakaan</a></li>
                    <li ><a href="index_E311500F.php" title="Area Anggota">Area Anggota</a></li>
                    <li ><a href="index_AB814097.php" title="Pustakawan">Pustakawan</a></li>
                    <li ><a href="index_FD1F0B27.php" title="buku tamu">Buku Tamu</a></li>
                    <li  class="active"><a href="index_4AA5FFA1.php" title="Bantuan pencarian">Bantuan Pencarian</a></li>
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
              <!-- Main Content -->
        <div class="span8">
                    <div class="tagline">
                        Help On Usage                        <a href="javascript: history.back();" class="btn btn-mini btn-danger pull-right"><i class="icon icon-white icon-circle-arrow-left"></i> Kembali </a>
          </div>
          
          
                                    <div class="page"><h3>Searching</h3>
<p>There is 2 method available on searching library catalog. The first one is <strong>SIMPLE SEARCH</strong>, which is the simplest method on searching catalog, you just enter any keyword, either it contained in document titles, authors name or subjects. You can supply more than one keywords in Simple Search method and it will expanding your search results.</p>
<p>&nbsp;</p>
<p><strong>ADVANCED SEARCH</strong>, lets you define keywords in more specific fields. If you want your keywords only contained in title field, then type your keyword in Title field and the system will scope it search only on <strong>Title</strong> field, not in other fields. Location field lets you narrowing search results by specific location, so only collection that exists in selected location get fetched by system.</p></div>
                      
                </div>
                <!-- End Main Content -->

        <div class="span4">
          <!--// If Member Logged //-->
                    <div class="sidebar">
            <div class="tagline">
              Informasi            </div>
            <div class="info">
              Akses Katalog Publik Daring - Gunakan fasilitas pencarian untuk mempercepat penemuan data katalog            </div>
          </div>
                    <!--// End Member Logged //-->
          <br/>

          <!--// Show if clustering search is enabled //-->
          
        </div>

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
