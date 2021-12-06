
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('navbar')

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h4>Edit Category</h4>
            <form action="{{ route('category.update',$category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <div class="row">
                        <div class="col-3">
                            <input type="text" class="form-control " value="{{ $category->title }}" name="title">
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
