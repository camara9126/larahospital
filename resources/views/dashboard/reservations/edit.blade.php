@include('includes.header')
<div class="container card col-md-8">
    <div class="card-header bg-success">
        <div class="row">
            <div class="col-md-10">
                <h6 class="m-0 font-weight-bold text-white">Formulaire Rendez-vous</h6>
            </div>
            <div class="col-md-2 text-md-right">
                <a href="/attente" class="btn btn-sm btn-warning">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @elseif(Session::has('danger'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('danger') }}
            </div>
        @endif
        <form action="{{route('reservation.update', $edit->id)}}" method="POST">
            @csrf;
            <input type="hidden" value="{{$edit->id_docteur}}" name="id_docteur">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Nom complet <span class="text-danger">*</span></label>
                    <input type="text" value="{{$edit->nom}}" required placeholder=" Entrer votre nom complet" name="nom" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Contact <span class="text-danger">*</span></label>
                    <input type="text" value="{{$edit->contact}}" required placeholder=" Entrer votre adresse mail" name="email" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Date <span class="text-danger">*</span></label>
                    <input type="date" value="{{$edit->dateRv}}" name="dateRv" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Heure <span class="text-danger">*</span></label>
                    <input type="time" value="{{$edit->heure}}" name="heure" required class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Symptômes</label>
                <textarea name="message" placeholder="Information supplémentaire" class="form-control"> {{$edit->message}}</textarea>
            </div>
            <div class="row">
                <input type="hidden" value="{{Auth::user()->titre}}" name="docteur">
            </div>
            <button type="submit" id="" class="btn btn-outline-success">Approuvé</button>
        </form>
    </div>
</div>
@include('includes.footer')
