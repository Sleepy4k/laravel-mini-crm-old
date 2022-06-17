<form action="{{ route('company.update', $data[2]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            Company Name
        </label>
        <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" value="{{ old('name', $company->name) }}" required autofocus>
    </div>

    @error('name')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Company Email
        </label>
        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" value="{{ old('email', $company->email) }}" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Company Logo
        </label>

        <input type="hidden" name="old_logo" id="old_logo" value="{{ $company->logo }}">

        @if($company->logo)
            @if(!empty(file_exists('storage/images/'.$company->logo)))
                <img src="{{ asset('storage/images/'.$company->logo) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @else
                <img src="{{ asset('storage/images/logo-404.png') }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @endif
        @else
            <img class="img-preview img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
        @endif

        <input class="@error('logo') is-invalid @enderror form-control" type="file" id="logo" onchange="previewImage()" name="logo" required autofocus>
    </div>

    @error('logo')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Company Website
        </label>
        <input type="text" name="website" class="@error('website') is-invalid @enderror form-control" value="{{ old('website', $company->website) }}" required autofocus>
    </div>

    @error('website')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> 
            Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> 
            Reset
        </button>
    </div>
</form>