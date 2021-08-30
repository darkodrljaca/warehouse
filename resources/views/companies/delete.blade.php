{{-- !-- Delete Warning Modal -->  --}}
<form action="{{ route('companies.destroy', $company->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Да ли сте сигурни да желите да обришете {{ $company->name }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Откажи</button>
        <button type="submit" class="btn btn-danger">Да</button>
    </div>
</form>