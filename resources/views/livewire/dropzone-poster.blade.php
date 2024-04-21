<div>
    <form action="{{ route('banner.upload') }}" id="myDropzone-{{ $product->id }}" class="dropzone" enctype="multipart/form-data">
        @csrf
    </form>

    {{ $product }}
</div>
