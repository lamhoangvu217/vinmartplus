<!DOCTYPE html>
<html>
 <head>
  <title>Hỗ trợ</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    padding: 20px 30px;
    border-radius: 5px;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h3>Bạn cần chúng tôi hỗ trợ gì?</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group mb-2">
     <label class="mb-1" for="name">Tên của bạn</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group mb-2">
     <label class="mb-1" for="email">Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group mb-3">
     <label class="mb-1" for="message">Vấn đề bạn cần hỗ trợ</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group mb-2">
     <input type="submit" name="send" class="btn btn-warning" value="Gửi cho chúng tôi" />
    </div>
   </form>
   
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>