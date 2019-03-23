$(".numeric").numeric();
	$(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });
	$(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
	$(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });
    $(".decimal-2-places").numeric({ decimalPlaces: 2 });
	$("#remove").click(
		function(e)
		{
			e.preventDefault();
			$(".numeric,.integer,.positive,.positive-integer,.decimal-2-places").removeNumeric();
		}
	);
	
	//$(".alphaonly").alphaonly(false, function() { alert("Integers only"); this.value = ""; this.focus(); });
	
	$(function() 
	   {
			$('.alpha-only').bind('keyup input',function()
			{       
				if (this.value.match(/[^a-zA-Z áéíóúÁÉÍÓÚüÜ]/g)) 
				{
					this.value = this.value.replace(/[^a-zA-Z áéíóúÁÉÍÓÚüÜ]/g, '');
				}
			});
		});