<html>
<head>
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/custom.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <title>Disciplinas</title>
</head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/disciplina">
              Disciplina
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="{{action('DisciplinaController@lista')}}">Disciplinas</a>
            </li>
          </ul>
        </div>
      </nav>
      <a href="{{action('DisciplinaController@lista')}}"><h1>Ver disciplinas</h1></a>
      <footer class="footer">
        <p>©AVA
        <a href="{{action('HomeController@index')}}"> Voltar </a></p>
      </footer>
    </div>
  </body>
</html>
