@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2> {{ __('Register') }}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('lastname') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phonenumber"
                                    class="col-md-4 col-form-label text-md-end">{{ __('phonenumber') }}</label>

                                <div class="col-md-6">
                                    <input id="phonenumber" type="number"
                                        class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber"
                                        value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                                    @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="specificl"
                                    class="col-md-4 col-form-label text-md-end">{{ __('specificl') }}</label>

                                <div class="col-md-6">
                                    <input id="specificl" type="text"
                                        class="form-control @error('specificl') is-invalid @enderror" name="specificl"
                                        value="{{ old('specificl') }}" required autocomplete="specificl" autofocus>

                                    @error('specificl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address2"
                                    class="col-md-4 col-form-label text-md-end">{{ __('address2') }}</label>

                                <div class="col-md-6">
                                    <input id="address2" type="text"
                                        class="form-control @error('address2') is-invalid @enderror" name="address2"
                                        value="{{ old('address2') }}" required autocomplete="address2" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="county"
                                    class="col-md-4 col-form-label text-md-end">{{ __('county') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('county') is-invalid @enderror" name="county"
                                        value="{{ old('county') }}" required autocomplete="county" autofocus>
                                        <option value="">select your county </option>
                                        <option value="baringo">Baringo</option>
                                        <option value="bomet">Bomet</option>
                                        <option value="bungoma">Bungoma</option>
                                        <option value="busia">Busia</option>
                                        <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                        <option value="embu">Embu</option>
                                        <option value="garissa">Garissa</option>
                                        <option value="homa bay">Homa Bay</option>
                                        <option value="isiolo">Isiolo</option>
                                        <option value="kajiado">Kajiado</option>
                                        <option value="kakamega">Kakamega</option>
                                        <option value="kericho">Kericho</option>
                                        <option value="kiambu">Kiambu</option>
                                        <option value="kilifi">Kilifi</option>
                                        <option value="kirinyaga">Kirinyaga</option>
                                        <option value="kisii">Kisii</option>
                                        <option value="kisumu">Kisumu</option>
                                        <option value="kitui">Kitui</option>
                                        <option value="kwale">Kwale</option>
                                        <option value="laikipia">Laikipia</option>
                                        <option value="lamu">Lamu</option>
                                        <option value="machakos">Machakos</option>
                                        <option value="makueni">Makueni</option>
                                        <option value="mandera">Mandera</option>
                                        <option value="meru">Meru</option>
                                        <option value="migori">Migori</option>
                                        <option value="marsabit">Marsabit</option>
                                        <option value="mombasa">Mombasa</option>
                                        <option value="muranga">Muranga</option>
                                        <option value="nairobi">Nairobi</option>
                                        <option value="nakuru">Nakuru</option>
                                        <option value="nandi">Nandi</option>
                                        <option value="narok">Narok</option>
                                        <option value="nyamira">Nyamira</option>
                                        <option value="nyandarua">Nyandarua</option>
                                        <option value="nyeri">Nyeri</option>
                                        <option value="samburu">Samburu</option>
                                        <option value="siaya">Siaya</option>
                                        <option value="taita taveta">Taita Taveta</option>
                                        <option value="tana river">Tana River</option>
                                        <option value="tharaka nithi">Tharaka Nithi</option>
                                        <option value="trans nzoia">Trans Nzoia</option>
                                        <option value="turkana">Turkana</option>
                                        <option value="uasin gishu">Uasin Gishu</option>
                                        <option value="vihiga">Vihiga</option>
                                        <option value="wajir">Wajir</option>
                                        <option value="pokot">West Pokot</option>
                                    </select>

                                    @error('county')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="constituency"
                                    class="col-md-4 col-form-label text-md-end">{{ __('constituency') }}</label>

                                <div class="col-md-6">
                                    <input id="constituency" type="text"
                                        class="form-control @error('constituency') is-invalid @enderror"
                                        name="constituency" value="{{ old('constituency') }}" required
                                        autocomplete="constituency" autofocus>
                                    @error('constituency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Ward"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ward') }}</label>

                                <div class="col-md-6">
                                    <input id="Ward" type="text"
                                        class="form-control @error('Ward') is-invalid @enderror" name="Ward"
                                        value="{{ old('Ward') }}" required autocomplete="Ward" autofocus>
                                    @error('Ward')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="landmark"
                                    class="col-md-4 col-form-label text-md-end">{{ __('landmark') }}</label>

                                <div class="col-md-6">
                                    <input id="landmark" type="text"
                                        class="form-control @error('landmark') is-invalid @enderror" name="landmark"
                                        value="{{ old('landmark') }}" required autocomplete="landmark" autofocus>
                                    @error('landmark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="row mb-3 ">
                            <a class="btn btn-outline-info w-100" type=""
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                        <p class="column text-center"> OR </p>
                        <div class="row mb-12">
                            <a class="btn btn-outline-warning w-100" href="{{ url('/') }}">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
