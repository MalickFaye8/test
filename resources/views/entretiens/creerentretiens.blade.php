@extends('admin.admin-master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Entretien Vehicule</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Automobile</a></li>
                            <li class="breadcrumb-item active">Entretien</li>
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
                        <h4 class="card-title mb-4">Nouvel entretien</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                    <div class="mb-4">
                                        <label class="form-label" for="matricule">Véhicule</label>
                                        <select id="matricule" name="matricule" class="form-control" required>
                                            <option value="" disabled selected>Choisissez un véhicule</option>
                                            @foreach($voitures as $voiture)
                                                <option value="{{ $voiture->marque }}">{{ $voiture->marque }} - {{ $voiture->modele }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="name_chauf_ent">Chauffeur</label>
                                            <select id="name_chauf_ent" name="name_chauf_ent" class="form-control" required>
                                                <option value="" disabled selected>Choisissez un le chauffeur</option>
                                                @foreach($chauffeurs as $chauffeur)
                                                    <option value="{{ $chauffeur->name_chauf }}">{{ $chauffeur->name_chauf }}</option>
                                                @endforeach
                                            </select>                                            
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="tel_chauffeur">Garage d'entretien</label>
                                            <input id="tel_chauffeur" type="text" class="form-control input-mask" name="tel_chauffeur" required value="{{ old('tel_chauffeur') }}">                                            
                                        </div>
                                        <div class="mb-0">
                                            <label class="form-label" for="date_entretien">Date d'entretien:</label>
                                            <input id="date_entretien" type="date" class="form-control input-mask" name="date_entretien" required >                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">
                                        <div class="mb-4">
                                            <label class="form-label" for="description_entretien">Description:</label>
                                            <input id="description_entretien" type="textarea" class="form-control input-mask" name="description_entretien" required >                                            
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="montant_entretien">Montant</label>
                                            <input id="montant_entretien"type="text" class="form-control input-mask" name="montant_entretien" required>
                                          
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="justif_entretien">Justificatif</label>
                                            <input id="justif_entretien"type="file" class="form-control input-mask" name="justif_entretien" required>
                                            

                                        </div>
<br>
                                        <div class="text-end">
                                        <button type="submit" class="btn btn-success "> Créer  </button>

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

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Upcube.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end main content-->


@endsection