$("#selectEmpleado").on('change',function(event){
  var empleado=$("#selectEmpleado").find('option:selected');
  var codigo=empleado.val();
  $("#cod").val(codigo);
});
