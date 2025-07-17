
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Document</title>
</head>
<body>
<h1>Upload Form</h1>
<form action="{{ route("form1_data") }}" method="post" class="form-control">
    @csrf
     <div class="mb-3">
        <label for="fname">First Name</label>
        <input type="text" id="fname" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" name="first_name" value="{{ old('first_name') }}" >
        @error('first_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" class="form-control @error('last_namee') is-invalid @enderror" placeholder="last name" name="last_name"  value="{{ old('last_name') }}">

        @error('last_namee')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="date">Date Of Birth</label>
        <input type="date" id="date" class="form-control @error('dob') is-invalid @enderror"  name="dob" value="{{ old('dob') }}">


        @error('dob')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="inter email" name="email" value="{{ old('email') }}">


        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for=password"">Password</label>
        <input type="password" id="password" con class="form-control @error('password') is-invalid @enderror" placeholder="inter your password" name="password" value="{{ old('password') }}">

        @error('password')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Gender</label><br/>
        <input @checked(old('gender')=='male') type="radio" name="gender" id="Male" value="male" >
        <label for="Male">male</label><br/>
        <input {{ old('gender')=='female'?'checked':'' }} type="radio" name="gender" id="Female" value="female" ">
        <label for="Female">Female</label><br/>
       @error('gender')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label>Education level</label>
        <select class="form-select @error('education_level') is-invalid @enderror" name="education_level"  >
            <option value="School" @selected(old('education_level')=='School')>School</option>
            <option value="Diploma" @selected(old('education_level')=='Diploma')>Diploma</option>
            <option value="Bachelor" @selected(old('education_level')=='Bachelor')>Bachelor</option>
            <option value="Master" @selected(old('education_level')=='Master')>Master</option>
            <option value="PhD" @selected(old('education_level')=='PhD')>PhD</option>
        </select>
        @error('education_level')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    {{-- @dump(old('hobbies')) --}}
    <div class="mb-3">
        <label>Hobbies</label><br>
        <label  for="Codding"><input type="checkbox" @checked(in_array('Codding',old('hobbies')??[])) name="hobbies[]"  value="Codding" id="Codding" >Codding</label>
        <label  for="Swiming"><input type="checkbox" @checked(in_array('Swiming',old('hobbies')??[])) name="hobbies[]" value="Swiming" id="Swiming" >Swiming</label>
        <br>
        <label for="Reading"><input type="checkbox" @checked(in_array('Reading',old('hobbies')??[])) name="hobbies[]" value="Reading" id="Reading" >Reading</label>
        <br>
        <label for="Dancing"><input type="checkbox" @checked(in_array('Dancing',old('hobbies')??[])) name="hobbies[]" value="Dancing" id="Dancing" >Dancing</label>
        <br>
        <label for="Playing"><input type="checkbox" @checked(in_array('Playing',old('hobbies')??[])) name="hobbies[]" value="Playing" id="Playing" >Playing</label>
        <br>
 @error('hobbies')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="bio">bio</label>
        <textarea name="bio" id="bio" cols="30" rows="10" class="@error('bio') is-invalid @enderror" >{{ @old('bio') }}</textarea>
         @error('bio')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
