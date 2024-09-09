@extends('admin.admin-master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Nouveau Chauffeur</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Park</a></li>
                            <li class="breadcrumb-item active">Chauffeurs</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Ajouter Chauffeur</h4>
                        <form action="{{ route('store_chauffeur') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                    <div class="mb-4">
                                        <label class="form-label" for="matricule_chauf">Matricule Chauffeur</label>
                                        <input id="matricule_chauf" type="text" class="form-control input-mask" name="matricule_chauf" required value="{{ $newMatricule }}" readonly>
                                    </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="name_chauf">Prenom & Nom</label>
                                            <input id="name_chauf" type="text" class="form-control input-mask" name="name_chauf" required >                                            
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="tel_chauf">Numero Tel</label>
                                            <input id="tel_chauf" type="text" class="form-control input-mask" name="tel_chauf" required >                                            
                                        </div>
                                        <div class="mb-0">
                                            <label class="form-label" for="date_chauf">Date de prise de fonction:</label>
                                            <input id="date_chauf" type="date" class="form-control input-mask" name="date_chauf" required >                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">
                                        <div class="mb-4">
                                            <label class="form-label" for="cni_chauf">CNI:</label>
                                            <input id="cni_chauf" type="text" class="form-control input-mask" name="cni_chauf" required >                                            
                                        </div>
                                        <div class="mb-4">
                                            <label>Type de Permis:</label>
                                                <select name="type_permis" class="form-control" required>
                                                    <option>Permis A</option>
                                                    <option>Permis A'</option>
                                                    <option>Permis B</option>
                                                    <option>Permis C</option>
                                                    <option>Permis D</option>
                                                    <option>Permis E</option>
                                                    <option>Permis F</option>
                                                </select>
                                        </div>

                                        <label>Status Chauffeur:</label>
                                                <select name="status_chauf" id="status_chauf" class="form-control" required>
                                                    <option value="interne">Chauffeur interne</option>
                                                    <option value="externe">Chauffeur externe</option>
                                                </select>
                                        </div>
                                         <br>
                                        
                                        <div class="mb-4" id="societe_prestataire_group" style="display:none;">
                                            <label for="nom_societe">Nom de la société prestataire:</label>
                                            <input type="text" name="nom_societe" class="form-control" id="nom_societe" placeholder="Entrez le nom de la société prestataire">
                                        </div>

                                        </div>
<br>
                                        <div class="text-end">
                                        <button type="submit" class="btn btn-success "> Ajouter  </button>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



</div>
<!-- end main content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Initial check on page load
        toggleSocieteField();

        // Listen for changes on the status_chauf field
        $('#status_chauf').change(function() {
            toggleSocieteField();
        });

        // Function to show/hide the Nom de la société prestataire field
        function toggleSocieteField() {
            var status = $('#status_chauf').val();
            if (status === 'externe') {
                $('#societe_prestataire_group').show(); // Show the field
                $('#nom_societe').attr('required', true); // Make it required
            } else {
                $('#societe_prestataire_group').hide(); // Hide the field
                $('#nom_societe').removeAttr('required'); // Remove required attribute
            }
        }
    });
</script>


@endsection