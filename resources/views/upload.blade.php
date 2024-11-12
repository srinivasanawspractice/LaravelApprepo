<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Upload Image</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }} <br>
                <img src="{{ Storage::disk('s3')->url(session('path')) }}" alt="Uploaded Image" style="max-width: 300px;">
            </div>
        @endif
        <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Image Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Choose Image</label>
                
                <input type="file" name="image" class="form-control" id="image" required>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>
