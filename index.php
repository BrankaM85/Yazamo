<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Company page</title>
</head>
<body>
	
(2.)	

	<p>Welcome! Here you can find following things:</p>
	<ol>
		<li><em><a href="#logo">Company's logo</a></em></li>
		<li><a href="#employees">List of employees</a></li>
	</ol>
	<h1>Company's logo</h1>
	<p>Company uses following logos:</p>
	<ul>
		<li>New logo: <img src="new_logo.gif" alt="new_logo" /></li>
		<li>Old logo: <img src="old_logo.gif" alt="old_logo" /></li>
	</ul>
	<h1>List of employees</h1>
	
	<table>
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
		</tr>	
	</thead>
	<tbody>
		<tr>
			<td>Mary</td>
			<td>Williams</td>
		</tr>
		<tr>
			<td>James</td>
			<td>Smith</td>
		</tr>
	</tbody>
	</table>

(1.) Input field on focus

  <script>
  function createProductCodeForm(parent) {
     
    var form = $("<form/>");
    var flag = false;
    form.append($("<label>").text('Product Code:'));
    form.append($("<input>").attr('name', 'productCode').attr('type', 'text')
      .focus(function(){
        if(!flag){
          form.append($("<label>").attr('name', 'hint')
           .text('The product code can be found on the label.')); 
          flag = true;
        } 
      }));

      // or like this:
      // $(document).one("focus","[name=productCode]",function(){ 
      //  form.append($("<label>").attr('name', 'hint') 
      //     .text('The product code can be found on the label.'));     
      // });
    form.append('<br>');
    form.append($("<input>").attr('type', 'submit'));
    parent.append(form);
  }
</script>

(3.) 

Palindrome function - JS
<script>

  function isPalindrome(text){
    var regExp =/[^A-Za-z0-9]/; // if contain replace any special character with ''
    var lowerText = text.toLowerCase().replace(regExp, '');

    var reverse = lowerText.split('').reverse().join('');
    if(lowerText == reverse){
      return true;
    }
  }

</script>

  Palindrome function - PHP
<?php

function isPalindrome($txt){
	$txtLow = strtolower($txt);
	
	if($txtLow == strrev($txtLow)){
		return true;
	}
}

?>

(4.) groupByOwners function - PHP
<?php
  function groupByOwners($input){
      $output=[];      
      forEach($input as $key=>$val){
           $output[$val][]=$key; 
       }
      return $output;
    }
 
$input=array("Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy");
?>


</body>
</html>	