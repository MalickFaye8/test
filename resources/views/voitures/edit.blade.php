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
				<form action="{{ url('voitures/update/'.$voitures->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="row">
						<div class="col-md-6">
							<label>Marque:</label>
							<input type="text" name="marque" class="form-control" value="{{ $voitures->marque }}">
						</div>
					
					
						<div class="col-md-6">
							<label>Modèle:</label>
							<input type="text" name="modele" class="form-control" value="{{ $voitures->modele }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Matricule:</label>
							<input type="text" name="matricule" class="form-control" value="{{ $voitures->matricule }}">
						
					</div>
					
						<div class="col-md-6">
							<label>Carburant:</label>
							<input type="text" name="carburant" class="form-control" value="{{ $voitures->carburant }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Type:</label>
							<input type="text" name="type" class="form-control" value="{{ $voitures->type }}">
						</div>
					
						<div class="col-md-6">
							<label>Kilométrage:</label>
							<input type="text" name="kilometrage" class="form-control" value="{{ $voitures->kilometrage }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Nombre de places:</label>
							<input type="text" name="nombreplaces" class="form-control" value="{{ $voitures->nombreplaces }}">
						</div>
					
						<div class="col-md-6">
							<label>Puissance:</label>
							<input type="text" name="puissance" class="form-control" value="{{ $voitures->puissance }}">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label>Image:</label>
							<input type="file" name="photos" class="form-control" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success">Modifier</button>
						</div>
					</div>
				</form>
                </div>
			</div>
        </div>
        </div>
        </div>
        </div>
@endsection