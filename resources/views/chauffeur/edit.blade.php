@extends('admin.admin-master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Editer Chauffeur</h4>

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
                        <h4 class="card-title mb-4">Modification infos</h4>
                        <form action="{{ url('chauffeur/update/'.$chauffeurs->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                    <div class="mb-4">
                                        <label class="form-label" for="matricule_chauf">Matricule Chauffeur</label>
                                        <input id="matricule_chauf" type="text" class="form-control input-mask" name="matricule_chauf" required value="{{ $chauffeurs->matricule_chauf }}" readonly>
                                    </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="name_chauf">Prenom & Nom</label>
                                            <input id="name_chauf" type="text" class="form-control input-mask" name="name_chauf" required value="{{ $chauffeurs->name_chauf }}">                                            
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="tel_chauf">Numero Tel</label>
                                            <input id="tel_chauf" type="text" class="form-control input-mask" name="tel_chauf" required value="{{ $chauffeurs->tel_chauf }}">                                            
                                        </div>
                                        <div class="mb-0">
                                            <label class="form-label" for="date_chauf">Date d'enrollement:</label>
                                            <input id="date_chauf" type="date" class="form-control input-mask" name="date_chauf" required value="{{ $chauffeurs->date_chauf }}" >                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">
                                        <div class="mb-4">
                                            <label class="form-label" for="cni_chauf">CNI:</label>
                                            <input id="cni_chauf" type="text" class="form-control input-mask" name="cni_chauf" required value="{{ $chauffeurs->cni_chauf }}">                                            
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="adresse_chauf">Adresse d'habitation</label>
                                            <input id="adresse_chauf"type="text" class="form-control input-mask" name="adresse_chauf" required value="{{ $chauffeurs->adresse_chauf }}">
                                          
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="justif_chauf">Curiculum Vitae</label>
                                            <input id="justif_chauf"type="file" class="form-control input-mask" name="justif_chauf">
                                            

                                        </div>
<br>
                                        <div class="text-end">
                                        <button type="submit" class="btn btn-primary "> Modifier  </button>

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



@endsection