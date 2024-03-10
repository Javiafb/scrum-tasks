$(document).ready(function () {
  // Evento para crear una nueva tarea
  $("#create-form").submit(function (e) {
    e.preventDefault();
    var title = $("#title").val();
    var description = $("#description").val();
    $.post(
      "crear.php",
      { title: title, description: description },
      function (data) {
        $("#tasks").append(data);
        $("#title").val("");
        $("#description").val("");
      }
    );
  });
});
