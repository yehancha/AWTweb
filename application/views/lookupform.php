<html> <head>
    <title>Find a Student</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
</head> <body>
<div class="container"> <div class="row">
        <fieldset>
            <legend>Find a student by ID</legend>
            <form class="form-search form-inline" method=GET>
                <input placeholder="Type a student ID" type=text name="ID" id="id">
                <input type=submit value="Search" id="findsubmit">
            </form>
        </fieldset>
    </div>
    <div class="row" id="result">   </div>
</div>
<script language="javascript">
//    $('#findsubmit').click(function() {
//        $.get("/awtweb/index.php/find/lookupById",{id : $('#id').val() },function(data) {
//            var bits = data.split(':');
//            // the student's name should be the first element!
//            $('#result').html('The student\'s name is ' +  bits[0] + " " + bits[1]);
//        });
//        return false;
//    });

    $('#findsubmit').click(function() {
        $.get("/awtweb/index.php/find/lookupById_xml", { id : $('#id').val() }, function(data) {
//            var fname = $('firstname', data).text();
//            var lname = $('lastname', data).text();
//            $('#result').html('The student\'s name is ' + fname + ' ' + lname);
//            
//            $('#result').html('First name: ' + data.firstName + ' Last name: ' + data.lastName);

            // get the XSLT file and load it into a XML DOM object
            var xslobj= getXslObj(); // see next slide for code
            // code to load XSLT - different for IE, compared with ALL other browsers! %$@*! IE!
            if (window.ActiveXObject) {
                ex=data.transformNode(xslobj);
                $('#result').html(ex);
            }
            // code for Mozilla, Firefox, Opera, etc.
            else if (document.implementation && document.implementation.createDocument) {
                xsltProcessor=new XSLTProcessor();
                xsltProcessor.importStylesheet(xslobj);
                resultDocument = xsltProcessor.transformToFragment(data,document);
                $('#result').append(resultDocument);
            }
        });
        return false;
    });

    function getXslObj()
    {
        var xslobj= null;
        $.ajax({
            url: "/awtweb/xsl/student.xsl",
            success: function(xsldata) {
                xslobj = xsldata;
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus);        
            },
            async: false, // why? see below
            dataType: "xml"
        });
        return xslobj;
    }
</script>
</body> </html>