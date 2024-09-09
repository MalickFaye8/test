@extends('admin.admin-master')
@section('admin')
<style>
        .btn-assign {
            background-color: #fd6c9e; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-assign i {
            margin-right: 8px;
        }
        .chauffeur-list {
            display: none; /* Hidden by default */
            margin-top: 10px;
            padding: 0;
            list-style-type: none;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .chauffeur-list li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
        .chauffeur-list li:last-child {
            border-bottom: none;
        }
    </style>
<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Affectation de Vehicules</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vehicules</a></li>
                        <li class="breadcrumb-item active">Affectation</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste des véhicules à affecter</h4>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead class="table-editable">
                            <tr>
                            <th style="font-weight: bold;">Marque</th>
                            <th class="bold-header">Matricule</th>
                            <th class="bold-header">Carburant</th>
                            <th class="bold-header">Type</th>
                            <th class="bold-header">Assurance</th>
                            
                            <th class="bold-header">Kilométrage</th>
                           
                            <th class="bold-header">Action</th>
                        </tr>

                    </thead> 
                    <tbody>
                        @foreach ($voitures as $voiture)
                        <tr>
                            <td>{{ $voiture->marque }}</td>
                            <td>{{ $voiture->matricule }}</td>
                            <td>{{ $voiture->carburant }}</td>
                            <td>{{ $voiture->type }}</td>
                            <td>{{ $voiture->assurances }}</td>
                            
                            <td>{{ $voiture->kilometrage }}</td>
                           
                            <td>
                                <button class="btn-assign" onclick="toggleChauffeurList({{ $voiture->id }})">
                                    <i class="fas fa-tasks"></i> Affectation
                                </button>
                                <ul class="chauffeur-list" id="chauffeur-list-{{ $voiture->id }}">
                                    <li>Jean Patrick</li>
                                    <li>Joseph Olivier</li>
                                    <li>Alpha Oumar</li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
</div> <!-- container-fluid -->
</div>


@endsection

<style>
    /* Ajoutez votre style CSS personnalisé ici */
    .btn-edit {
        background-color: #4ac1f0; /* Couleur bleue plus foncée */
        color: #fff; /* Texte blanc */
    }

    .btn-edit:hover {
        background-color: #204d74; /* Couleur bleue plus foncée au survol */
    }

    .bold-header {
    font-weight: bold;
}

.table-editable thead th {
        background-color: #fd6c9e;
        color: white; /* Pour s'assurer que le texte est lisible */
    }
</style>
<style>
        .btn-assign {
            background-color: #fd6c9e; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }
        .btn-assign i {
            margin-right: 8px;
        }
    </style>
    <script>
        function toggleChauffeurList(id) {
            var list = document.getElementById('chauffeur-list-' + id);
            if (list.style.display === 'none' || list.style.display === '') {
                list.style.display = 'block';
            } else {
                list.style.display = 'none';
            }
        }
    </script>