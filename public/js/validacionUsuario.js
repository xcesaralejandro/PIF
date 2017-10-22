$(function(){
//VALIDAR CORREO
$('#us_email').keyup(function(){
		var _this = $('#us_email');
		var _email = $('#us_email').val();
 
		var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		var valid = re.test(_email);
 
		if(valid){
			_this.attr('style', 'background:white');
		} else {
			_this.attr('style', 'border-color: #FF4A4A');
		}
	});
//VALIDAR CONTRASEÑA
$('#password1').keyup(function(){
		var _this = $('#password1');
		var password1 = $('#password1').val();
                _this.attr('style', 'background:white');
		if(pass_1.charAt(0) == ' '){
			_this.attr('style', 'border-color: #FF4A4A');
		}
 
		if(_this.val() == ''){
			_this.attr('style','border-color: #FF4A4A');
		}
	});
 
	$('#password2').keyup(function(){
		var password1 = $('#password1').val();
		var password2 = $('#password2').val();
		var _this = $('#password2');
                _this.attr('style', 'background:white');
		if(password1 != password2 && password2 != ''){
			_this.attr('style',  'border-color: #FF4A4A');
		}
	});

});