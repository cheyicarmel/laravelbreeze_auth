    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
            body {
                font-family: sans-serif;
                font-size: 12px;
            }
            h2 {
                text-align: center;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
            }
            th, td {
                border: 1px solid #333;
                padding: 6px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <div class="col s12">
            <h2 class="my-5">Liste des étudiants</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Filière</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide = 1;
                    @endphp
                    @foreach($etud as $etudiant)
                    <tr>
                        <td>{{ $ide }}</td>
                        <td>{{ $etudiant -> nom }}</td>
                        <td>{{ $etudiant -> prenom }}</td>
                        <td>{{ $etudiant -> filiere }}</td>
                    </tr>
                    @php
                        $ide += 1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    </html>