<!DOCTYPE html>
<html>
  <head>
    <title>Result</title>
    <style type="text/css"></style>
  </head>
  <body>
    <div class="counter">
      <p>
        Thanks for submitting this form! you have submitted this form <?= $counter ?> times now.
      </p>
    </div>
     <div>
      <h1>
        Submitted Information
      </h1>
        <form action="/survey/form" method="post">
      <p><label>Name:</label><?= $name ?></p>
      <p><label>Dojo Location:</label><?= $location ?></p>
      <p><label>Favorite Language:</label><?= $language ?></p>
      <p><label>Comments:</label><?= $comments ?></p>

      <input type="submit" value="Go Back">
   
  </body>
</html>