<td>
    <form action="/posts/delete/{id}" method="get">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
