<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="vh-100 gradient-custom" style="background:linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <p class="h1 text-center mt-3 mb-4 pb-3 text-white">All User Todo-List <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" width="40"></p>
          <div class="form-outline form-white mb-4 mt-3 text-center">
            <a href="admin.php" class="btn btn-secondary btn-lg" id="back">Back</a>
            <button type="button" class="btn btn-warning btn-lg" id="logout">Log Out</button>
          </div>
          <hr style="border-top:1px;" />
          <div class="input-group col-md-12 px-3">
            <table class="table table-hover text-white">
              <thead>
                <tr>
                  <th>User Name</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Tasks</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $user) : ?>
                  <tr>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['f_name'] ?></td>
                    <td><?= $user['l_name'] ?></td>
                    <td><button type="button" class="btn btn-success showUserToDo" data-user-id="<?= $user['id'] ?>">View</button></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ahmadModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="userTable.js"></script>
</body>