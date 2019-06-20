<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 6/17/2019
 * Time: 1:10 PM
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="sample.php" method="post" id="nameform">
<table>
    <tr>
        <th>cid</th>
        <th>:</th>
        <th><input type="text" placeholder="input cid" name="cid" id="txtcid"></th>
    </tr>
    <tr>
        <th>name</th>
        <th>:</th>
        <th><input type="text"placeholder="input name" name="name" id="txtname"></th>
    </tr>
    <tr>
        <th>address</th>
        <th>:</th>
        <th><input type="text" placeholder="input address" name="address" id="txtaddress"></th>
    </tr>
    <tr>
        <th>mobile number</th>
        <th>:</th>
        <th><input type="text" placeholder="mobile number" name="mobile number" id="txttel"></th>
    </tr>
    <tr>
        <th>salary</th>
        <th>:</th>
        <th><input type="text" placeholder="salary" name="mobile number" id="txtsal"></th>
    </tr>
    <br>
    <tr>
        <button type="submit" form="nameform" value="submit">submit</button>
        <th><button type="reset" value="reset">reset</button></th>

    </tr>
    </table>

</form>
<script src="js/jquery-3.4.1.min.js"></script>
<script>

    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#txttel").val();
            // var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var regEx = /^(\+{1}\d{2,3}\s?[(]{1}\d{1,3}[)]{1}\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}$/;

            var result = regEx.test(value);
            var
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#txtname").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalide..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#txtsal").val();
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    $("#btnadd").click(function () {
        var cid=$("#txtcid").val();
        var regEx ="/C-\d{3}/";
        var result=regEx.test(cid);
        if (!result) {
            alert("ID is Invalid")
        }
    });
    $("#txtcid").keyup(function () {
        if($("#txtcid").val().length>4){
            alert("invalied code ")
        }
    })

</script>
</body>
</html>

