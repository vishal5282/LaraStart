@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Detail') }}</div>

                <div class="card-body">
                    <form method="POST" action="/students">
                        @csrf
                    

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   required>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel-input" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="mobile"   id="tel-input" required>
                                 </div>
                        </div>
                        <div class="form-group row">
                            <label for="date-input" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="date" name="date"   id="example-date-input" required>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-lg-6">
                                 <div class="radio">
                                    <label>
                                       <input type="radio" name="gender" id="optionsRadios1" chacked>{{ __(' Male') }}
                                    </label>
                                </div>
                                <div class="radio">
                                   <label>
                                      <input type="radio" name="gender" id="optionsRadios2" >{{ __(' Female') }}
                                   </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label text-md-right" for="inlineFormCustomSelect">{{ __('City') }}</label>
                             <div class="col-md-6">
                                        <select class="form-control" name="city" id="inlineFormCustomSelect" required>
                                           <option selected>Choose...</option>
                                           <option value="1">Bhavnagar</option>
                                           <option value="2">Surat</option>
                                           <option value="3">Rajkot</option>
                                         </select>
                              </div>

                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Add File') }}</label>

                            <div class="col-md-6">
                                <input id="file_upload" type="file" class="form-control" name="file_upload" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Add Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo_upload" type="file" class="form-control" name="photo_upload"   required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
