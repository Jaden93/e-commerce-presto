<x-layout>


    <h2 class="text-center col-12 col-md-4 offset-md-4 margin-custom-top">{{__('ui.create')}}</h2>

 <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="bg-main card-body" style="border-radius: 10px 10px 10px 10px;">


                {{-- registrazione --}}
                <h5 class="card-title text-center text-sec">{{__('ui.modify')}}</h5>
                {{-- <h3>DEBUG :: SECRET {{ $uniqueSecret }}</h3> --}}
                <form method="POST" action="{{route('announcement.store')}}"  class="form-signin ">
                    @csrf
                   <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                      
                    <div class="form-label-group">
                      <input  name="title" type="text" id="titolo" class="form-control" placeholder="Email address" required autofocus>
                      <label for="titolo">{{__('ui.title')}}</label>
                    </div>
                    <div class="form-label-group">
                      <h6 class="text-sec">{{__('ui.describe')}}</h6>
                        <textarea name="description" type="text" id="descrizione"  class="form-control" required autofocus></textarea>
                        <label for="descrizione"></label>
                    </div>
                    <div class="form-label-group">
                        <input  name="price" type="text" id="prezzo" class="form-control" placeholder="Email address" required autofocus>
                        <label for="prezzo">{{__('ui.price')}}</label>
                    </div>
                    <div class="form-label">
                        <label class="text-sec" for="category">{{__('ui.category')}}</label>
                        <select class="my-3" name="categories" id="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>  
                    </div>

                    <div class="form-group row">
                      <label for="images" class="col-md-12 col-form-label text-md-right text-sec">{{__('ui.image')}}</label>
                      <div class="col-md-12">
                        <div id="drophere" class="dropzone"></div>


                        @error('images')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        
                      </div>
                    </div>

                  {{-- <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div> --}}
                  <button class="btn btn-lg custom-btn btn-block text-uppercase" type="submit">{{__('ui.post')}}</button>

                </form>


              </div>
            </div>
          </div>
        </div>

      </div>

</x-layout>
