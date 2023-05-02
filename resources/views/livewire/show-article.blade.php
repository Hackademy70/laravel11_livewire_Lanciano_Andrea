<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th>{{ $article->id }}</th>
                            <td>{!! Str::limit($article->title, 5) !!}</td>
                            <td>{{ $article->author }}</td>
                            <td>{{ $article->year }}</td>
                            <td>
                                <form wire:submit.prevent="delete({{ $article->id }})">
                                    <button class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>