@extends('vitrine.vitrineLayout')

@section('content')
<div class="container mb-4">
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8" >

            <h2 class="mb-30">Enregistrement d'un médecin</h2>
            <form action="#">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" style="font-size: 20px;">Nom *</label>
                            <input type="text" style="font-size: 20px;" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input-primary">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" style="font-size: 20px;">Prénoms *</label>
                            <input type="text" style="font-size: 20px;" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input-primary">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <label for="" style="font-size: 20px;">Sexe *</label>
                        <div class="form-select" style="font-size: 20px;" id="default-select" "="">
                            <select style="display: none;" style="font-size: 20px;">
                                {{-- <option value=""style="font-size: 20px;" disabled>Sexe</option> --}}
                                <option value="1"style="font-size: 20px;">Homme</option>
                                <option value="1"style="font-size: 20px;">Dilli</option>
                            </select>
                            <div class="nice-select" tabindex="0">
                                <span class="current"style="font-size: 20px;">selectionner votre sexe</span>
                                <ul class="list">
                                    {{-- <li data-value="" style="font-size: 20px;"disabled class="option selected focus">Sexe</li> --}}
                                    <li data-value="1"style="font-size: 20px;" class="option">Homme</li>
                                    <li data-value="1"style="font-size: 20px;" class="option">Femme</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="" style="font-size: 20px;">Date de naissane *</label>
                            <input type="date" style="font-size: 20px;" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input-primary">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="" style="font-size: 20px;">Adresse email *</label>
                        <div class="form-group input-group-icon ">
                            <div class="icon"><i class="fas fa-envelope" style="font-size: 15px;"></i></div>
                            <input type="email" style="font-size: 20px;" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Addresse email'" required="" class="single-input">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="" style="font-size: 20px;">N° telephone *</label>
                        <div class="form-group input-group-icon ">
                            <div class="icon"><i class="fas fa-phone" style="font-size: 15px;"></i></div>
                            <input type="tel" style="font-size: 20px;" name="tel" placeholder="N° tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'N° tel'" required="" class="single-input">
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-2"></div>

                    <div class="col-4">
                        <button type="submit" style="font-size: 20px;" class="genric-btn success circle arrow">Valider<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                    <div class="col-4">
                        <button type="reset" style="font-size: 20px;" class="genric-btn danger circle">Annuler</button>
                    </div>

                    <div class="col-2"></div>
                </div>

            </form>
        
        </div>
        <div class="col-2">
            
        </div>
    </div>
        
</div>


@endsection