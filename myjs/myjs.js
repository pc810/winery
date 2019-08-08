$(document).ready(function (){
	$("#demo").load("load.php",{'price1':$("#price_100").val(), 'price2':$("#price_101").val(), 'field': $("input[name='field']:checked").val(), 'order':  $("input[name='order']:checked").val(), 'page':$("#page").val()})
	

    	$('a[href^="show.php"]').each(function(){    		
    		var oldUrl =$(this).attr("href"); 
            var newUrl = oldUrl.substring(0,15).concat("&price1="+$("#price_100").val()+"&price2="+($("#price_101").val())+"&field="+($("input[name='field']:checked").val())+"&order="+($("input[name='order']:checked").val()));
      		console.log(oldUrl.substring(0,15));
            $(this).attr("href", newUrl); 
    	});


	$("#price_50, #price_100, #price_101, #option1, #option2, #option3, #option4, #option5").change(function(){
	//	alert($(this).val());
		var form = $(document.createElement('form'));
    	$(form).attr("action", "/winery/load.php");
    	$(form).attr("method", "POST");
    	var price1,price2,field_val,order_val;
    	price1 = price2 = 0;
    	field_val = "country";
    	order_val = "a";
    	if($("#price_100").prop("checked"))
    	{
    		price1 = $("<input>").attr("type", "hidden").attr("name", "price1").val($("#price_100").val());	
    	}
    	if($("#price_101").prop("checked"))
    	{
    		price2 = $("<input>").attr("type", "hidden").attr("name", "price2").val($("#price_101").val());	
    	}
        field_val = $("input[name='field']:checked").val();
        order_val = $("input[name='order']:checked").val();

        field =  $("<input>").attr("type", "hidden").attr("name", "field").val(field_val);	
        order =  $("<input>").attr("type", "hidden").attr("name", "order").val(order_val);	
        var page = $("<input>").attr("type", "hidden").attr("name", "page").val($("#page").val());	
    	$(form).append($(price1));
    	$(form).append($(price2));
    	$(form).append($(field));
    	$(form).append($(order));
    	$(form).append($(page));
    	$(document.body).append($(form));
		$("#demo").load("load.php",{'price1':$(price1).val(), 'price2':$(price2).val(), 'field':$(field).val(), 'order':$(order).val(), 'page':$(page).val()})    	
    	$('a[href^="show.php"]').each(function(){    		
    		var oldUrl =$(this).attr("href"); 
            var newUrl =  oldUrl.substring(0,15).concat("&price1="+$("#price_100").val()+"&price2="+($("#price_101").val())+"&field="+($("input[name='field']:checked").val())+"&order="+($("input[name='order']:checked").val()));
            $(this).attr("href", newUrl); 
    	});



    //	$(form).submit();
	})

});
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

