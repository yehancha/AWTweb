<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Find a word</title>
 
</head>
<body>
<h2>Enter a word to lookup its definition</h2>
<form action="awtweb/index.php/dict/define" method=GET>
    Word: <input type=text name="word" id="word">
    <input type=submit value="Get definition">
    <div id="mydiv"></div>
</form>
<!--
  script tags should be at end of page if possible to speed up load times
-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script language="javascript">
    $('#word').keyup(function() {
        $.get('/awtweb/index.php/dict/lookup',{t : $('#word').val()},function(data) {
            var listofitemdata = "";
            $('br', data).each(function () {
                listofitemdata += $(this).text() + "<br />";
            });
            $('#mydiv').html(listofitemdata);
        });
    });
</script>
</body>
</html>