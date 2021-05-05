<x-layout>


    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
            <div class="card card-signin my-5">
              <div class="card-body bg-main" style="border-radius: 10px 10px 10px 10px;">
                <h5 class="card-title text-center text-sec">Login</h5>
                <form method="POST" action="{{route('login')}}" class="form-signin">
                    @csrf
                  <div class="form-label-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label  for="inputEmail">{{__('ui.email')}}</label>
                  </div>
                  <div class="form-label-group">
                    <input name="password" type="password" id="pw" class="form-control" placeholder="Password" required>
                    <label for="pw">{{__('ui.password')}}</label>
                  </div>

                  {{-- <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div> --}}
                  <button class="btn btn-lg custom-btn btn-block text-uppercase" type="submit">Login</button>
                  <hr class="my-4 text-sec">
                </form>

                {{-- registrazione --}}
                <h5 class="card-title text-center text-sec">{{__('ui.register')}}</h5>
                <form method="POST" action="{{route('register')}}"  class="form-signin">
                    @csrf
                    <div class="form-label-group">
                        <input  name="name" type="text" id="username" class="form-control" placeholder="Email address" required autofocus>
                        <label for="username">Inserisci il nome</label>
                      </div>
                  <div class="form-label-group">
                      <input  name="email" type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                      <label for="email">{{__('ui.email')}}</label>
                  </div>
                  <div class="form-label-group">
                      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">{{__('ui.password')}}</label>
                  </div>
                  <div class="form-label-group">
                    <input name="password_confirmation" type="password" id="passwordconfirm" class="form-control" placeholder="Password" required>
                    <label for="passwordconfirm">{{__('ui.confirmPass')}}</label>
                </div>
                  {{-- <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div> --}}
                  <button class="btn btn-lg custom-btn btn-block text-uppercase" type="submit">{{__('ui.register')}}</button>
                </form>



              </div>
            </div>
          </div>
        </div>

      </div>



</x-layout>
