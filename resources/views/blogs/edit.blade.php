

    <div class="container pt-3">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Post</h1>
                    <p class="pt-3">Edit and submit this form to update a post</p>

                    <hr>

                   
                        <div class="row">
                            <div class="control-group col-12 pt-3">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" value="{{ $blogs->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2 pt-3">
                                <label for="body">Post Body</label>
                                <input type="text" id="title" class="form-control" name="description"
                                       placeholder="Enter Post Title" value="{{ $blogs->description }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>

                        <form action="{{route('blogs.delete', [$blogs->id])}}"method="post">
                            @csrf
                            @method ('DELETE')
                            <button type="submit"> Delete Blog </button>
                        </form>
                        v>
                    
                </div>

            </div>
        </div>
    </div>

