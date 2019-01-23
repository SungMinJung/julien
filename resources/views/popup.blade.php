@foreach ($popupList as $popup)
    <div class="popup">
        <img src="{{ $popup }}">
        <button class="popup_delete">제거</button>
    </div>
@endforeach