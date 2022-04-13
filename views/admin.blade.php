<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AdminBar</title>
</head>
<script>
  if (value = '2')
  
</script>
<body>
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
       <div class="col-lg-16">
           
        @if (count($users))
        
        <table class="table"> 
            <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Сообщение</th>
            <th scope="col">Комментарий</th>
            <th scope="col">Статус</th>
            <th scope="col">Дата создания</th>
            <th scope="col">Дата ответа</th>
            <th scope="col"></th>
          </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
               
                    
                <form action="{{route ('save', $user->id)}}" method="post">
                  @csrf
                <tr>
                    <th scope = "row">{{$user->id}}</th>
                    <td name='name'>{{$user->name}}</td>
                    <td name='email'>{{$user->email}}</td>
                    <td>{{$user->message}}</td>
                    @if ($user->status=='resolved')
                    <td><textarea type='text' name="comment" id="comment" cols="30" rows="2" disabled readonly>{{$user->comment}}</textarea></td>
                    <td>
                      <span name="status" class="badge bg-success">{{$user->status}}</span>
                    </td>
                    @else
                      <td><textarea type='text' name="comment" id="comment" cols="30" rows="2" ></textarea></td>
                      <td>
                        <span name="status" class="badge bg-secondary">{{$user->status}}</span>
                      </td>
                    @endif
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td >
                      
                      <button  type="submit" class="btn btn-dark">Ответить</button> 
                    
                    </td>
                    
                </tr>
              </form>
                @endforeach
            </tbody>
       
            @endif
            
    </div>
</div>
</body>
</html>