@section('title')
{{ $tool->title_seo}}
@endsection

@section('description')
{{ $tool->description }}
@endsection

@section('keywords')
{{ $tool->keywords }}
@endsection

@section('main-title')
{{ $tool->title }}
@endsection

@section('image')
@isset($tool->image)
{{ Storage::url($tool->image) }}
@endisset
@endsection

@section('comment_post_ID')
{{ $tool->id }}
@endsection