<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                @if(session("statut")){
                    <div class="alert alert-sucess">
                        {{ session("statut") }}
                    </div>
                } @endif
                <h2 class="my-5">Liste des étudiants</h2>
                <a href="/etudiant" class="btn btn-primary">Ajouter nouvel étudiant</a><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Filière</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp

                        @foreach( $etudiants as $etudiant )
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $etudiant -> nom }}</td>
                            <td>{{ $etudiant -> prenom }}</td>
                            <td>{{ $etudiant -> filiere }}</td>
                            <td>
                                <a href="/modifier/{{{ $etudiant -> id }}}" class="btn btn-info">Modifier</a>
                                <a href="/supprimer/{{{ $etudiant ->id }}}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @php
                            $ide += 1;
                        @endphp

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>