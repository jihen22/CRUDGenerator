<!DOCTYPE html>
<html>

@include('admin.partials.header')

<style>
  table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
  }

  thead {
    background-color: #f7f7f7;
    font-weight: bold;
  }

  th,
  td {
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
    text-align: center;
  }

  td:first-child,
  th:first-child {
    padding-left: 0;
  }

  td:last-child,
  th:last-child {
    padding-right: 0;
  }

  tbody tr:hover {
    background-color: #f5f5f5;
  }

  tbody tr:nth-child(even) {
    background-color: #fafafa;
  }

  tfoot {
    font-weight: bold;
    border-top: 2px solid #ddd;
  }

  tfoot td {
    border-top: none;
  }

  /* Style the primary button */
  .btn-primary {
    background-color: #17a2b8;
    border-color: #17a2b8;
  }

  /* Add some margin to the delete button */
  .delete-crud {
    margin-left: 1rem;
  }

  .content {
    max-height: 500px;
    padding: 20px;
  }

  .content-header {
    margin-bottom: 20px;
  }

  .content-header h1 {
    padding: 42px 57px;
    display: inline-block;
  }

  .btn-success {
    margin-bottom: 10px;
  }

  .btn-primary {
    margin-top: 10px;
  }
</style>

<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
  <div id="app" class="wrapper">

    @include('admin.partials.topbar')
    <div id="layoutSidenav">
      @include('admin.partials.sidebar')
      <div id="layoutSidenav_content">

        <main>
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tables
          </div>

          <div class="content-warper" id="monDiv" style="">
            <div class="content-header">
              <div class="container-fluid p-0">
                <div class="row mb-2">
                  <div class="col-sm-6">

                  </div>
                </div>
              </div>
            </div>

            <section class="content">
              <div class="container-fluide p-0">
                <div class="card card-default">
                  <div class="card-body">
                    <a class="btn btn-info text-bold rounded-0" id="createCrudTable">
                      Create CRUD Table
                    </a>
                    <br>
                    <br>
                </div>
              </div>
            </section>

            @php
            $tables = DB::select("SHOW TABLES WHERE Tables_in_" . env('DB_DATABASE') . " NOT IN ('password_resets', 'personal_access_tokens', 'fieldslist4', 'failed_jobs', 'fieldslist3', 'myresources', 'migrations', 'project_settings', 'tableslist')");
            @endphp

            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Table</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tables as $table)
                  <tr>
                    <td>
                      <a href="{{ url('/table/' . $table->{'Tables_in_' . env('DB_DATABASE')} ) }}">
                        {{ $table->{'Tables_in_' . env('DB_DATABASE')} }}
                    </a>
                </td>
                <td>
                    @php
                        $tableName = $table->{'Tables_in_' . env('DB_DATABASE')};
                        $tablesList = DB::table('tableslist')->where('name', $tableName)->first();
                        $viewName = ($tablesList) ? $tablesList->view_name : null;
                        $controllerName = ($tablesList) ? $tablesList->controller_name : null;

                    @endphp

                    <a href="{{ url('/'. $controllerName . '/' . $tableName . '/' . $viewName) }}" class="btn btn-info">
                        <i class="fas fa-eye"></i> See
                      </a>
                      <a href="{{ route('telecharger_controller', ['table' => $tableName]) }}" class="btn btn-secondary" download>
                        <i class="fas fa-download"></i> Download
                      </a>
                      <a href="{{ route('supprimer_table', ['table' => $tableName]) }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette table?')">
                        <i class="fas fa-trash"></i> Delete
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Modal -->
            <div id="preview-modal" tabindex="-1" class="modal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <header class="modal-header">
                    <h5 class="modal-title">Preview login credentials</h5>
                  </header>
                  <div class="modal-body">
                    <div id="previewModal___BV_modal_body_" class="modal-body">
                      <div data-v-6e79ee7f="" class="row mb-3">
                        <div data-v-6e79ee7f="" class="col">
                          <div data-v-6e79ee7f="" class="alert alert-danger">
                            <i data-v-6e79ee7f="" class="fas fa-exclamation-triangle mr-1"></i>
                            Please be aware that file uploads are disabled for project preview.
                          </div>
                          <table data-v-6e79ee7f="">
                            <tr data-v-6e79ee7f="">
                              <td data-v-6e79ee7f="" class="text-right">Username:</td>
                              <td data-v-6e79ee7f=""><code data-v-6e79ee7f="">admin@admin.com</code></td>
                            </tr>
                            <tr data-v-6e79ee7f="">
                              <td data-v-6e79ee7f="" class="text-right">Password:</td>
                              <td data-v-6e79ee7f=""><code data-v-6e79ee7f="">password</code></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <footer class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Continue</button>
                  </footer>
                </div>
              </div>
            </div>


              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <script>
    document.getElementById("createCrudTable").addEventListener("click", function() {
      window.location.href = "/CRUD";
      console.log("Creating CRUD table...");
    });
  </script>

</body>

</html>
