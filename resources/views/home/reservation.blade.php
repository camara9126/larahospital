@include('partials.header')
    
    @if(Session::has('success'))
        <div class="alert alert-success mt-3" role="alert">
            <h5 class="text-center text-success">{{ Session::get('success') }}</h5>
        </div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger mt-3" role="alert">
            <h5 class="text-center text-danger">{{ Session::get('danger') }}</h5>
        </div>
    @endif

    <section class="section-padding mt-5" id="reserve">
        <div class="container pt-5 mb-5">
            <h2 class="mb-lg-3 mb-5 text-center">{{ ucwords("Prendre une reservation")  }}</h2>
            <form action="{{route('reservation.store')}}" method="post" class="col-md-8 offset-2 mt-5">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name">Nom complet <span class="text-danger">*</span></label>
                        <input type="text" required placeholder="Entrer votre nom complet" name="nom" class="form-control">
                    </div>        
                    <div class="col-md-6 form-group">
                        <label for="">N° Téléphone <span class="text-danger">*</span></label>
                        <input type="text" required placeholder="Entrer votre numérode téléphone" name="contact" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="">Date <span class="text-danger">*</span></label>
                        <input type="date" name="dateRv" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Heure <span class="text-danger">*</span></label>
                        <input type="time" name="heure" required class="form-control">
                    </div>
                </div>    
                <div class="form-group">
                    <label for="">Symptômes</label>
                    <textarea name="message" placeholder="Information supplémentaire" class="form-control"></textarea>
                </div>
                <input type="hidden" name="id_docteur" value="1"  class="form-control">
                <button type="submit" id="adrv" class="btn btn-outline-success">Valider</button>
            </form>
        </div>
    </section>

    

