@extends('layouts.app')

@section('content')
    <header class="d-flex justify-content-between align-items-center">
        <div>
            <h1>Post #{{ $post->id }}</h1>
            @forelse($post->tags as $tag)
            <span class="badge shadow-sm pt-1 px-2" style="background-color: {{ $tag->color }}">{{ $tag->label }}</span>
            @empty -
            @endforelse
        </div>
        <div>
            <div><strong>Slug - </strong>{{ $post->slug }}</div>
            <div class="d-flex justify-content-end">
                <span class="badge badge-pill badge-{{ $post->category->color ?? 'secondary' }} shadow-sm pt-1 text-uppercase px-3 w-100 mt-3 mb-0">{!! $post->category->label ?? '<i class="fa-solid fa-times"></i>' !!}</span>
            </div>
        </div>
    </header>
    @include('includes.posts.alert')
    <hr>
    <div class="row">
        <div class="col-4 mt-5">
            <div class="shadow">
                @if($post->image)
                <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="Image">
                @else
                <img class="img-fluid" src="https://marcolanci.it/utils/placeholder.jpg" alt="Image">
                @endif
            </div>
            <div class="col-12 d-flex mt-5">

                {{-- Back Button --}}
                <a href="{{ route('admin.posts.index') }}">
                <button class="btn btn-secondary mx-2 shadow-sm" type="submit">
                    <i class="fa-solid fa-arrow-rotate-left"> Back</i>
                </button>
                </a>
    
                {{-- Edit Button --}}
                <a href="{{ route('admin.posts.edit', $post->id) }}">
                <button class="btn btn-warning mx-2 shadow-sm" type="submit">
                    <i class="fas fa-pencil"> Edit</i>
                </button>
                </a>
    
                {{-- Delete Button --}}
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('delete')
    
                    <button class="btn btn-danger mx-2 shadow-sm" type="submit">
                        <i class="fas fa-trash"> Delete</i>
                    </button>
                </form>
    
            </div>
        </div>
        <div class="col-8 mt-5">
            <h2><strong>{{ $post->title }}</strong></h2>
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection


@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection