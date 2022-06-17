<form action="{{ route('employee.update', $data[2]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            First Name
        </label>
        <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror form-control" value="{{ old('first_name', $employee->first_name) }}" required autofocus>
    </div>

    @error('first_name')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Last Name
        </label>
        <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror form-control" value="{{ old('last_name', $employee->last_name) }}" required autofocus>
    </div>

    @error('last_name')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Company
        </label>

        <select name="company" id="company" class="form-control-sm form-control">
            @foreach ($companies as $company)
                <option value="{{ $company->name }}" @if ($company->name == $employee->company) selected @endif>
                    {{ $company->name }}
                </option>
            @endforeach
        </select>
    </div>

    @error('company')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Email
        </label>
        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" value="{{ old('email', $employee->email) }}" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Phone
        </label>
        <input type="text" name="phone" class="@error('phone') is-invalid @enderror form-control" value="{{ old('phone', $employee->phone) }}" required autofocus>
    </div>

    @error('phone')
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