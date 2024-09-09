@extends('admin.admin-master')
@section('admin')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Voitures</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Voitures</a></li>
                                            <li class="breadcrumb-item active">Creation</li>
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
                                <form action="{{ url('voiture_store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <label>Type de Vehicule:</label>
                                                <select name="type_vehicule" id="type_vehicule" class="form-control" required>
                                                    <option>Voiture</option>
                                                    <option>Moto</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Modele:</label>
                                                <input type="text" name="modele" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Immatticulation:</label>
                                                <input type="text" name="matricule" class="form-control" required value="{{ old('matricule') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                <label>Gamme du Vehicule:</label>
                                                <select name="gamme" id="gamme" class="form-control" required>
                                                    <option value="" disabled selected>Choisissez une gamme</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Etat du véhicule:</label>
                                                <select name="etat_vehicule" class="form-control" required>
                                                    <option>Hors service</option>
                                                    <option>Mauvais</option>
                                                    <option>Bon</option>
                                                    <option>Très bon état</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Marque du véhicule:</label>
                                                <input type="text" name="marque" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date d'acquisition:</label>
                                                <input type="date" name="annee_acquisition" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Valeur Net Comptable:</label>
                                                <input type="text" name="valeur_net_comptable" class="form-control" required >
                                            </div>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date d'affectation du vehicule:</label>
                                                <input type="date" name="annee_affectation" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Lieu d'affectation du vehicule:</label>
                                                <input type="text" name="lieu_affectation" class="form-control" required >
                                            </div>
                                        </div>


                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nature du vehicule:</label>
                                                <select name="nature_vehicule" class="form-control">
                                                    <option>Vehicule de fonction</option>
                                                    <option>Vehicule de service</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Consommation Litres au 100km  mixte:</label>
                                                <input type="text" name="kilometrage" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Capacité de réservoir:</label>
                                                <input type="text" name="capacite_reservoir" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Source d'énergie:</label>
                                                <input type="text" name="sources_energie" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom assureur:</label>
                                                <input type="text" name="name_assureur" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date expiration de l'asssurance:</label>
                                                <input type="date" name="date_expiration_assurance" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date expiration visite technique:</label>
                                                <input type="date" name="expiration_visite_technique" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date d’expiration de la carte rose :</label>
                                                <input type="date" name="date_expiration_carte_rose" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Image:</label>
                                        <input type="file" name="photos" class="form-control" >
                                    </div>
                                    <br>
                                    <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Créer</button><br> <br>
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

<script>
    document.getElementById('type_vehicule').addEventListener('change', function() {
        var gammeSelect = document.getElementById('gamme');
        gammeSelect.innerHTML = '';  // Clear the existing options

        var typeVehicule = this.value;
        var options = [];

        if (typeVehicule === 'Voiture') {
            options = ['Camion', 'Pick-up', 'Mini-bus', 'Citadine', 'SUV'];
        } else if (typeVehicule === 'Moto') {
            options = ['Scooter', 'Cross', 'Routière'];
        }

        // Add a default disabled option
        var defaultOption = document.createElement('option');
        defaultOption.text = 'Choisissez une gamme';
        defaultOption.value = '';
        defaultOption.disabled = true;
        defaultOption.selected = true;
        gammeSelect.appendChild(defaultOption);

        // Add new options based on the selected type
        options.forEach(function(optionText) {
            var newOption = document.createElement('option');
            newOption.value = optionText;
            newOption.text = optionText;
            gammeSelect.appendChild(newOption);
        });
    });
</script>

@endsection