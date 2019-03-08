<!DOCTYPE html>

<html lang="en">
<head>

<!-- Meta Open -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-signin-client_id" content="#">
<!-- Meta Close -->    

<!-- Link CSS Bootstrap Open -->    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" >
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Link CSS Bootstrap Close -->
    
<title>
FORUM PROJECT   
</title>
</head>

<body class="bg-flatgreen">
    
<!-- HEADER Open -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand mr-auto" href="#">
                        <strong>
                            <span class="font-flatgreen"> Forum Project </span>
                        </strong>
                </a>
                    <div class="btn btn-outline-flatgreen my-1 my-sm-0 ml-auto dropdown">
                        <a href="/login">
                            <button class="btn outline-flatgreen  bg-flatgreen font-flatlight">
                                <strong>Masuk</strong>
                            </button> 
                        </a>
                    </div>
            </nav>
		</header>
<!-- HEADER Close -->
            
<!-- Start Banner Area -->
		<section class="mt-5">
			<div class="container">
                <div class="jumbotron jumbotron-full bg-flatgreen">
                    <div class="row justify-content-md-center">
                        <div class="col-12 mt-3 text-center">
                            <p class="text-center mt-5 font-flatlight display-3 mb-1">
                                <strong>Forum Project</strong>
                            </p>
                            <h5 class="mb-5 font-flatlight">
                                <small>
                                    Copyright &copy; ForumProject - All Rights Reserved.
                                </small>
                            </h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftar">
                                Daftar Sekarang
                            </button>
<!-- Modal Daftar Open -->
                            <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="/tambah" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="daftar">Daftar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                                </div>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Jabatan" name="jbtn">
                                                  </div>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Umur" name="umur">
                                                  </div>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Alamat" name="almt">
                                                  </div>
                                            </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                              </div>
                                          </form>
                                    </div>
                                  </div>
                                </div>
<!-- Modal Daftar Close -->
                        </div>
                    </div>
                </div>
            </div>
		</section>
<!-- End Banner Area -->   
        <footer>
<!-- JS -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- JS -->
        </footer>
</body>
</html>