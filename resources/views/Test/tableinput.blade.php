<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
  body {
    background-color: #f8f9fa;
  }
  
  .form-group {
    margin-bottom: 1rem;
  }
  
  .form-check-input:checked + .form-check-label {
    font-weight: bold;
  }
  
  .table thead th {
    background-color: #343a40;
    color: #fff;
  }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center my-5">Generate CRUD</h1>

                <form action="/generate-crud" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="table-name">Table Name:</label>
                        <input type="text" class="form-control" id="table-name" name="table_name">
                    </div>

                    <div class="form-group">
                        <label for="field-list">Field List:</label>
                        <textarea class="form-control" id="field-list" name="field_list"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="model-name">Model Name:</label>
                        <input type="text" class="form-control" id="model-name" name="model_name">
                    </div>

                    <div class="form-group">
                        <label for="controller-name">Controller Name:</label>
                        <input type="text" class="form-control" id="controller-name" name="controller_name">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="use-soft-deletes" name="use_soft_deletes" value="1">
                        <label class="form-check-label" for="use-soft-deletes">Use Soft Deletes</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Generate CRUD</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
