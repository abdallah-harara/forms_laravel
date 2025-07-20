<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <h1>Form Contact</h1>
    <form action="{{ route('contact_data') }}" method="post" class="form-control" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Name">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text"
                name="name" placeholder="Name" id="Name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" value="{{ old('name') }}" type="email"
                name="email" placeholder="Email" id="email">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone">phone</label>
            <input class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" type="text"
                name="phone" placeholder="phone" id="phone">
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subject">subject</label>
            <input class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}"
                type="text" name="subject" placeholder="subject" id="subject">
            @error('subject')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Image">Image</label>
            <input class="form-control  @error('image') is-invalid @enderror" multiple value="{{ old('image') }}"
                type="file" name="image" id="Image">
            {{--
in order to make the file accept more than one image
i will do two conditions 1- in input "multiple"
2- in this name "image[]"
                --}}
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message">message</label>
            <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" cols="30"
                rows="10"></textarea>
            @error('message')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</body>

</html>
