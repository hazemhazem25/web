$(function(){

			setInterval(function(){
				var min=parseFloat($('#value-lower').text());
				var max=parseFloat($('#value-upper').text());
				$(".block2").each(function(){
					var prix=parseFloat($(this).find("prix").text());
					if(prix>=min && prix<=max){
						$(this).parent().show();
					}
					else{
						$(this).parent().hide();
					}
					
				})				
			},100)
		})