<!doctype html>
<html lang="en">
  <head>
    <title>Student Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="jumbotron">
        <h1 class="display-3">Student Data</h1>
        <table>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th><strong>Student Name</strong></th>
                        <th><strong>Father Name</strong></th>
                        <th><strong>Mother Name</strong></th>
                        <th><strong>Date OF Birth</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Student Number</strong></th>
                        <th><strong>Parent Number</strong></th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset($Forms)
                    @foreach($Forms as $form)
                    <tr>
                        <td>{{$form->student_name}}</td>
                        <td>{{$form->father_name}}</td>
                        <td>{{$form->mother_name}}</td>
                        <td>{{$form->DOB}}</td>
                        <td>{{$form->email}}</td>
                        <td>{{$form->s_number}}</td>
                        <td>{{$form->p_number}}</td>
                        <td><a href="{{route('form.edit',$form->id)}}">Edit</a></td>   
                    </tr>
                    @endforeach
                    @endisset
                       
                    </tbody>
            </table>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>