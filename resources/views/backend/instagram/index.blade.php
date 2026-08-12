@extends('layouts.backend')

@section('title', 'Instagram Posts')
@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}">
@endpush

<div class="container-fluid px-4 py-4">

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errors->first() }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h3 class="page-title mb-1">Instagram Posts</h3>
            <p class="page-subtitle mb-0">Manage posts displayed on the homepage</p>
        </div>
        <a href="{{ route('admin.instagram.create') }}" class="btn btn-brand px-3 py-2">
            <i class='bx bx-plus'></i> Add Post
        </a>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-instagram'></i></div>
                    <div>
                        <div class="stat-label">Total Posts</div>
                        <div class="stat-value">{{ $posts->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-check-circle'></i></div>
                    <div>
                        <div class="stat-label">Active</div>
                        <div class="stat-value">{{ $posts->where('is_active', true)->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-x-circle'></i></div>
                    <div>
                        <div class="stat-label">Inactive</div>
                        <div class="stat-value">{{ $posts->where('is_active', false)->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-sort'></i></div>
                    <div>
                        <div class="stat-label">Avg Sort Order</div>
                        <div class="stat-value">{{ $posts->avg('sort_order') ? number_format($posts->avg('sort_order'), 1) : '0' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card instagram-card">
        <div class="table-responsive">
            <table class="table table-instagram mb-0">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Preview</th>
                        <th>Instagram URL</th>
                        <th>Image URL</th>
                        <th>Sort Order</th>
                        <th class="text-center">Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $key => $post)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            @if($post->image_url)
                                <img src="{{ $post->image_url }}" class="ig-thumb" style="width: 80px; height: 80px; overflow: hidden;" alt="Post" onerror="this.src='https://via.placeholder.com/60x60?text=IG'">
                            @else
                                <div class="ig-thumb-placeholder">
                                    <i class='bx bx-image'></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ $post->instagram_url }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                                {{ strlen($post->instagram_url) > 50 ? substr($post->instagram_url, 0, 50) . '...' : $post->instagram_url }}
                            </a>
                        </td>
                        <td>
                            @if($post->image_url)
                                <span style="font-size: .85rem; color: #6b7280;">{{ strlen($post->image_url) > 35 ? substr($post->image_url, 0, 35) . '...' : $post->image_url }}</span>
                            @else
                                <span class="text-muted">Default</span>
                            @endif
                        </td>
                        <td>{{ $post->sort_order }}</td>
                        <td class="text-center">
                            @if ($post->is_active)
                            <span class="badge-pill badge-active">Active</span>
                            @else
                            <span class="badge-pill badge-inactive">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <form action="{{ route('admin.instagram.destroy', $post->id) }}" method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Delete this Instagram post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">
                                    <i class='bx bx-trash-alt'></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">
                            <div class="empty-state text-center">
                                <i class='bx bx-instagram d-block mb-2' style="font-size: 48px;"></i>
                                <p class="mb-3 text-muted">No Instagram posts found</p>
                                <a href="{{ route('admin.instagram.create') }}" class="btn btn-brand btn-sm px-3">
                                    <i class='bx bx-plus'></i> Add your first post
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection