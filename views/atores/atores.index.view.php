<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atores</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <h1>Atores</h1>
    <a class="btn btn-dark" href="atores/create" role="button">Inserir</a>
    <ul class="list-group mt-4">
      <?php
        foreach($atores as $ator) {
          ?>
          <li class="list-group-item">
            <a href="<?php echo route('atores/'.$ator->id);?>"><?php echo $ator->nome; ?></a>
            <form class="m-1 form-inline float-right" method="POST" action="<?php echo route('atores/'.$ator->id);?>">
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="m-1 btn btn-primary float-right" href="<?php echo route('atores/'.$ator->id.'/edit');?>" role="button">Editar</a>
          </li>
          <?php
        }
      ?>
    </ul>
    </div>
</body>
</html>