@extends('admin.admin-master')
@section('admin')



<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Chauffeurs</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"> Chauffeurs</a></li>
                        <li class="breadcrumb-item active">Parking</li>
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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Base de données de nos chauffeurs</h4>
                    <a href="{{ url('/chauffeur_create') }}" class="btn btn-outline-primary btn-sm add" title="Ajouter">
                        <i class="fas fa-plus"></i> Ajouter
                    </a>
                </div>
                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead class="table-editable">
                            <tr>
                            <th style="font-weight: bold;">Matricule</th>
                            <th class="bold-header">Prenom & Nom</th>
                            <th class="bold-header">Telephone</th>
                            <th class="bold-header">Type Permis</th>
                            <th class="bold-header">Statut</th>
                            <th class="bold-header">Date Fonction</th>
                            <th class="bold-header">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($chauffeurs as $chauffeur)
                        <tr>
                            <td>{{ $chauffeur->matricule_chauf }}</td>
                            <td>{{ $chauffeur->name_chauf }}</td>
                            <td>{{ $chauffeur->tel_chauf }}</td>
                            <td>{{ $chauffeur->type_permis }}</td>
                            <td>{{ $chauffeur->status_chauf }}</td>
                            <td>{{ $chauffeur->date_chauf }}</td>
                           
                            
                            <td>
                                <form action="{{ url('chauffeur/delete/'.$chauffeur->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ url('chauffeur/edit', $chauffeur->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur ?')">Suppr</button> 
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


@endsection