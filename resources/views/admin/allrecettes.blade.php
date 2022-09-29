<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cuisine Manel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<style>
    body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}
header{
  position: fixed;
  background: #22242A;
  padding: 20px;
  width: 100%;
  height: 70px;
}
.left_area h3{
  color: #fff;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  margin-top:-10px;
  font-weight: 900;
}
.left_area span{
  color: #19B3D3;
}
#logout_btn{
  padding: 5px;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  transition: 0.5s;
  transition-property: background;
}
#logout_btn:hover{
  background: #0B87A6;
}
.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}
.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}
.sidebar h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}
.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}
.sidebar a:hover{
  background: #19B3D3;
}
.sidebar i{
  padding-right: 10px;
}
label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 300px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}
label #sidebar_btn:hover{
  color: #19B3D3;
}
#check:checked ~ .sidebar{
  left: -190px;
}
#check:checked ~ .sidebar a span{
  display: none;
}
#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}
.content{
  margin-left: 280px;
  margin-right: 20px;
  margin-top:30px;
  background-position: center;
  background-size: cover;
  height: 100vh;
  width: 70%;
  transition: 0.5s;
}
#check:checked ~ .content{
  margin-left: 60px;
}
#check{
  display: none;
}
      
</style>  
</head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
      <h3>Cuisine <span>Manel</span></h3>
          </div>
      <div class="right_area">
      <a href="{{url('decocnx')}}"><button class="btn btn-primary" id="logout_btn">Logout</button></a>&nbsp;
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
      <img src="/images/{{$data->photo}}" class="profile_image" alt="">
        <h4>{{$data->nom}}</h4>
      </center>
      <a href="/allusers"><i class="fas fa-edit"></i><span>Gestion Users</span></a>
      <a href="/allrecettes"><i class="fas fa-edit"></i><span>Gestion Recettes</span></a>
      <a href="/ajoutadmin"><i class="fas fa-plus"></i><span>Add Admin</span></a>
      <a href="/addrecetteadmin"><i class="fas fa-plus"></i><span>Add Recette</span></a>
    </div>
    <!--sidebar end-->
<br><br><br><br><br>
<center>
        <h2><i class="fa fa-history"></i> Tous Les <strong style='color:red'>Recettes</strong></h2>
      </center>
    <div class="content">
    @foreach($recette as $recettes)
    <div style="border-radius:5px;border:#000000 1px solid;">
    <div class="text text-center">
    <h3>&nbsp;<img src="/images/{{$recettes->photo_recette}}" style="width:160px;height:120px;border-radius:20px;"></h3>
</div>
<table class="table" style='margin-left:5%;'>
<thead>
    <tr>
      <th scope="col">Difficulté</th>
      <th scope="col">Préparation</th>
      <th scope="col">Cuisson</th>
      <th scope="col">Temps Total</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="/images/diff.png" width="35px" height="40px"> {{$recettes->difficulté}}</th>
      <td><img src="/images/preparation.png" width="35px" height="40px"><span class="fs-6 badge rounded-pill text-bg-danger">{{$recettes->preparation}} min</span></td>
      <td><img src="/images/cuisson.png" width="35px" height="40px"><span class="fs-6 badge rounded-pill text-bg-danger">{{$recettes->cuisson}} min</span></td>
      <td><img src="/images/time.png" width="35px" height="40px"><span class="fs-6 badge rounded-pill text-bg-danger">{{$recettes->preparation + $recettes->cuisson}} min</span></td>
      <td><img src="/images/categorie.png" width="35px" height="40px"><span class="fs-6 badge rounded-pill text-bg-danger">{{$recettes->categorie}}</span></td>
      <td><a href="/editrecette/{{$recettes->id}}"><button class="btn btn-success">Modify</button></a></td>
      <td><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
        <!--modal supprimer -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Vous voulez vraiment supprimer cette recette?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="supprimer{{$recettes->id}}" class="btn btn-danger">Supprimer</a>
            </div>
            </div>
        </div>
        </div>
    
    </td>
    </tr>
    </tbody>
    </table>
<br>
</div>
<br>
@endforeach
<br>
    </div>

  </body>
</html>