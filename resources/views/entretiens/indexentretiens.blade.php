@extends('admin.admin-master')
@section('admin')

<link rel="stylesheet" type="text/css" href="mystyle.css">
<div class="col-md-100">
    <img src="img/logo3.jpg" alt="logo3" style="display: block; margin: 0 auto">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mes entretiens</h1><br><br><br>

            <div class="pull-left">
                <a href="{{url('/entretien_creer')}}" class="btn btn-success">Nouveau entretien</a><br><br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="h5">Voiture</th>
                                <th class="h5">Date</th>
                                <th class="h5">Chauffeur affecté</th>
                                <th class="h5">Actuel Kilometrage</th>
                                <th class="h5">Montant Entretien</th>
								<th class="h5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="h6">Voiture 1</td>
                                <td class="h6">2024-01-30</td>
                                <td class="h6">Abdoulaye SARR</td>
                                <td class="h6">15000 km</td>
                                <td class="h6">$200</td>
								<td>
								<form action="#" method="post" style="font-size: 14px;">
									<a href="#" class="btn btn-default">Editer</a>
									<button type="submit" class="btn btn-danger">Supp</button>
								</form>
                                </td>
                            </tr>
                            <tr>
                                <td class="h6">Voiture 1</td>
                                <td class="h6">2024-01-30</td>
                                <td class="h6">Abdoulaye SARR</td>
                                <td class="h6">15000 km</td>
                                <td class="h6">$200</td>
								<td>
                                    <form action="#" method="post">
                                        <a href="#" class="btn btn-default">Editer</a>
                                        <button type="submit" class="btn btn-danger">Supp</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection