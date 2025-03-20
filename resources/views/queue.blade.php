<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{ route('send.email.queue') }}" method="POST">
            @csrf
            <h1>Send email with Queue Laravel</h1>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Body</label>
                <input type="text" name="body" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group mt-3 text-center">
                <button type="submit" class="btn btn-primary">Send Email</button>
            </div>
          </form>
    </div>
</body>
</html>