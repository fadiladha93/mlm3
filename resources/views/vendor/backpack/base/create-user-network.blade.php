@extends(backpack_view('blank'))
@php
  $breadcrumbs = [
      'Tableau de bord' => backpack_url('dashboard'),
      'Reseau' => false,
  ];
@endphp
@section('content')
    <h2 class="mt-2">Ajouter a participant pour {{$user->reference}}</h2>
    <div class="card">
        <div class="card-body ">
            <form action="{{ route('save.user' , ['id' => $user->id]) }}" method="post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="cin" bp-field-type="text">
                    <label>CIN</label>          
                    <input type="text" name="cin" value="" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </div> 
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="firstname" bp-field-type="text">
                <label>Prénom</label>
                <input type="text" name="firstname" value="" class="form-control">
                </div>    
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="lastname" bp-field-type="text">
                <label>Nom</label>
                <input type="text" name="lastname" value="" class="form-control"> 
                </div>    <!-- text input -->
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="phone" bp-field-type="text">
                <label>Numéro de téléphone</label>
                <input type="text" name="phone" value="" class="form-control">

                </div>    <!-- text input -->
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="city" bp-field-type="text">
                <label>Ville</label>
                <input type="text" name="city" value="" class="form-control">
                </div>    <!-- text input -->
            
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="address" bp-field-type="text">
                <label>Addresse</label>
                <input type="text" name="address" value="" class="form-control">
                </div>    <!-- select from array -->

                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="bank" bp-field-type="select_from_array">
                    <label>Banque</label>
                        <select name="bank" class="form-control">
                            <option value="CIH BANK">CIH BANK</option>
                            <option value="ATTIJARI WAFA BANK">ATTIJARI WAFA BANK</option>
                            <option value="ABB-Al Barid Bank">ABB-Al Barid Bank</option>
                            <option value="Arab Bank Maroc">Arab Bank Maroc</option>
                            <option value="AWB-Attijariwafa Bank">AWB-Attijariwafa Bank</option>
                            <option value="BAA-Bank Al Amal">BAA-Bank Al Amal</option>
                            <option value="BANK AL TAMWEEL  WA  AL INMA">BANK AL TAMWEEL  WA  AL INMA</option>
                            <option value="BANK AL YOUSR">BANK AL YOUSR</option>
                            <option value="BANK ASSAFA">BANK ASSAFA</option>
                            <option value="BP-Banque populaire">BP-Banque populaire</option>
                            <option value="BMCE Bank of Africa">BMCE Bank of Africa</option>
                            <option value="BMCI Banque">BMCI Banque</option>
                            <option value="CDG Capital">CDG Capital</option>
                            <option value="CFG-CFG Bank">CFG-CFG Bank</option>
                            <option value="CitiBank-Citibank Morocco">CitiBank-Citibank Morocco</option>
                            <option value="CAM-Credit agricole du Maroc">CAM-Credit agricole du Maroc</option>
                            <option value="CDM-Credit du Maroc">CDM-Credit du Maroc</option>
                            <option value="Dar Al Amane">Dar Al Amane</option>
                            <option value="SGMB-Societe generale Maroc">SGMB-Societe generale Maroc</option>
                            <option value="UMNIA BANK">UMNIA BANK</option>
                        </select>
                </div>    <!-- number input -->

                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="rib" bp-field-type="number">
                    <label>RIB</label>
                    <input type="number" name="rib" value="" class="form-control">
                </div>    <!-- radio -->
            
                <div data-init-function="bpFieldInitRadioElement" class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="gender" bp-field-type="radio" data-initialized="true">
                    <label class="d-block">Genre</label>
                    <input type="hidden" value="" name="gender">
                    <div class="form-check ">
                        <input type="radio" class="form-check-input" value="Female" id="radio_1234470">
                        <label class=" form-check-label font-weight-normal" for="radio_1234470">Femme</label>
                    </div>
                    <div class="form-check ">
                        <input type="radio" class="form-check-input" value="Male" id="radio_1234471">
                        <label class=" form-check-label font-weight-normal" for="radio_1234471">Homme</label>
                    </div>    
                </div>    
                    <!-- text input -->
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="email" bp-field-type="email">
                <label>Email</label>
                    <input type="email" name="email" value="" class="form-control">
                </div>
                </div>
                <!-- text input -->
                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true" bp-field-name="pass" bp-field-type="text">
                    <label>Password</label>
                        <input type="text" name="pass" value="" class="form-control">
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-success">Enregistrer et retour</button>

                </div>
            </form>
        </div>
    </div>

@endsection