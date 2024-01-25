<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <title>{{ 'Selamat Datang ' }} </title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</head> 
 
<body> 
    <div class="gradasi-container">
    <div class="container col-xl-10 col-xx1-8 px-4 py-5"> 
        @if (isset($error)) 
            <div class="row"> 
                <div class="alert alert-danger" role="alert"> 
                    {{ $error }} 
                </div> 
            </div> 
        @endif 
        <div class="row align-items-center g-1g-5 py-80"> 
            <div class="text-center text-1g-start "> 
                <h1 class="display-4 fw-bold 1h-1 mb-3">DAFTAR DATA KEPEGAWAIAN</h1> 
            </div> 
            <div class="col-md-10 mx-auto col-lg-5"> 
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/login"> 
                    @csrf 
                    <div class="form-floating mb-3"> 
                        <input name="user" type="text" class="form-control" id="user" placeholder="id"> 
                        <label for="user">User</label> 
                    </div> 
                    <div class="form-floating mb-3"> 
                        <input name="password" type="password" class="form-control" id="password" 
                            placeholder="password"> 
                        <label for="password">Password</label> 
                    </div>
                    <a class="w-100 btn btn-lg btn-primary" type="submit" href='/main'>Sign In</a>
                </form> 
            </div> 
        </div> 
    </div> 
</div>
</body> 
<style>
    .gradasi-container {
  background: linear-gradient(to top, white,white); /* Ganti warna sesuai kebutuhan */
  padding: 20px; /* Sesuaikan sesuai kebutuhan */
}
</style>
</html> 