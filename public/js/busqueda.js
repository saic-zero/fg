$("#selectEmpleado").on('change',function(event){
  var empleado=$("#selectEmpleado").find('option:selected');
  var codigo=empleado.val();
  $("#cod").val(codigo);
});

// funcion para alertas
document.querySelector('.warning.cancel button').onclick = function(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Si, deshabilitar!',
    cancelButtonText: "No, cancelar por favor!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      swal("Deshabilitado!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelado", "Your imaginary file is safe :)", "error");
    }
  });
};

$("#listaDeshabilitados").on('change',function(event){
  var aux=0;
  
});
