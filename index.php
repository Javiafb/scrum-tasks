<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrum tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">TASKS</h1>
        <form id="create-form" class="mt-4">
            <div class="form-group">
                <input type="text" id="title" class="form-control" placeholder="Título" required>
            </div>
            <div class="form-group">
                <textarea id="description" class="form-control" placeholder="Descripción" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Tarea</button>
        </form>
        <div id="tasks" class="row mt-4">
            <?php include 'mostrar.php'; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".delete-btn", function() {
                var task_id = $(this).data("task-id");
                var confirmDelete = confirm("¿Estás seguro de que deseas eliminar esta tarea?");
                if (confirmDelete) {
                    $.post("eliminar.php", {
                        task_id: task_id
                    }, function(data) {
                        if (data.trim() === "success") {
                            location.reload();
                        } else {
                            alert("Error al eliminar la tarea.");
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>