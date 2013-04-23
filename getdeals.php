<?
$pagetitle="Your Purchase";
include("includes/includeswithheader.php"); 
include("classes/deals.php");
include("buydealprocess.php");

if(isset($_POST['coupon'])
{
  echo "function funccoupon(fieldname)

  selectedvalue=Number(document.getElementById(fieldname).value);
  document.getElementById(coupon').value=selectedvalue;
  selectedvalue=selectedvalue/100;
  dealpriceboxtouse=Number(document.getElementById('dealpricebox').innerHTML);
  dealtotalboxtouse=dealpriceboxtouse-selectedvalue;
  document.getElementById('dealtotalbox').innerHTML=dealtotalboxtouse;
  document.getElementById('dealfinaltotalbox').innerHTML=dealtotalboxtouse;
    
";
	}


?>
<style>
.desrciptionlabelbox { color:#fff;float:left;width:257px;font-size:13px;font-weight:bold;padding:4px;padding-top:7px;padding-bottom:7px;margin-right:4px;}
.desrciptiontextbox { color:#595959;float:left;width:257px;font-size:12px;padding:4px;margin-right:4px; line-height:18px; }

.quantitylabelbox { color:#fff;float:left;width:80px;font-size:13px;font-weight:bold;padding:4px;padding-top:7px;padding-bottom:7px;margin-right:4px;text-align:center; }
.quantitytextbox { float:left;width:80px;margin-right:4px;padding:4px;color:#595959;text-align:center; }

.pricelabelbox { color:#fff;float:left;width:70px;font-size:13px;font-weight:bold;padding:4px;padding-top:7px;padding-bottom:7px;margin-right:4px;text-align:center;}
.pricetextbox { float:left;color:#595959;width:70px;font-size:12px;padding:4px;margin-right:4px;text-align:center; }

.totallabelbox { color:#fff;float:left;width:100px;font-size:13px;font-weight:bold;padding:4px;padding-top:7px;padding-bottom:7px;text-align:center;}
.totaltextbox { float:left;width:100px;text-align:center;font-size:12px;padding:4px;color:#595959;}
.coupon { margin-left:10px; margin-top:10px; font-weight:bold; font-size:12px; }
.bstyle{           
display: none;
position: absolute;
top: 0%;
left: 0%;
width: 100%;
height: 500%;
background-color: #686868;
z-index:1001;
-moz-opacity: 0.8;
opacity:.80;
filter: alpha(opacity=80);
}
.wstyle {
display: none;
position: absolute;
top: 25%;
left: 25%;
width: 40%;
height: 40%;
padding-top: 500px;
min-height:300px;

background-image:url('images/product-bg');
z-index:1002;
overflow: auto;
}


</style>



<script>

function funcchangevalue(fieldname)
{ 
   
  selectedvalue=Number(document.getElementById(fieldname).value);
  document.getElementById('dealquantity').value=selectedvalue;
  dealpriceboxtouse=Number(document.getElementById('dealpricebox').innerHTML);
  dealtotalboxtouse=dealpriceboxtouse*selectedvalue;
  document.getElementById('dealtotalbox').innerHTML=dealtotalboxtouse;
  document.getElementById('dealfinaltotalbox').innerHTML=dealtotalboxtouse;
    

}

function funccoupon(fieldname)
{ 
  
  selectedvalue=Number(document.getElementById(fieldname).value);
  document.getElementById('coupon').value=selectedvalue;
  selectedvalue=selectedvalue/100;
  dealpriceboxtouse=Number(document.getElementById('dealpricebox').innerHTML);
  dealtotalboxtouse=dealpriceboxtouse-selectedvalue;
  document.getElementById('dealtotalbox').innerHTML=dealtotalboxtouse;
  document.getElementById('dealfinaltotalbox').innerHTML=dealtotalboxtouse;
    
}

function fucnpostme(formname)
{ 
  document.forms[formname].submit();
 }

function funcclosepop(closediv)
{
	divClose(closediv);
	document.getElementById('fade').style.display='none';
	 
 
 }



function funcloginme(formName)
{ 
    focusfield=0;
    emailtouse=document.forms[formName].email.value;
	passwordtouse=document.forms[formName].password.value;
	if (<?=$outlets;?>!=0) {
	urltoredirecttouse=document.forms[formName].urltoredirect.value;
	}
	 if(!emailAddress("email",emailtouse))
		  {
			if(focusfield==0)
				{ 
				 document.forms[formName].email.focus();
				 focusfield=1;
				 } 
		  }
			

	 if(!validate("password",passwordtouse))
		  {
			if(focusfield==0)
				{ 
				 document.forms[formName].password.focus();
				 focusfield=1;
				 } 
		  }


    if(focusfield==1)
      return false;
	else
	  document.forms[formName].submit();
  }
  
function funregisterandbuydeal(formName)
{ 
    focusfield=0;
	nametouse=document.forms[formName].name.value;
    emailtouse=trim(document.forms[formName].remail.value);
	passwordtouse=trim(document.forms[formName].rpassword.value);  
	retypepasswordtouse=trim(document.forms[formName].retypepassword.value);  
	sextouse=trim(document.forms[formName].sex.value); 
	daytouse=trim(document.forms[formName].day.value); 
	monthtouse=trim(document.forms[formName].month.value); 
	yeartouse=trim(document.forms[formName].year.value); 
	addresstouse=trim(document.forms[formName].address.value); 
	numbertouse=trim(document.forms[formName].number.value); 
	areatouse=trim(document.forms[formName].area.value);
	cityIdtouse=trim(document.forms[formName].cityId.value);
if (<?=$outlets;?>!=0) {
		outlettouse=trim(document.forms[formName].outlet.value);
}


	
	
	    if(<?=$optiondeal;?>!=0)
	 { 
		packagetouse=trim(document.forms[formName].package.value);
	  
	  }

  if(<?=$sizedeal;?>!=0)
	 { 
		sizeIdtouse=trim(document.forms[formName].sizeId.value);
	  
	  }

	
   if(!validate("sex",sextouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].sex.focus();
						focusfield=1;
					}
		   }		 

			

	 if(!validate("name",nametouse))
		  {
			if(focusfield==0)
				{ 
				 document.forms[formName].name.focus();
				 focusfield=1;
				 } 
		  }
		  
 	if(!emailAddress("remail",emailtouse))
			{
				if(focusfield==0)
					{ 
						document.forms[formName].remail.focus();
						focusfield=1;
					}
  
		   }
	 
	  if(!userPassword("rpassword",passwordtouse,"Password",6))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].rpassword.focus();
						focusfield=1;
					}
		   }		 

	  if(!validate("retypepassword",retypepasswordtouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].retypepassword.focus();
						focusfield=1;
					}
		   }		 


	  if(!validate("dob",daytouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].day.focus();
						focusfield=1;
					}
		   }		 


	  if(!validate("dob",monthtouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].month.focus();
						focusfield=1;
					}
		   }	
		   
	  if(!validate("dob",yeartouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].year.focus();
						focusfield=1;
					}
		   }	
		if(!validate("area",areatouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].area.focus();
						focusfield=1;
					}
		   }
		   
		   		   
		   if(!validate("cityId",cityIdtouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].cityId.focus();
						focusfield=1;
					}
		   }	
		   
		   if (<?=$outlets;?>!=0) {	 
		if(!validate("outlet",outlettouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].outlet.focus();
						focusfield=1;
					}
		   }		 
		   }
	


 if(<?=$optiondeal;?>!=0)
	 { 
			if(!validate("package",packagetouse))
				   {
						if(focusfield==0)
						   { 
								document.forms[formName].package.focus();
								focusfield=1;
							}
				   }
	  
	  }

 if(<?=$sizedeal;?>!=0)
	 { 
			if(!validate("sizeId",sizeIdtouse))
				   {
						if(focusfield==0)
						   { 
								document.forms[formName].sizeId.focus();
								focusfield=1;
							}
				   }
	  
	  }

	if(!validate("number",numbertouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].number.focus();
						focusfield=1;
					}
		   }		 
	   

	  if(!validate("address",addresstouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].address.focus();
						focusfield=1;
					}
		   }		 

       if(retypepasswordtouse!="" && passwordtouse!="")
	    { 
		 
		    chrp=retypepasswordtouse.toLowerCase();
			chp=passwordtouse.toLowerCase();
			
			if(chrp!=chp)
			 {
		      document.getElementById('retypepasswordfailed').innerHTML="Password do not match";
	          document.getElementById('retypepasswordfailed').style.display="inline";
  			  focusfield=1;

			 }
		   else
		    {
		     document.getElementById('retypepasswordfailed').innerHTML="Re-type your password";
			 document.getElementById('retypepasswordfailed').style.display="none";
			}
		  }


       // if(focusfield==1)
 //  {
//	    return false;
 //  }  else
//	    { 
		   
//		   document.getElementById('stext').style.display='block';
//		   document.getElementById('fade').style.display='block';
//		   return false;
//		 }
	
 // }
   
   if(focusfield==1)
	    return false;
	   else
	    document.forms[formName].submit();
 
  }
 
function funonlybuydeal(formName)
{ 
    focusfield=0;
 	addresstouse=trim(document.forms[formName].address.value); 
	numbertouse=trim(document.forms[formName].number.value); 
	areatouse=trim(document.forms[formName].area.value);
	//calltouse=trim(document.forms[formName].call.value);
	
	if (<?=$outlets;?>!=0) {
		outlettouse=trim(document.forms[formName].outlet.value);
	}
	
    if(<?=$optiondeal;?>!=0)
	 { 
		packagetouse=trim(document.forms[formName].package.value);
	  
	  }
	  
   if(<?=$sizedeal;?>!=0)
	 { 
		sizeIdtouse=document.forms[formName].sizeId.value;
	  
	  }
 


 	if(!validate("number",numbertouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].number.focus();
						focusfield=1;
					}
		   }		 
	   

	  if(!validate("address",addresstouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].address.focus();
						focusfield=1;
					}
		   }		 


	if(!validate("area",areatouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].area.focus();
						focusfield=1;
					}
		   }
		   
  /*		   
	if(!validate("call",calltouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].call.focus();
						focusfield=1;
					}
		   }
	
	*/
	
	
		   if (<?=$outlets;?>!=0) {
	if(!validate("outlet",outlettouse))
		   {
				if(focusfield==0)
				   { 
						document.forms[formName].outlet.focus();
						focusfield=1;
					}
		   }
		   }
	
	
   if(<?=$optiondeal;?>!=0)
	 { 
			if(!validate("package",packagetouse))
				   {
						if(focusfield==0)
						   { 
								document.forms[formName].package.focus();
								focusfield=1;
							}
				   }
	  
	  }

 if(<?=$sizedeal;?>!=0)
	 { 
			if(!validate("sizeId",sizeIdtouse))
				   {
						if(focusfield==0)
						   { 
								document.forms[formName].sizeId.focus();
								focusfield=1;
							}
				   }
	  
	  }

		   
 // if(focusfield==1)
 //  {
//	    return false;
 //  }  else
//	    { 
		   
//		   document.getElementById('stext').style.display='block';
//		   document.getElementById('fade').style.display='block';
//		   return false;
//		 }
	
 // }
   
   if(focusfield==1)
	    return false;
	   else
	    document.forms[formName].submit();
 
  }
</script>

<script>
path="http://www.dealtoday.pk/";
function pickareavalue(fieldname)
{
	 valuetouse=document.getElementById(fieldname).value;
	 pickareadropdown(valuetouse)
	 
	  }
function pickareadropdown(outletvalue)
{ 
    parameters="areapick=areapick&cityIdforarea="+outletvalue;
    url="pickarea.php";
	automaticUpdatero(url,parameters,'areadropdown');
 }

 function automaticUpdatero(url,parameters,div)
      { 
	    var XMLHttpRequestObject = false; 
		 
		 

        if (window.XMLHttpRequest) {
          XMLHttpRequestObject = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
          XMLHttpRequestObject = new 
            ActiveXObject("Microsoft.XMLHTTP");
        }




        if(XMLHttpRequestObject) {
		  url=path+url;
		  XMLHttpRequestObject.open("POST",url,true);
		  XMLHttpRequestObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  XMLHttpRequestObject.setRequestHeader("Content-length", parameters.length);
		  XMLHttpRequestObject.send(parameters);
          XMLHttpRequestObject.onreadystatechange = function() 
          { 
		  
            if (XMLHttpRequestObject.readyState == 4 &&  XMLHttpRequestObject.status == 200) { 
			
				var JsonArray = [XMLHttpRequestObject.responseText];
				var JsonData = eval(JsonArray);
				document.getElementById(div).innerHTML=JsonData;
                delete XMLHttpRequestObject;
                XMLHttpRequestObject = null;
            } 
          } 
        }
      }
</script>

<? if ($dealproductcheck=="1" and $productId=="") 
{
	
	  header("location: " .$path."/allproducts/".$dealId."/1");

	
}

?>


<div style="float:left;width:680px;background-color:#fff;padding-top:10px;">
     
     <? if(!isset($_POST["buydeal"])) { ?>

     
 
   <? /* Order Details Box Start */ ?>
     <div>
       <div style="font-size:26px;margin:10px;padding-bottom:4px;color:#595959;">Order Details</div>
       
       <div style="margin-left:10px;padding-top:10px;background-color:#00b2ee;width:659px;border-top-right-radius:10px;border-top-left-radius:10px;">
      	 <div class="quantitylabelbox">Deal</div>
         <div class="desrciptionlabelbox">Description</div>
         <div class="quantitylabelbox">Quantity</div>
         <div class="pricelabelbox">Price</div>
         <div class="totallabelbox">Total</div>
         <div style="clear:both;"></div>
       </div>

       <div style="border-bottom-right-radius:10px;border-bottom-left-radius:10px;margin-left:10px;padding-top:5px;padding-bottom:10px;border:1px solid #999;border-top:none;margin-right:11px;">
        <? if ($productId!='') { ?>
        <div class="quantitytextbox" style="background-color:#edeef0;"><img src="<?=$path;?>/images/products/icon/<?=$productimage;?>" width="70" height="70"/></div>
         <? } else {?>
       <div class="quantitytextbox" style="background-color:#edeef0;"><img src="<?=$path;?>/images/deals/icon/<?=$dealimage;?>" width="70" height="70"/></div>
              <? } ?>
              <? if ($productId!='') { ?>
         <div class="desrciptiontextbox"> <?=$productdescription;?></div>
         <? } else { ?>
         <div class="desrciptiontextbox"><?=$dealdescription;?></div>
          <? } ?>
       
         
         <? if($productId!='') { 
           $deallimitperbuyer=$productquantity;
 } ?>
         
         <? if($deallimitperbuyer==1) { ?>
            <div class="quantitytextbox"><?=$dealquantity;?></div>
         
         <? } else { ?>
         <? if($userId=="") { ?>
            <div class="quantitytextbox"><?=$dealquantity;?></div>
         <? } else { ?>
         <div class="quantitytextbox">
		 <select name="quantityselect" id="quantityselect" onchange="funcchangevalue('quantityselect');">
           <option value="1">1</option>

          <? for($loop=2;$loop<=$deallimitperbuyer-$checkifuserhasalreadyorderedthis;$loop++) { ?>
           <option value="<?=$loop;?>"><?=$loop;?></option>
          <? } ?>
         </select>
         
         </div>
         <? } } ?>
         
         
         <div class="pricetextbox">Rs <span id="dealpricebox"><?=$dealprice;?></span></div>
         <div class="totaltextbox">Rs <span id="dealtotalbox"><?=$dealtotal;?></span></div>
         
         <div style="clear:both;"></div>
        <div class="coupon" >Coupon :  <form name="coupon" id="coupon" method="POST"><input name="couponfunc" type="text" style="-moz-border-radius: 15px;-webkit-border-radius: 15px; border-radius:15px;border: 1px solid gray;height:20px;width:200px;" /> <input type="submit" value="Submit" onclick="couponfunc(coupon)"  name="submit"/> </form> </div>
       </div>
      
       <div id="couponamount" style="display:hidden;"><?=$newamount;?></div>
       
       <div style="padding-top:10px;padding-bottom:20px;font-size:20px;">
         <div style="padding-left:440px;float:left;color:#595959;">Final Price:</div>
         <div style="float:right;padding-right:40px;color:#595959;">Rs <span id="dealfinaltotalbox"><?=$dealtotal;?></span></div>
         <div style="clear:both;"></div>
       </div>
       
       
     </div>     
   <? /* Order Details Box End */ ?>
   
   <? /* Order Account Information Box Start */ ?>
   
    <? if($userId=="") { ?>  
     
     <div> 
     <div style="font-size:26px;margin:10px;padding-bottom:4px;border-bottom:1px solid #999;">Account Information</div>
     <div style="padding-left:10px;">

       
   
         <form name="formlogindealtoday" id="formlogindealtoday" action="<?=$path;?>/login" method="post" onsubmit="return funcloginme('formlogindealtoday');">
         <input type="hidden" name="loginintodealtoday" id="loginintodealtoday" />
         <input type="hidden" name="urltoredirect" id="urltoredirect" value="<?=$urltoredirect;?>" />
     
           <div style="padding-left:10px;padding-bottom:10px;font-size:18px;color:#009;">Login into <?=$website;?> to buy this deal</div>
             
           <div style="padding-top:10px;padding-left:10px;">    
              <div style="float:left;padding-top:5px;padding-right:5px;"><span class="formlabel">Email</span></div>
              <div style="float:left;padding-left:20px;">
                <div><input type="text" name="email" id="email" value="<?=$email;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:200px;" /> </div>
                <div class="formfieldspacer" style="height:10px;"><span id="emailfailed" class="validate">Enter your email</span></div>   
              </div>
           
              <div style="float:left;padding-left:30px;padding-right:5px;padding-top:5px;"><span class="formlabel">Password</span></div>
              <div style="float:left;padding-left:20px;border-radius:15px;">
                <div><input type="password" name="password" id="password" value="<?=$password;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:200px;"/></div>
                <div class="formfieldspacer" style="height:10px;"><span id="passwordfailed" class="validate">Enter your password</span></div>   
              </div>
              
            <div style="float:left;cursor:pointer;padding-left:20px;" onclick="funloginme('formlogindealtoday');"><input type="submit" value="Login" /></div>
            <div style="clear:both;"></div>
           </div>
           
         </form>  
         <?
          if ($dealviewable!=1) {
			
			?>
         
          <form name="formbuydeal" id="formbuydeal" method="post" onsubmit="return funregisterandbuydeal('formbuydeal');">
          <input type="hidden" name="buydeal" id="buydeal" />
          <input type="hidden" name="buydealcaptcha" id="buydealcaptcha" value="<?=$captchabuydeal;?>" />
          <input type="hidden" name="registerbuydeal" id="buydealcaptcha" value="" />
          <input type="hidden" name="dealquantity" id="dealquantity" value="<?=$dealquantity;?>" />
          
          

         
         <div style="font-size:20px;padding-left:10px;">OR</div>
         <div style="padding-left:10px;padding-top:20px;border-bottom:1px solid #999;padding-bottom:10px;font-size:18px;color:#66c7f2;">Register now to buy this deal
           
         </div>
         <div style="padding-top:20px;padding-left:10px;">
            <div>    
              <div style="float:left;width:150px;padding-top:5px;"><span class="formlabel">Gender</span></div>
              <div style="float:left;">
                <div><select name="sex" id="sex" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
               <option value="">Select your gender</option>
               <option value="Female" <? if($sex=="Female") { ?> selected="selected" <? } ?>>Female</option>
               <option value="Male" <? if($sex=="Male") { ?> selected="selected" <? } ?>>Male</option>
              </select>
              </div>
                <div class="formfieldspacer"><span id="sexfailed" class="validate">Select your gender</span></div>   
              </div>
              <div class="clearboth"></div>
           </div>
           
           <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Name</span></div>
          <div style="float:left;">
            <div><input type="text" name="name" id="name" value="<?=$name;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;" /></div>
            <div class="formfieldspacer"><span id="namefailed" class="validate">Enter your name</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Email</span></div>
          <div style="float:left;">
            <div><input type="text" name="remail" id="remail" value="<?=$email;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;" /></div>
            <div class="formfieldspacer"><span id="remailfailed" class="validate">Enter your email</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
       <? if($dealmultiplecityIds!="0") { ?> 
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">City</span></div>
          <div style="float:left;">
            <div><select name="cityId" id="cityId" onchange="pickareavalue('cityId');">
              <option value="">Select City</option>
              <option value="1">Karachi</option>
              <option value="2">Lahore</option>
             </select>
              </div>
            <div class="formfieldspacer"><span id="cityIdfailed" class="validate">Select City</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
     <? } else if($dealmultiplecityIds=="0")  { ?>
     
       <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">City</span></div>
          <div style="float:left;">
            <div><select name="cityId" id="cityId">
              <option value="">Select City</option>
              <option value="1"  <? if($cityId=="1") { ?> selected="selected" <? }?>>Karachi</option>
              <option value="2"  <? if($cityId=="2") { ?> selected="selected" <? }?>>Lahore</option>
             </select>
              </div>
            <div class="formfieldspacer"><span id="cityIdfailed" class="validate">Select City</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
     
     
     
     <? } ?>  
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">DOB</span></div>
          <div style="float:left;">
           <div>
          <select id="day" name="day" style="margin:0px;border:1px solid #00b2ee;"><option value="">Day</option><? createcombobox("select * from days","day","day",$day); ?></select>
          <select id="month" name="month" class="text" style="margin:0px;border:1px solid #00b2ee;"><option value="">Month</option><? createcombobox("select * from months","value","shortmonth",$month); ?></select>

<select id="year" name="year" class="text" style="margin:0px;border:1px solid #00b2ee;"><option value="">Year</option><? createcombobox("select * from years where status=1 and year<2001","year","year",$year); ?></select>
          </div>
          <div class="formfieldspacer"><span id="dobfailed" class="validate">Select your dob</span></div> 
          </div>  
          <div class="clearboth"></div>
        </div>
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Password</span></div>
          <div style="float:left;">
            <div><input type="password" name="rpassword" id="rpassword" value="<?=$password;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;" /></div>
            <div class="formfieldspacer"><span id="rpasswordfailed" class="validate">Enter your password</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Re-Type Password</span></div>
          <div style="float:left;">
            <div><input type="password" name="retypepassword" id="retypepassword" value="<?=$password;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;" /></div>
            <div class="formfieldspacer"><span id="retypepasswordfailed" class="validate">Re-Type your password</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
        <? if ($dealId=="235") { ?>
                <div id="dealdelivery">    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Product Delivery</span></div>
          <div style="float:left;">
            <div><input type="radio" name="delivery" id="deliveryyes"  onchange="funcchangevaluefordelivery('deliveryyes');" value="100"  /> Yes <span style="color:#00b2ee;">(Rs.100 additional)</span></div>   
            <div><input type="radio" name="delivery" id="deliveryno"  onchange="funcchangevaluefordelivery('deliveryno');" value="0" /> No <span style="color:#00b2ee;">(Take Away from Subway,Khayaban-e-Shahbaz, Dha Phase VI - 2nd floor)</span></div> 
   <div class="formfieldspacer"><span id="deliveryfailed" class="validate">Select Yes or No</span></div>   

          </div>
          <div class="clearboth"></div>
        </div>
        <? } ?>
        
        
             <? if($optiondeal!="0") { 
	 
	    $queryoption="select * from dealoptions where dealId='$dealId'";
		$executeoption=mysql_query($queryoption);
	    $optionrows=mysql_num_rows($executeoption);
	 
	 ?>   
        
       <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Package</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="package" id="package" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select your package</option>
            <? for($optionloop=0;$optionloop<$optionrows;$optionloop++)
			 {
			   $optionId=stripslashes(mysql_result($executeoption,$optionloop,"id"));
			   $option=stripslashes(mysql_result($executeoption,$optionloop,"servicecaption"));
	 ?>

     <option value="<?=$optionId;?>" ><?=$option;?></option>
     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="packagefailed" class="validate">Select your package</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
   <? } ?>
		
        
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Contact Number</span></div>
          <div style="float:left;">
            <div><input type="text" name="number" id="number" value="" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;" /></div>
            <div class="formfieldspacer"><span id="numberfailed" class="validate">Enter contact number</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>

        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Address</span></div>
          <div style="float:left;">
            <div><textarea name="address" id="address" value="<?=$address;?>" style="-moz-border-radius: 10px;-webkit-border-radius: 10px; border-radius:10px;border: 1px solid gray;height:80px;resize:none;width:250px;"></textarea></div>
            <div class="formfieldspacer"><span id="addressfailed" class="validate">Enter your delivery address</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
 
  <? if($dealmultiplecityIds!="0")  { ?>   
     
         <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Area</span></div>
          <div style="float:left;">
          <div id="areadropdown">
            <select name="area" id="area" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select your area</option>
            </select>
             </div>
            <div class="formfieldspacer"><span id="areafailed" class="validate">Select your delivery area</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>


     
 
 
     <? } else if($dealmultiplecityIds=="0") { ?>       
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Area</span></div>
          <div style="float:left;">
         <select name="area" id="area" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
         <option value="">Select your area</option>
      <?  while($areasquery=mysql_fetch_assoc($areasquery1)){ 
	 	 $areasid=stripslashes($areasquery["id"]);
		 $areasname=stripslashes($areasquery["area"]); ?>
     <option value="<?=$areasid;?>"><?=$areasname;?></option>
	 <? } ?>
            </select>
             <div class="formfieldspacer"><span id="areafailed" class="validate">Enter your delivery area</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
       <? } ?> 
        
                <? if ($outlets!=0) { ?>
        <div>
                  <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Outlet</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="outlet" id="outlet" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select outlet</option>
      <?  	     for($loop=0;$loop<$outletrows;$loop++) 
		  {
			  $outletid=mysql_result($outletexecute,$loop,"id");
			  $outletname=mysql_result($outletexecute,$loop,"name");
	 ?>

     <option value="<?=$outletid;?>" ><?=$outletname;?></option>
     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="outletfailed" class="validate">Select Outlet</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
	<? }  else if($sizedeal!="0") {  
	 
 	   	     $querysizedeal="select record.*,s.size,s.id as sizeId from sizes s,(select * from $inventorytable where dealId='$dealId') as record where record.sizeId=s.id";
    	$executesize=mysql_query($querysizedeal);
	    $optionsizerows=mysql_num_rows($executesize);

	    $querysizedealbought="select sum(quantity) as bought from orders where orderstatus!='Declined' and dealId='$dealId' and sizeId!='0' group by sizeId";
		$executesizebought=mysql_query($querysizedealbought);
	    $optionsizerowsbought=mysql_num_rows($executesizebought);
	 ?>   
        
       <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Size</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="sizeId" id="sizeId" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select size</option>
            <? for($sizeloop=0;$sizeloop<$optionsizerows;$sizeloop++)
			 {
			   $sizeId=stripslashes(mysql_result($executesize,$sizeloop,"sizeId"));
			   $size=stripslashes(mysql_result($executesize,$sizeloop,"size"));
			   $available=stripslashes(mysql_result($executesize,$sizeloop,"available"));
			   $bought=stripslashes(mysql_result($executesizebought,$sizeloop,"bought"));
			   if(($available>$bought) || $bought=="") { ?>
			   

     <option value="<?=$sizeId;?>" ><?=$size;?></option>
                
                <? } ?>     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="sizeIdfailed" class="validate">Select size</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
   <? } ?>
            
        <div style="padding-top:10px;padding-bottom:10px;">
          <div style="padding-left:136px;cursor:pointer;" onclick="funregisterandbuydeal('formbuydeal');"><input type="submit" value="Buy Deal" /></div>
          </div>
         </div> 
        </form>              
         <? }  ?>
       </div> 
      </div>  
      
    <? } ?> 
   
   <? /* Order Account Information Box End */ ?>  
   
   
   <? if($userId!="") { 
   
   
       $querybuyerdetailsexecute=mysql_query("select contact,address from orders where buyerId='$userId' order by id desc limit 0,1");
       $querbuyerrows=mysql_num_rows($querybuyerdetailsexecute);
	   
	   
	   if($querbuyerrows==1)
	    {
			
		   $address=trim(stripslashes(mysql_result($querybuyerdetailsexecute,0,"address")));
      	   $number=trim(stripslashes(mysql_result($querybuyerdetailsexecute,0,"contact")));

  
		}
   
   
   ?>
    <?  if (($dealviewable==1) && ($allowuserId=="")) { ?>
         <div style="text-align:center; color:#666;padding-bottom:20px;font-size:18px;">This deal is only for current buyers</div>
         <? }  else {  ?>
         
		 
      <form name="formbuydeal" id="formbuydeal" method="post" onsubmit="return funonlybuydeal('formbuydeal');">
      <input type="hidden" name="buydeal" id="buydeal" />
      <input type="hidden" name="buydealcaptcha" id="buydealcaptcha" value="<?=$captchabuydeal;?>" />
      <input type="hidden" name="dealquantity" id="dealquantity" value="<?=$dealquantity;?>" />
       <div style="padding-left:10px;padding-top:20px;border-bottom:1px solid #999;padding-bottom:10px;font-size:18px;color:#66c7f2;">Buy this deal</div>
        <div style="padding-top:20px;padding-left:10px;">
        
        <? if($dealmultiplecityIds!=="0") { ?>
          
          <div style="padding-bottom:20px;">
            <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Select City</span></div>
            <div style="float:left;">
             Karachi <input type="radio" name="cityId" id="cityId" value="1" onclick="pickareadropdown('1','areadropdown');" />

            Lahore  <input type="radio" name="cityId" id="cityId" value="2"  onclick="pickareadropdown('2','areadropdown');"/>

<? /*
<select name="cityId" id="cityId" onselect="pickareadropdown('$cityId','areadropdown');" >
<? createdropdown("cities","id","name",$cityId,"status='1'",$orderbyfield='id',$ordertype='asc');?>
         </select>   
         */ ?>
            </div>
             <div style="clear:both;"></div>            
          </div> 
        
       
        <? } ?>
        
        
        
        <? if ($outlets!=0) { ?>
        <div style="text-align:center;font-weight:bold;color:#C00;padding-bottom:14px;">Voucher can only be redeemed at the chosen outlet </div>
        <div>
                  <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Outlet</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="outlet" id="outlet" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select outlet</option>
      <?  	     for($loop=0;$loop<$outletrows;$loop++) 
		  {
			  $outletid=mysql_result($outletexecute,$loop,"id");
			  $outletname=mysql_result($outletexecute,$loop,"name");
	 ?>

     <option value="<?=$outletid;?>" ><?=$outletname;?></option>
     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="outletfailed" class="validate">Select Outlet</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
<? } ?>

     <?  if($optiondeal!="0") { 
	 
	    $queryoption="select * from dealoptions where dealId='$dealId'";
		$executeoption=mysql_query($queryoption);
	    $optionrows=mysql_num_rows($executeoption);
	 
	 ?>   
        
       <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Package</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="package" id="package" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select your package</option>
            <? for($optionloop=0;$optionloop<$optionrows;$optionloop++)
			 {
			   $optionId=stripslashes(mysql_result($executeoption,$optionloop,"id"));
			   $option=stripslashes(mysql_result($executeoption,$optionloop,"servicecaption"));
	 ?>

     <option value="<?=$optionId;?>" ><?=$option;?></option>
     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="packagefailed" class="validate">Select your package</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
   <? }  else if($sizedeal!="0") {  
	 
	     $querysizedeal="select record.*,s.size,s.id as sizeId from sizes s,(select * from $inventorytable where $inventorywhereclause) as record where record.sizeId=s.id";
    	$executesize=mysql_query($querysizedeal);
	    $optionsizerows=mysql_num_rows($executesize);
		

	    $querysizedealbought="select sum(quantity) as bought from orders where orderstatus!='Declined' and $inventorywhereclause and sizeId!='0' group by sizeId";
		$executesizebought=mysql_query($querysizedealbought);
	    $optionsizerowsbought=mysql_num_rows($executesizebought);
	 ?>   
        
       <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Size</span></div>
          <div style="float:left;">
         <div> 
         
			
            <select name="sizeId" id="sizeId" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select size</option>
            <? for($sizeloop=0;$sizeloop<$optionsizerows;$sizeloop++)
			 {
			  	  
			   $sizeId=stripslashes(mysql_result($executesize,$sizeloop,"sizeId"));
			   $size=stripslashes(mysql_result($executesize,$sizeloop,"size"));
			   $available=stripslashes(mysql_result($executesize,$sizeloop,"available"));
			   $bought=stripslashes(mysql_result($executesizebought,$sizeloop,"bought"));
			   if(($available>$bought) || $bought=="") { ?>
			   

     <option value="<?=$sizeId;?>" ><?=$size;?></option>
                
                <? } ?>     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="sizeIdfailed" class="validate">Select size</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
   <? } ?>
   
 <? if ($dealId=="235") { ?>
                <div id="dealdelivery">    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Product Delivery</span></div>
          <div style="float:left;">
            <div><input type="radio" name="delivery" id="deliveryyes"  onchange="funcchangevaluefordelivery('deliveryyes');" value="100"  /> Yes <span style="color:#00b2ee;">(Rs.100 additional)</span></div>   
            <div><input type="radio" name="delivery" id="deliveryno"  onchange="funcchangevaluefordelivery('deliveryno');" value="0" /> No <span style="color:#00b2ee;">(Take Away from Subway,Khayaban-e-Shahbaz, Dha Phase VI - 2nd floor)</span></div> 
   <div class="formfieldspacer"><span id="deliveryfailed" class="validate">Select Yes or No</span></div>   

          </div>
          <div class="clearboth"></div>
        </div>
        <? } ?>
        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Contact Number</span></div>
          <div style="float:left;">
            <div><input type="text" name="number" id="number" value="<?=$number;?>" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;"/></div>
            <div class="formfieldspacer"><span id="numberfailed" class="validate">Enter contact number</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>

<div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Address</span></div>
          <div style="float:left;">
            <div><textarea name="address" id="address"  class="textbox" style="-moz-border-radius: 10px;-webkit-border-radius: 10px; border-radius:10px;border: 1px solid gray;height:80px;resize:none;width:250px;"><?=$address;?></textarea></div>
            <div class="formfieldspacer"><span id="addressfailed" class="validate">Enter your delivery address</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>
        
     <? if($dealmultiplecityIds!="0")  { ?>   
     
         <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Area</span></div>
          <div style="float:left;">
          <div id="areadropdown">
            <select name="area" id="area" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select your area</option>
            </select>
             </div>
            <div class="formfieldspacer"><span id="areafailed" class="validate">Select your delivery area</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>


     
 
 
     <? } ?>
        
     <? if($dealmultiplecityIds=="0")  { ?>        

        
        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Delivery Area</span></div>
          <div style="float:left;">
         <div> 
			
            <select name="area" id="area" style="-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid gray;height:25px;width:250px;">
            <option value="">Select your area</option>
      <?  while($areasquery=mysql_fetch_assoc($areasquery1)){ 
	  $areasid=stripslashes($areasquery["id"]);
	 $areasname=stripslashes($areasquery["area"]);
	 ?>

     <option value="<?=$areasid;?>" ><?=$areasname;?></option>
     
            <? } ?>
            </select>
            </div>
            <div class="formfieldspacer"><span id="areafailed" class="validate">Select your delivery area</span></div>   
          </div>
          <div class="clearboth"></div>
        </div>

        <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">City</span></div>
          <div style="float:left;">
          <div> <?=$city;?></div>
          </div>
          <div class="clearboth"></div>
        </div>
      
      <? } ?>  
        
        <? if ($clientorderedbeforeid!="") { ?>
                <div>    
          <div style="float:left;width:140px;padding-top:5px;"><span class="formlabel">Receive Confirmation Call</span></div>
          <div style="float:left;">
            <div><input type="radio" name="call" id="call" value="0"  /> Yes</div>   
            <div><input type="radio" name="call" id="call" value="1" /> No</div> 
   <div class="formfieldspacer"><span id="callfailed" class="validate">Select Yes or No</span></div>   

          </div>
          <div class="clearboth"></div>
        </div>
        <? } ?>
        <div style="padding-top:10px;padding-bottom:10px;">
          <div style="padding-left:136px;cursor:pointer;" onclick="funonlybuydeal('formbuydeal');"><input type="submit" value="Buy Deal" /></div>
          </div>
   </div>
  </form>   
   
   <? }   } ?>
   
   
   <? } else if(isset($_POST["buydeal"])) { ?>
     <?
           header("location: " .$path."/orderaction/confirm-".$orderIdofdeposit."-".$orderId."-".$orderisconfirmedornot);
     ?>

     <? /*
                <div style="text-align:center;font-size:16px;color:#646363;">To Confirm your order please Press "Confirm Order"  Button!</div>

             <div style="margin-left:auto;margin-right:auto;padding-bottom:40px;padding-left:220px;padding-top:20px;">
         <input type="image" src="<?=$path;?>/images/confirmtheorder.png" onclick="openPage('<?=$path;?>/orderaction/confirm-<?=$orderIdofdeposit;?>-<?=$orderId;?>-<?=$orderisconfirmedornot;?>');" style="cursor:pointer;" value="Confirm This Order" />
          <input type="image" src="<?=$path;?>/images/canceltheorder.png" onclick="openPage('<?=$path;?>/orderaction/cancel-<?=$orderIdofdeposit;?>-<?=$orderId;?>-<?=$orderisconfirmedornot;?>');"  style="cursor:pointer;" value="Cancel This Order" />
        </div>
        
        <div style="padding-bottom:60px;-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid #00b2ee;padding:4px;margin-left:20px;margin-right:20px;font-size:17px;color:#646363;">
  
		 <? if($ordertype=="voucher") { ?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											
         <div style="padding:10px;padding-bottom:20px;text-align:center;"><?=$message;?></div>
        <? } else if($ordertype=="coupon") { ?>
         <div style="padding:10px;padding-bottom:20px;text-align:center;"><?=$message;?></div>
        <? } ?>  
              
      
        
        <div style="padding-left:10px;padding-bottom:10px;text-align:center;">
        If you have any questions, you can call our Customer Care on this number: 021-35340065 or email at <span style="color:#00b2ee;">support@dealtoday.pk</span>
        </div>
         
        <div style="padding-left:10px;padding-bottom:20px;text-align:center;">*This deal is for <?=$city?> only.</div>

     </div>
        <br /><br /><br />

     */ ?>
        
   
    <? } ?>
   
    <div id="stext" class="wstyle" >
    <? /*
<div style="float:right;">
<a href = "javascript:void(0)" onclick = "document.getElementById('stext').style.display='none';document.getElementById('fade').style.display='none'"> 
X</a></div> */ ?>
<? /* -- POP UP BOX --- START -------
<div id="modal" style="background-color:#fff;border-radius:10px;padding-bottom:10px;">
                <div style="text-align:center;font-size:16px;color:#646363;padding-top:10px;">To Confirm your order please Press "Confirm Order"  Button!</div>

             <div style="margin-left:auto;margin-right:auto;padding-bottom:20px;padding-top:20px;padding-left:110px;">
             
             <? if($userId=="") { ?>
                   <input type="image" src="<?=$path;?>/images/confirmtheorder.png" onClick="fucnpostme('formlogindealtoday');" style="cursor:pointer;" value="Confirm This Order" />
             
             <? } else { ?>
                   <input type="image" src="<?=$path;?>/images/confirmtheorder.png" onClick="fucnpostme('formbuydeal');" style="cursor:pointer;" value="Confirm This Order" />
             <? } ?>
         
          <input type="image" src="<?=$path;?>/images/canceltheorder.png" onClick="funcclosepop('stext');"  style="cursor:pointer;" value="Cancel This Order" />
        </div>
        <div style="padding-bottom:60px;-moz-border-radius: 30px;-webkit-border-radius: 30px; border-radius:30px;border: 1px solid #00b2ee;padding:4px;margin-left:20px;margin-right:20px;font-size:17px;color:#646363;">
  
		 																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										
         <div style="padding:10px;padding-bottom:20px;text-align:center;">If you fail to pay after confirming your order your account will be temporarily blocked.</div>
              
      
        
        <div style="padding-left:10px;padding-bottom:10px;text-align:center;">
        If you have any questions, you can call our Customer Care on this number: 021-35340065 or email at <span style="color:#00b2ee;">support@dealtoday.pk</span>
        </div>
         ---END ------ */ ?>
      <? /*  <div style="padding-left:10px;padding-bottom:20px;text-align:center;">*This deal is for <?=$city?> only.</div> */ ?>
<? /*
     </div>
</div>


  
  <div id="fade" class="bstyle"></div>
*/ ?>
</div>
  </div>
  <div style="float:right;width:250px;margin-left:20px;"><? include("includes/rightcolumn.php");?></div>
  <div class="clearboth"></div>
</div>
</div>
<?  include("includes/footer.php"); ?>
