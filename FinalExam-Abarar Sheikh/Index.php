<?php
require_once 'database.php';
$db = Database::getDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Select Category: <select name="category" id="category">

</select>
<input type="submit" id="getprod" value="Search">
<div id="prodlist">

</div>

<div id ="staffDetails">

</div>
<div id ="GridView"></div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){
        $.getJSON('getDepartment.php', function(data){
            var cat = "";
            $.each(data, function(index,category){

                cat += '<option value="' + category.department + '">' + category.department + '</option>';
            })
            $('#category').html(cat);
        });

        $('#category').change(function(){
           // alert('aaa');
            var cateee = $('#category').val();
            $.getJSON('getName.php',{cat : cateee}, function (data) {
                var result ="<ul>";
                $.each(data, function(index,product){

                  //  result += "<li>" + product.fname + " ,  " + product.lname + "</li>";
                    result += "<li>" +"<a href ='?id="+product.id+"'>"+ product.fname + " ,  " + product.lname + "<a href>"+ "</li>";
                 //   result+="<input type='hidden' name='getname'>"+ product.id + "</input>";

                });
                result += "</ul>";

                $('#prodlist').html(result);


            });
        })


        $('a').click(function(){
            event.preventDefault();
            var href = $(this).attr('href');
            var id = href.substring(23);

            $.getJSON('getStaff.php',{id : id}, function (data) {
                $.each(data, function(index,staff){
                    var staffDetail;
                    staffDetail = 'Name : ' + staff.fname +','+staff.lname+'<br/>';
                    staffDetail += 'Email : ' + staff.email+'<br/>';
                    staffDetail += 'Department : ' + staff.department+'<br/>';
                    staffDetail += 'Profile : ' + staff.profile+'<br/>';
                    $('#staffDetails').html(staffDetail);
                })

            })
        });
    });
</script>
</body>
</html>