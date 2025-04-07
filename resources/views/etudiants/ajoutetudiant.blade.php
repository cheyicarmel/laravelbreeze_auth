<x-app-layout>
    <x-slot name="header">    
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!doctype html>
                    <html lang="fr">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>CRUD LARAVEL</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                    </head>
                    <body>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 my-4">

                                    @if(session("statut")){
                                        <div class="alert alert-sucess">
                                            {{ session('statut') }}
                                        </div>
                                    } @endif

                                    <h2>Ajouter nouvel étudiant</h2> <br>
                                    <form method="POST" action="/ajoutetu"> 
                                        @csrf 
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="prenom" class="form-label">Prenom</label>
                                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="filiere" class="form-label">Filière</label>
                                            <input type="text" class="form-control" id="filiere" name="filiere" required>
                                        </div>
                                        <button type="submit" class="btn btn-warning">Ajouter</button> <br> <br> 
                                        <a href="/dashboard" class="btn btn-secondary">Voir liste des étudiants</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>