@extends('admin.admin-master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Parking</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vehicules</a></li>
                        <li class="breadcrumb-item active">Liste</li>
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

                    <h4 class="card-title">Liste des véhicules du Park</h4>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead class="table-editable">
                            <tr>
                            <th style="font-weight: bold;">Marque</th>
                            <th class="bold-header">modele</th>
                            <th class="bold-header">Vehicule</th>
                            <th class="bold-header">Type</th>
                            <th class="bold-header">Gamme</th>
                            <th class="bold-header">Lieu d'affectation</th>
                            <th class="bold-header">Expiration Assurance</th>
                            <th class="bold-header">Expiration V. Technique</th>
                            <th class="bold-header">N. Immatriculation</th>
                            <th class="bold-header">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($voitures as $voiture)
                        <tr>
                            <td>{{ $voiture->marque }}</td>
                            <td>{{ $voiture->modele }}</td>
                            <td>{{ $voiture->nature_vehicule }}</td>
                            <td>{{ $voiture->type_vehicule }}</td>
                            <td>{{ $voiture->gamme }}</td>
                            <td>{{ $voiture->lieu_affectation }}</td>
                            <td>{{ $voiture->date_expiration_assurance }}</td>
                            <td>{{ $voiture->expiration_visite_technique }}</td>
                            <td>{{ $voiture->matricule }}</td>
                            <td>
                                <form action="{{ url('voitures/'.$voiture->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">Suppr</button> 
                                </form>
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