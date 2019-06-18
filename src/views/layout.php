<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Mon application</title>
   <link rel="stylesheet" 
         href="yarn-modules/bootstrap/dist/css/bootstrap.min.css">
   <script src="yarn-modules/jquery/dist/jquery.min.js"></script>
   <script src="yarn-modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">
   <header class="card-header">
      <h1>Mon Aplication</h1>
   </header>
   <div class="row justify-content-center">
      <div class="col-md-9">
         <?php require getView($page);?>
      </div>
   </div>
   
</body>
</html>