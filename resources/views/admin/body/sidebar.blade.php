<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Service Achat</li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-shopping-cart-line"></i>
                        <span>Achats</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Tous les achats</a></li>
                        <li><a href="#">Achats en attente de validation</a></li>
                        <li><a href="#">Achats validés</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="/cmd">Gestion CMD</a></li>
                    </ul>
                </li>
                <li class="menu-title">Gestion de stock</li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-bar-chart-line"></i>
                        <span>Stock</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Stock en cours</a></li>
                        <li><a href="#">Commandes en cours</a></li>
                        <li><a href="#">Historique des mouvements</a></li>
                        <li><a href="#">Inventaire</a></li>
                    </ul>
                </li>
                <li class="menu-title">Parc Automobile</li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-car-line"></i>
                        <span>Véhicules</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/voiture_liste">Parking</a></li>
                        <li><a href="/voiture_create">Ajouter un véhicule</a></li>
                        <li><a href="/voitures/detail/{id}">Liste des vehicules</a></li>
                        <li><a href="/affectaion_vehicules">Affectation de vehicule</a></li>
                        
                    </ul>

                    
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-tools-line"></i>
                        <span>Entretien</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/entretien_liste">Liste Entretiens</a></li>
                        <li><a href="/entretien_creer">Enregistrer entretien</a></li>
                        
                    </ul>

                    
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fa-shuttle-van"></i>
                        <span>Vistes Techniques</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Tous les visites</a></li>
                        <li><a href="#">Nouvelle visite technique</a></li>
                        
                    </ul>

                    
                </li>

                

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-shield-alt"></i>
                        <span>Assurances</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Achat d'assurances</a></li>
                        <li><a href="#">Gestion des assurances</a></li>
                        
                    </ul>

                    
                </li>

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user"></i>
                        <span>Gestion des chauffeurs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/chauffeur_create">Ajouter un chauffeur</a></li>
                        <li><a href="/chauffeur_liste">Liste des chauffeurs</a></li>
                        
                    </ul>

                    
                </li>

                <li class="menu-title">Maintenance et Sécurité</li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-tools-line"></i>
                        <span>Maintenance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Calendrier de maintenance</a></li>
                        <li><a href="#">Historique des interventions</a></li>
                        <li><a href="#">Gestion des équipements</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Left Menu End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Left Sidebar End -->
