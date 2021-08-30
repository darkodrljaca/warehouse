{{-- !-- Delete Warning Modal -->  --}}
<form action="{{ route('countries.destroy', $country->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Да ли сте сигурни да желите да обришете {{ $country->name }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Откажи</button>
        <button type="submit" class="btn btn-danger">Да</button>
    </div>
</form>