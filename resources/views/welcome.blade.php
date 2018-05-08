<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Alpha Blog - Bootstrap Theme</title>

</head>
<body>
<div class="links">
<div class="header">
  <div class="content">
    <div class="title m-b-md">
        <a href="{{ url('/') }}">Development Hill</a>
    </div>

    <div class="links">
        <a href="{{ url('/resume') }}">Resume</a>
        <a href="{{ url('/aboutme') }}">About Me</a>
        <a href="https://github.com/MarcosChabolla">GitHub</a>
    </div>
  </div>
</div>
</div>

<div class="row row-centered">
  <div class="col-sm-7 mx-auto">
        <div class="card">
          <h2><a href="{{ url('/interviewQuestions') }}">20 Questions to Practice for a Tech Interview</a></h2>
          <h5> May 6, 2018</h5>
           <img src="images/questions.jpg" alt="questions" height="400" width="550" />

          <!-- <p>Some text..</p> -->
        </div>
     
   <!--  <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div> -->
    </div> 
 


  <!-- <div class="col-sm-4 mx-auto">
    <div class="card">
      <h2>Marcos Chabolla</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Welcome to my blog! I'll be posting all of my programming related projects and relevant articles on this page./p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div> -->
</div>

<!-- <div class="footer">
  <h2>Footer</h2>
  this is content

</div> -->

</body>
</html>