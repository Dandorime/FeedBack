<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
   
<style>

</style>
</head>
<body>
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="{{route('feedback')}}">FeedBack</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('login')}}">Admin</a>
                    </li>
                </div>
            </div>
          </nav>
        <div class="create-post">
            <form action="/send" method="post">
                @csrf
                <div class="row col-lg-6">
                    <h5>FeedBack form</h5>
                    <div class="input-group">
                        
                        <div class="col-7 mb-3">
                            <input type="text" name="name" class="form-control md-3" placeholder="Name" required>
                        </div>
                        <div class="col-7 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Name@example.com" required>
                        </div>
                        <div class="col-7 mb-3">
                            <textarea type="text" name="message" class="form-control"  placeholder="Message" required></textarea>
                        </div>
                        <div class="col-7 input-group-checkbox">
                            <input type="checkbox" name="status" value="active" class="form-checkbox" required>
                            <label for="checkbox">Согласие на обработку данных</label>
                        </div>
                        <div class="col-7 input-group-append ">
                           <button class="btn btn-dark" type="submit">Send</button>
                        </div>
                       
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>