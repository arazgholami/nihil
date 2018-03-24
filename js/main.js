$(document).ready(function(){

});

  //Set Slidebar
   $("#sidebarnav").pageslide();


  //Numbers Library
    var defaultSettings="fa";(function(e){e.fn.persiaNumber=function(t){function r(e,t){e.find("*").andSelf().contents().each(function(){if(this.nodeType===3&&this.parentNode.localName!="style"&&this.parentNode.localName!="script"){this.nodeValue=this.nodeValue.replace(this.nodeValue.match(/[0-9]*\.[0-9]+/),function(e){return e.replace(/\./,",")});this.nodeValue=this.nodeValue.replace(/\d/g,function(e){return String.fromCharCode(e.charCodeAt(0)+t)})}})}if(typeof t=="string"&&t.length>0)defaultSettings=t;var n=1728;if(t=="ar"){n=1584}window.persiaNumberedDOM=this;r(this,n);e(document).ajaxComplete(function(){var e=window.persiaNumberedDOM;r(e,n)})}})(jQuery);origParseInt=parseInt;parseInt=function(e){e=e.toString().replace(/[\u06F0\u06F1\u06F2\u06F3\u06F4\u06F5\u06F6\u06F7\u06F8\u06F9]/g,function(e){return String.fromCharCode(e.charCodeAt(0)-1728)}).replace(/[\u0660\u0661\u0662\u0663\u0664\u0665\u0666\u0667\u0668\u0669]/g,function(e){return String.fromCharCode(e.charCodeAt(0)-1584)}).replace(/[\u066B]/g,".");return origParseInt(e)};origParseFloat=parseFloat;parseFloat=function(e){e=e.toString().replace(/[\u06F0\u06F1\u06F2\u06F3\u06F4\u06F5\u06F6\u06F7\u06F8\u06F9]/g,function(e){return String.fromCharCode(e.charCodeAt(0)-1728)}).replace(/[\u0660\u0661\u0662\u0663\u0664\u0665\u0666\u0667\u0668\u0669]/g,function(e){return String.fromCharCode(e.charCodeAt(0)-1584)}).replace(/[\u066B]/g,".");return origParseFloat(e)}
  //Change Numbers
    $('#copyright').persiaNumber(); 
    $('.meta').persiaNumber(); 
    $('#nopost').persiaNumber(); 
    $('article').persiaNumber(); 

function submit()
{
    var name = $('#sname').val();
    var email = $('#semail').val();

    if (name==""){$('#sname').css({'border':'1px solid orange'});}
    else if(email=="") {$('#semail').css({'border':'1px solid orange'});}
    else
    {
        $('#form').css({'max-height':'0px'});
        $('#loading').css({'min-height':'40px'});

        var xmlhttp;
        if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
        else {xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
        xmlhttp.onreadystatechange=function()
          {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
                  document.getElementById("result").innerHTML=xmlhttp.responseText;
                  $('#loading').css({'display':'none'});
              }
          }
        xmlhttp.open("POST","http://heshzad.com/wp-content/themes/heshzad/subscription.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("name="+name+"&email="+email);
    }
}

$('#sname').click(function()
       {$('#sname').css({'border':'1px solid #ccc'}); });
$('#semail').click(function()
       {$('#semail').css({'border':'1px solid #ccc'}); });



  //Google analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46332975-1', 'auto');
  ga('send', 'pageview');












