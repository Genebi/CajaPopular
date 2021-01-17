$(function(){
	$('#form-contact').validate({
		rules: {
			'nombre': 'required',
			'apellido': 'required',
			'telefono': { required: true, number: true, minlength: 10, maxlength: 10 },
			'email': { required: true, email: true },
			'mensaje': 'required'
		},
		messages: {
			'nombre': 'Ingrese su nombre.',
			'apellido': 'Debe ingresar su apellido.',
			'telefono': { required: 'Ingrese su número de teléfono de 10 dígitos.', number: 'Ingrese solo números.', minlength: 'Ingrese 10 dígitos.', maxlength: 'Ingrese solo 10 dígitos.'},
			'email': { required: 'Ingrese su correo electrónico.', email: 'Ingrese su correo electrónico con el formato: ejemplo@dominio.com' },
			'mensaje': 'Introduzca su mensaje.'
		}
	});
});