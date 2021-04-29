<x-layout>


    <h2 class="text-center col-12 col-md-4 offset-md-4 margin-custom-top">Crea il tuo annuncio!</h2>

 <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="bg-main card-body" style="border-radius: 10px 10px 10px 10px;">


                {{-- registrazione --}}
                <h5 class="card-title text-center text-sec">Modifica i campi</h5>
                <form method="POST" action="{{route('announcement.store')}}"  class="form-signin ">
                    @csrf
                    <div class="form-label-group">
                      <input  name="title" type="text" id="titolo" class="form-control" placeholder="Email address" required autofocus>
                      <label for="titolo">Titolo</label>
                    </div>
                    <div class="form-label-group">
                      <h6 class="text-sec">Descrivi il tuo articolo</h6>
                        <textarea name="description" type="text" id="descrizione"  class="form-control" required autofocus></textarea>
                        <label for="descrizione"></label>
                    </div>
                    <div class="form-label-group">
                        <input  name="price" type="text" id="prezzo" class="form-control" placeholder="Email address" required autofocus>
                        <label for="prezzo">Prezzo</label>
                    </div>
                    <div class="form-label">
                        <label class="text-sec" for="category">Categoria</label>
                        <select class="my-3" name="categories" id="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>


                  {{-- <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div> --}}
                  <button class="btn btn-lg custom-btn btn-block text-uppercase" type="submit">Inserisci l'annuncio</button>
                </form>


              </div>
            </div>
          </div>
        </div>

      </div>

</x-layout>
