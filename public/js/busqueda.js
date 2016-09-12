$("#selectEmpleado").on('change',function(event){
  var empleado=$("#selectEmpleado").find('option:selected');
  var codigo=empleado.val();
  $("#cod").val(codigo);
});

$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
});
