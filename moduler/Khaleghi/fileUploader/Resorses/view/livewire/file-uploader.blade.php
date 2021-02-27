@extends('Dashboard::master')
@section('breadcrumb')
    <li><a href="{{ route('role-permissions.index') }}" title="آپلودر">آپلودر </a></li>
@endsection
@section('content')
    <div class="row no-gutters  ">
        <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">

            <form wire:submit.prevent="save">
                <input type="file" wire:model="photo">

                @error('photo') <span class="error">{{ $message }}</span> @enderror

                <button type="submit">Save Photo</button>
            </form>

        </div>

    </div>
@endsection
