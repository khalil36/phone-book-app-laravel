@include('components.header')
<h2 class="mb-4 text-center mt-5">Enter Your Data</h2>
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card box-shadow border-radius-small">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Customer Form</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info underline-none" href="/"> Home </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if(Session::has('customer_created'))
                <div class="alert alert-success fade-message">
                    {{Session::get('customer_created')}}
                </div>
                @elseif(Session::has('failed'))
                <div class="alert alert-danger fade-message">
                    {{Session::get('failed')}}
                </div>
                @endif
                <form action="store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        
                        <div class="mt-3 {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="first_name">First Name*</label>
                            <input type="text" value="{{ old('first_name') }}" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                            @if($errors->has('first_name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('first_name') }}
                                </em>
                            @endif
            
                        </div>
                        <div class="mt-3 {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">Last Name*</label>
                            <input type="text" value="{{ old('last_name')}}" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                            @if($errors->has('last_name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('last_name') }}
                                </em>
                            @endif
                        
                        </div>
                        <div class="mt-3 {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">Phone*</label>
                            <input type="text" value="{{ old('phone')}}" id="phone" name="phone" class="form-control" placeholder="0123456789" maxlength="10"/>
                            @if($errors->has('phone'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </em>
                            @endif
                        </div>
                        <div class="mt-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Email*</label>
                            <input type="email" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="example@gmail.com" />
                            @if($errors->has('email'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </em>
                            @endif
                        </div>
                    </div>

                    <div class="text-right">
                        <input class="btn btn-success" type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
