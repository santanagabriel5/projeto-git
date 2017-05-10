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
            <li>
              <a href="{{action('DisciplinaController@novo')}}"> Novo </a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('conteudo')
      <footer class="footer">
        <p>©AVA
    
      </footer>
    </div>
  </body>
</html>
