<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lara Hopital</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('themes/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('themes/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <section class="section-padding mt-5" id="reserve">
        <div class="container pt-5 mb-5">
            <!-- Page Wrapper -->
            <div id="wrapper">
                <div class="container card col-md-6">
                    <div class="card-header bg-success">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-white">Formulaire Docteur</h6>
                            </div>
                            <div class="col-md-2 text-md-right">
                                <a href="/" class="btn btn-sm btn-warning">Retour</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Nom Complet<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" required name="name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Titre<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" required name="titre">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="" required name="email">
                                </div> 
                                <div class="col-md-6 form-group">
                                    <label for="">Téléphone<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" required name="telephone">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Spécialisation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" required name="specialite">               
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Biographie<span class="text-danger">*</span></label>
                                    <textarea name="biographie" class="form-control" id="biographie"></textarea>
                                </div> 
                                
                            </div>            
                            <div class="row">               
                                <div class="col-md-6 form-group">
                                    <label for="">Mot de passe<span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" required name="password">
                                </div>  
                                <div class="col-md-6 form-group">
                                    <label for="password_confirmation">Confirmer<span class="text-danger">*</span></label>
                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-success">&nbsp;Creer&nbsp;</button>           
                                </div>
                            </div>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('themes.includes.footer')
