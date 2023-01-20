<!doctype html>
<html lang="en">
  <head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">छैन इन्टरnational college</h1>
            <p class="lead">Student Registration form</p>
            <hr class="my-2">
            <p>* all are mendatory</p>
            <form action="{{route('form.store')}}" method="post">
                @csrf
             <div class="form-group">
               <label for="student_name">Student Name:*</label>
               <input type="text" name="student_name" id="sname" class="form-control" placeholder="Enter Full Name...." aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="father_name">Father Name:*</label>
               <input type="text" name="father_name" id="fname" class="form-control" placeholder="Enter Father Full Name........" aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="mother_name">Mother name:*</label>
               <input type="text" name="mother_name" id="mname" class="form-control" placeholder="Enter Mother name....." aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="dob">Date of birth:*</label>
               <input type="date" name="DOB" id="dob" class="form-control" placeholder="Enter Date of birth" aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email ....." aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="s_number">Phone number:*</label>
               <input type="number" name="s_number" id="number" class="form-control" placeholder="Enter Your number" aria-describedby="helpId">
             </div>
             <div class="form-group">
               <label for="p_number">Parent Number:</label>
               <input type="number" name="p_number" id="pnumber" class="form-control" placeholder="Enter Your parent phone number" aria-describedby="helpId">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             </div>
            </form>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>