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

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h4>Create Article</h4>
            <form action="{{ route('article.update',$article->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select name="category_id" class="form-select" id="">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ $category->id==$article->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="description" rows="10" class="form-control">{{ $article->description }}</textarea>
                </div>
                <button class="btn btn-primary">Update Article</button>
            </form>
        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
